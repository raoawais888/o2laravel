<x-app-layout>
    <x-slot name="header">
       
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <h2>Balance: $ {{ Auth::user()->balance}} </h2>
        

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="row p-3">
<div class="col-md-4">
@if(session('error'))

<script>
toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.error("{{ session('error') }}");
</script>
       
    @endif
@if(session('success'))

<script>
toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.success("{{ session('success') }}");
</script>
       
    @endif

    <form action="{{ route('email.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <div class="form-field">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" required>
                @error('email')
                    <span>{{ $message }}</span>
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary"> Submit</button>
    </form>
    </div>

    <div class="col-md-8">
  
    @if($user_data->isEmpty())
    <p>No credentials found.</p>
@else
<table class="table table-bordered">


<thead>
    <th>#</th>
    <th>email</th>
    <th>password</th>
    @if(Auth::user()->role == 1)
    <th>Name</th>

    @endif
</thead>


<tbody>
@foreach($user_data as $data)
    <tr>
    <td>{{ $loop->iteration }}
        <td>{{ $data->username }}</td>
        <td>{{ $data->password }}</td>
        @if(Auth::user()->role == 1)
        <td>{{ $data->user->name }}</td>

    @endif
    </tr>

    @endforeach
</tbody>
</table>

   <!-- Render pagination links -->
   {{ $user_data->links() }}
@endif

</div>

</div>
            </div>
        </div>
    </div>
</x-app-layout>
