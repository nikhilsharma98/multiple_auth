@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-md-8 offset-md-2">
        <h1>Create Student Class</h1>
        <hr>
        <form action="{{route('student_classes.store')}}" method="post" enctype="multipart/form-data" data-toggle="validator" role="form">
        {{ csrf_field() }}
            <input type="hidden" id="teacher_id" name="teacher_id" value="">


            {{-- <div class="form-group">
                <label for="class" class="col-md-4 control-label">Class</label>
                <input type="title" class="form-control" name="title" data-error="Title Is Required." id="title" placeholder="Title" required>
                <select name="class" class="form-control" data-error="Class Is Required." id="class" placeholder="Class" required />
                    <option value="">----Select-----</option>
                    <option value="First">First</option>
                    <option value="Second">Second</option>
                    <option value="Third">Third</option>
                    <option value="Fourth">Fourth</option> 
                    <option value="Fifth">Fifth</option>
                </select>
                <div class="text-danger help-block with-errors"></div>
            </div> --}}

            <div class="form-group">
                <label for="class" class="col-md-4 control-label">Class</label>
                <select name="class" class="form-control" data-error="Class Is Required." id="name" placeholder="Class" required />
                    <option value="">----Select-----</option>
                    <option value="First">First</option>
                    <option value="Second">Second</option> 
                    <option value="Third">Third</option> 
                    <option value="Fourth">Fourth</option>
                    <option value="Fifth">Fifth</option>   
                </select>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="section" class="col-md-4 control-label">Section</label>
                <input type="section" class="form-control" name="section" data-error="Section Is Required." id="last_name" placeholder="Section" required>
                <div class="text-danger help-block with-errors"></div>
            </div>
            
            
 
            <button type="submit" class="col-md-8 offset-md-2 btn btn-success">Submit</button>
        </form>
    </div>
</div>
@endsection