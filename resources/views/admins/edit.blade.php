@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-md-8 offset-md-2">
        <h1>Edit Admin</h1>
        <hr> 
        <form action="{{ URL::route('admins.update', $admin->id) }}" method="POST" enctype="multipart/form-data" data-toggle="validator" role="form">
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}


            <div class="form-group">
                <label for="first_name" class="col-md-4 control-label">First Name</label>
                <input type="first_name" value="{{$admin->first_name}}" class="form-control" name="first_name" data-error="First Name Is Required." id="first_name" placeholder="First Name" required>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="last_name" class="col-md-4 control-label">Last Name</label>
                <input type="last_name" value="{{$admin->last_name}}" class="form-control" name="last_name" data-error="Last Name Is Required." id="last_name" placeholder="Last Name" required>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="email" class="col-md-4 control-label">Email:</label>
                <input type="email" value="{{$admin->email}}" class="form-control" name="email" data-error="Email Is Required." id="email" placeholder="Email" required>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="image" class="col-md-4 control-label">Image</label>
                <input type="file" value="{{$admin->image}}" class="form-control" name="image" data-error="Image Is Required." id="image" placeholder="Image" required>
                <img class="rounded" src='{{asset('storage/'.$admin->image)}}' height="50px" width="100px">
                <div class="text-danger help-block with-errors"></div>
            </div>
            
            <button type="submit" class="col-md-8 offset-md-2 btn btn-success">Submit</button>

        </form>
    </div>
</div>
@endsection