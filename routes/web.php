<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/thankyou', function () {
    return view('thankyou');
});


Route::get('/offer/{id}', [EmailController::class, 'offer'])->name('email.offer');

   


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    
    Route::get('/dashboard', [EmailController::class, 'index'])->name('dashboard');
    Route::post('/email-form', [EmailController::class, 'store'])->name('email.store');
    Route::post('/user-credentials', [EmailController::class, 'create'])->name('email.create');


});
