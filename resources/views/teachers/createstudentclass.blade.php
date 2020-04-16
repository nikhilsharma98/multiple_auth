@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-md-8 offset-md-2">
        <h1>Assign Class & Work</h1>
        <hr>
        <form action="{{ url('teachers/storestudentclass') }}" method="post" enctype="multipart/form-data" data-toggle="validator" role="form">
            <input type="hidden" id="work_id" name="work_id" value="">
  
            {{ csrf_field() }}
            

            <div class="form-group">
                <label for="class" class="col-md-4 control-label">Class</label>
                {{-- <input type="first_name" class="form-control" name="first_name" data-error="First Name Is Required." id="first_name" placeholder="First Name" required> --}}
                <select name="student_class_id" class="form-control"  data-error="Class Is Required." id="class" placeholder="Class" required>
                            
                    <option value="">----Select-----</option>
                    @foreach($student_classes as $student_class)
                        <option value="{{$student_class->id}}">{{$student_class->class}} {{$student_class->section}}</option>
                         
                    @endforeach
                    
                </select>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="title" class="col-md-4 control-label">Work</label>
                {{-- <input type="first_name" class="form-control" name="first_name" data-error="First Name Is Required." id="first_name" placeholder="First Name" required> --}}
                <select name="title" class="form-control"  data-error="Title Is Required." id="title" placeholder="Title" required>
                            
                    <option value="">----Select-----</option>
                    @foreach ($student_works as $student_work)
                        <option value="{{$student_work->id}}"> {{$student_work->title}}</option>
                         
                    @endforeach
                    
                </select>
                <div class="text-danger help-block with-errors"></div>
            </div>

            

            <div class="form-group"> 
                <input type="hidden"  name="teacher_id" value="{{$teacher_id}}">        
            </div>
 
            
            <button type="submit" class="col-md-8 offset-md-2 btn btn-success">Submit</button>
        </form>
    </div>
</div>
@endsection
