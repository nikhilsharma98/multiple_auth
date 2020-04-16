@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-md-8 offset-md-2">
        <h1>Edit Student Class</h1>
        <hr> 
        <form action="{{ URL::route('student_classes.update', $student_class->id) }}" method="POST" enctype="multipart/form-data" data-toggle="validator" role="form">
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}


           

            <div class="form-group">
                <label for="class" class="col-md-4 control-label">Class</label>
                <select name="class" class="form-control" data-error="Class Is Required." id="class" placeholder="Class" required />
                    <option value="First" @if ($student_class->class == 0) selected @endif>First</option>
                    <option value="Second" @if ($student_class->class == 1) selected @endif>Second</option>
                    <option value="Third" @if ($student_class->class == 2) selected @endif>Third</option>
                    <option value="Fourth" @if ($student_class->class == 3) selected @endif>Fourth</option>
                    <option value="Fifth" @if ($student_class->class == 4) selected @endif>Fourth</option>
                </select>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="section" class="col-md-4 control-label">Section</label>
                <input type="section" value="{{$student_class->section}}" class="form-control" name="section" data-error="Section Is Required." id="last_name" placeholder="Section" required>
                <div class="text-danger help-block with-errors"></div>
            </div>
            
            <button type="submit" class="col-md-8 offset-md-2 btn btn-success">Submit</button>

        </form>
    </div>
</div>
@endsection