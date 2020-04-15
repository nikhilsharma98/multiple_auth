@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-md-8 offset-md-2">
        <h1>Create Student Work</h1>
        <hr>
        <form action="{{route('student_works.store')}}" method="post" enctype="multipart/form-data" data-toggle="validator" role="form">
            <input type="hidden" id="student_class_id" name="student_class_id" value="">
            {{ csrf_field() }}
            

            <div class="form-group">
                <label for="title" class="col-md-4 control-label">Title</label>
                <input type="title" class="form-control" name="title" data-error="Title Is Required." id="title" placeholder="Title" required>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="description" class="col-md-4 control-label">Description</label>
                <input type="description" class="form-control" name="description" data-error="Description Is Required." id="description" placeholder="Description" required>
                <div class="text-danger help-block with-errors"></div>
            </div>
            
            <div class="form-group">
                <label for="class" class="col-md-4 control-label">Class</label>
                <select name="class" class="form-control" data-error="Class Is Required." id="class" required>
                    <option>Choose Class</option> 
                    @foreach($student_classes as $student_class)
                    <option value="{{ $student_class->id }}">{{ $student_class->class }}</option>
                    @endforeach
                </select>
                <div class="text-danger help-block with-errors"></div>
            </div>
 
            <button type="submit" class="col-md-8 offset-md-2 btn btn-success">Submit</button>
        </form>
    </div>
</div>
@endsection