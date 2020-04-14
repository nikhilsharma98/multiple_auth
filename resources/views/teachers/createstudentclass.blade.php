@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-md-8 offset-md-2">
        <h1>Create Teacher</h1>
        <hr>
        <form action="{{ url('teachers/storestudentclass') }}" method="post" enctype="multipart/form-data" data-toggle="validator" role="form">
        {{ csrf_field() }}
            

            <div class="form-group">
                <label for="student_class" class="col-md-4 control-label">Student Class</label>
                {{-- <input type="first_name" class="form-control" name="first_name" data-error="First Name Is Required." id="first_name" placeholder="First Name" required> --}}
                <select name="student_class_id" class="form-control"  data-error="First Name Is Required." id="first_name" placeholder="First Name" required>
                            
                    <option value="">----Select-----</option>
                    @foreach($student_classes as $student_class)
                        <option value="{{$student_class->id}}">{{$student_class->title}} {{$student_class->section}}</option>
                         
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

{{-- @extends('layouts.app')

@section('content')
<div class="col-md-12">
    <h2>Assign Class</h2>
    <form class="form-horizontal" id="teachers"  method="POST" action="{{ url('teachers/storestudentclass') }}"  novalidate>
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('student_class') ? ' has-error' : '' }}">
                <label for="student_class" class="col-md-4 control-label">Student Class </label>
    
                <div class="col-md-6">
                 
                    <select name="student_class_id">
                            
                        <option value="">----Select-----</option>
                        @foreach($student_classes as $student_class)
                            <option value="{{$student_class->id}}">{{$student_class->title}} {{$student_class->section}}</option>
                             
                        @endforeach
                        
                    </select>
                    @if ($errors->has('student_class'))
                        <span class="help-block">
                            <strong>{{ $errors->first('student_class') }}</strong>
                        </span>
                    @endif
                </div>
        </div>

           <div class="form-group"> 
            <input type="hidden"  name="teacher_id" value="{{$teacher_id}}">        
        </div>

        
       

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Save
                </button>
            </div>
        </div>
    </form>
</div>
@endsection --}}