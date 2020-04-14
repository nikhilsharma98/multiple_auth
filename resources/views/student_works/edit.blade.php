@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-md-8 offset-md-2">
        <h1>Edit Student Work</h1>
        <hr> 
        <form action="{{ URL::route('student_works.update', $student_work->id) }}" method="POST" enctype="multipart/form-data" data-toggle="validator" role="form">
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}


            <div class="form-group">
                <label for="title" class="col-md-4 control-label">Title</label>
                <input type="title" value="{{$student_work->title}}" class="form-control" name="title" data-error="Title Is Required." id="title" placeholder="Title" required>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="description" class="col-md-4 control-label">Description</label>
                <input type="description" value="{{$student_work->description}}" class="form-control" name="description" data-error="Description Is Required." id="description" placeholder="Description" required>
                <div class="text-danger help-block with-errors"></div>
            </div>
            
            <button type="submit" class="col-md-8 offset-md-2 btn btn-success">Submit</button>

        </form>
    </div>
</div>
@endsection