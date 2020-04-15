@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-md-8 offset-md-2">
        <h1>Edit Student</h1>
        <hr> 
        <form action="{{ URL::route('students.update', $student->id) }}" method="POST" enctype="multipart/form-data" data-toggle="validator" role="form">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" id="student_class_id" name="student_class_id" value="">

            {{ csrf_field() }}


            <div class="form-group">
                <label for="first_name" class="col-md-4 control-label">First Name</label>
                <input type="first_name" value="{{$student->first_name}}" class="form-control" name="first_name" data-error="First Name Is Required." id="first_name" placeholder="First Name" required>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="last_name" class="col-md-4 control-label">Last Name</label>
                <input type="last_name" value="{{$student->last_name}}" class="form-control" name="last_name" data-error="Last Name Is Required." id="last_name" placeholder="Last Name" required>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="email" class="col-md-4 control-label">Email:</label>
                <input type="email" value="{{$student->email}}" class="form-control" name="email" data-error="Email Is Required." id="email" placeholder="Email" required>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="password" class="col-md-4 control-label">Password</label>
                <input type="password" value="{{$student->password}}" class="form-control" name="password" data-error="Password Is Required." id="password" placeholder="Password" required>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="father_name" class="col-md-4 control-label">Father Name</label>
                <input type="text" value="{{$student->father_name}}" class="form-control" name="father_name" data-error="Father Name Is Required." id="father_name" placeholder="Father Name" required>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="mother_name" class="col-md-4 control-label">Mother Name</label>
                <input type="text" value="{{$student->mother_name}}" class="form-control" name="mother_name" data-error="Mother Name Is Required." id="mother_name" placeholder="Mother Name" required>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="aadhar_id" class="col-md-4 control-label">Aadhar Id</label>
                <input type="text" value="{{$student->aadhar_id}}" class="form-control" name="aadhar_id" data-error="Aadhar Id Is Required." id="aadhar_id" placeholder="Aadhar Id" required>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="age" class="col-md-4 control-label">Age</label>
                <input type="number" value="{{$student->age}}" class="form-control" name="age" data-error="Age Is Required." id="age" placeholder="Age" required>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="dob" class="col-md-4 control-label">DOB</label>
                <input type="date" value="{{$student->dob}}" class="form-control" name="dob" data-error="DOB Id Is Required." id="dob" placeholder="Aadhar Id" required>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="doa" class="col-md-4 control-label">DOA</label>
                <input type="date" value="{{$student->doa}}" class="form-control" name="doa" data-error="DOA Id Is Required." id="doa" placeholder="DOA" required>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="image" class="col-md-4 control-label">Image</label>
                <input type="file" value="{{$student->image}}" class="form-control" name="image" data-error="Image Is Required." id="image" placeholder="Image" required>
                <img class="rounded" src='{{asset('storage/'.$student->image)}}' height="50px" width="100px">
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="gender" class="col-md-4 control-label">Gender</label>
                {{-- <input type="text" value="{{$student->gender}}" class="form-control" name="gender" data-error="Gender Id Is Required." id="gender" placeholder="Gender" required> --}}
                <div class="form-control" name="gender" data-error="Gender Id Is Required." id="gender" placeholder="Gender" required>
                    <input id="gender" type="radio" name="gender" value="{{ $student->gender }}" Checked>Male
                    <input id="gender" type="radio" name="gender" value="{{ $student->gender }}"  >Female
                </div>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="address" class="col-md-4 control-label">Address</label>
                <input type="text" value="{{$student->address}}" class="form-control" name="address" data-error="Address Is Required." id="address" placeholder="Address" required>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="city" class="col-md-4 control-label">City</label>
                <input type="text" value="{{$student->city}}" class="form-control" name="city" data-error="City Is Required." id="city" placeholder="City" required>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="state" class="col-md-4 control-label">State</label>
                {{-- <input type="text" class="form-control" name="state" data-error="State Is Required." id="state" placeholder="State" required> --}}
                <select name="state_id" class="form-control" data-error="State Is Required." id="state" placeholder="State" required>
                    <option value="">----Select-----</option>
                    @foreach($states as $state)
                        <option value="{{$state->id}}" @if ($state->id == $student->state_id) {{"selected"}} @endif>{{$state->name}}</option>
                    @endforeach  
                </select>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="countary" class="col-md-4 control-label">Countary</label>
                {{-- <input type="text" class="form-control" name="countary" data-error="Countary Is Required." id="countary" placeholder="Countary" required> --}}
                <select name="countary_id" class="form-control" data-error="Countary Is Required." id="countary" placeholder="Countary" required>
                    <option value="">-----Select-----</option>
                    @foreach($countries as $country)
                         <option value="{{$country->id}}" @if ($country->id == $student->countary_id) {{"selected"}} @endif>{{$country->name}}</option>
                    @endforeach
                </select>
                <div class="text-danger help-block with-errors"></div>
            </div>
            
            <button type="submit" class="col-md-8 offset-md-2 btn btn-success">Submit</button>

        </form>
    </div>
</div>
@endsection