@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-md-8 offset-md-2">
        <h1>Edit Teacher</h1>
        <hr> 
        <form action="{{ URL::route('teachers.update', $teacher->id) }}" method="POST" enctype="multipart/form-data" data-toggle="validator" role="form">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" id="student_class_id" name="student_class_id" value="">

            {{ csrf_field() }}


            <div class="form-group">
                <label for="first_name" class="col-md-4 control-label">First Name</label>
                <input type="first_name" value="{{$teacher->first_name}}" class="form-control" name="first_name" data-error="First Name Is Required." id="first_name" placeholder="First Name" required>
                <div class="text-danger help-block with-errors"></div>
            </div>
            
            <div class="form-group">
                <label for="last_name" class="col-md-4 control-label">Last Name</label>
                <input type="last_name" value="{{$teacher->last_name}}" class="form-control" name="last_name" data-error="Last Name Is Required." id="last_name" placeholder="Last Name" required>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="email" class="col-md-4 control-label">Email:</label>
                <input type="email" value="{{$teacher->email}}" class="form-control" name="email" data-error="Email Is Required." id="email" placeholder="Email" required>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="password" class="col-md-4 control-label">Password</label>
                <input type="password" value="{{$teacher->password}}" class="form-control" name="password" data-error="Password Is Required." id="password" placeholder="Password" required>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="address" class="col-md-4 control-label">Address</label>
                <input type="text" value="{{$teacher->address}}" class="form-control" name="address" data-error="Address Is Required." id="address" placeholder="Address" required>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="age" class="col-md-4 control-label">Age</label>
                <input type="number" value="{{$teacher->age}}" class="form-control" name="age" data-error="Age Is Required." id="age" placeholder="Age" required>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="experience" class="col-md-4 control-label">Experience</label>
                <input type="text" value="{{$teacher->experience}}" class="form-control" name="experience" data-error="Experience Is Required." id="address" placeholder="Experience" required>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="aadhar_id" class="col-md-4 control-label">Aadhar Id</label>
                <input type="text" value="{{$teacher->aadhar_id}}" class="form-control" name="aadhar_id" data-error="Aadhar Id Is Required." id="aadhar_id" placeholder="Aadhar Id" required>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="dob" class="col-md-4 control-label">DOB</label>
                <input type="date" value="{{$teacher->dob}}" class="form-control" name="dob" data-error="DOB Id Is Required." id="dob" placeholder="Aadhar Id" required>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="gender" class="col-md-4 control-label">Gender</label>
                {{-- <input type="text" value="{{$teacher->gender}}" class="form-control" name="gender" data-error="Gender Id Is Required." id="gender" placeholder="Gender" required> --}}
                <div class="form-control" name="gender" data-error="Gender Id Is Required." id="gender" placeholder="Gender" required>
                    <input id="gender" type="radio" name="gender" value="{{ $teacher->gender }}" Checked>Male
                    <input id="gender" type="radio" name="gender" value="{{ $teacher->gender }}"  >Female
                </div>
                <div class="text-danger help-block with-errors"></div>
            </div>
            
            <button type="submit" class="col-md-8 offset-md-2 btn btn-success">Submit</button>

        </form>
    </div>
</div>
@endsection

