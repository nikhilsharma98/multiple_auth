@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-md-8 offset-md-2">
        <h1>Create Admin</h1>
        <hr>
        <form action="{{route('admins.store')}}" method="post" enctype="multipart/form-data" data-toggle="validator" role="form">
        {{ csrf_field() }}
            

            <div class="form-group">
                <label for="first_name" class="col-md-4 control-label">First Name</label>
                <input type="first_name" class="form-control" name="first_name" data-error="First Name Is Required." id="first_name" placeholder="First Name" required>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="last_name" class="col-md-4 control-label">Last Name</label>
                <input type="last_name" class="form-control" name="last_name" data-error="Last Name Is Required." id="last_name" placeholder="Last Name" required>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="email" class="col-md-4 control-label">Email:</label>
                <input type="email" class="form-control" name="email" data-error="Email Is Required." id="email" placeholder="Email" required>
                <div class="text-danger help-block with-errors"></div>
            </div>
            
            <div class="form-group">
                <label for="password" class="col-md-4 control-label">Password</label>
                <input type="password" class="form-control" name="password" data-error="Password Is Required." id="password" placeholder="Password" required>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="image" class="col-md-4 control-label">Image</label>
                <input type="file" class="form-control" name="image" data-error="Image Is Required." id="image" placeholder="Image" required>
                <div class="text-danger help-block with-errors"></div>
            </div>
     
 
            <button type="submit" class="col-md-8 offset-md-2 btn btn-success">Submit</button>
        </form>
    </div>
</div>
@endsection