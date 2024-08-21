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
</thead>


<tbody>
@foreach($user_data as $data)
    <tr>
        <td>1</td>
        <td>{{ $data->email }}</td>
        <td>{{ $data->password }}</td>
    </tr>

    @endforeach
</tbody>
</table>
@endif

</div>

</div>