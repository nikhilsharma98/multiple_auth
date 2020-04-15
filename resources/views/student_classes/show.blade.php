{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <h2>Student Classes List</h2><br><br>

    
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Section</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($student_classes as $student_class)
                <tr>
                    <td>{{ $student_class->id }}</td>
                    <td>{{ $student_class->class }}</td>
                    <td>{{ $student_class->section }}</td>
                    <td>
                        <a href="{{ route('student_classes.edit', $student_class->id) }}" class="btn btn-primary">
                            Edit
                        </a>                       

                        <form class="form-horizontal pull-right" action="{{ URL::route('student_classes.destroy', [$student_class->id]) }}" method="POST" >
                                {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE"/>
                            <button type="submit" class="btn btn-danger" name="button" onclick="return confirm('Are you sure to delete this record?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>                      
</div>
@endsection  --}}



@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Student Works List</h2><br><br>
    
    {{-- <a href=" {{ url('student_works/create/' . $student_class->id)}}" class="btn btn-success" role="button">Home Work</a> --}}
    
    <div class="row">
        <h1>
            <div class="col-sm-12"><strong>Student Class:</strong> {{ $student_class->class}}({{ $student_class->section}})</div>
        </h1>
    </div>
  

    
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($student_class->student_work  as $student_work)
                <tr>
                    <td>{{ $student_work->id }}</td>
                    <td><a href="{{ route('student_works.show', $student_work->id) }}" >{{ $student_work->title }}</td>
                    <td>{{ $student_work->description }}</td>
                    <td>{{ $student_work->created_at }}</td>
                    <td>
                        <a href="{{ route('student_works.edit', $student_work->id) }}" class="btn btn-primary">
                            Edit
                        </a>                       

                        <form class="form-horizontal pull-right" action="{{ URL::route('student_works.destroy', [$student_work->id]) }}" method="POST" >
                                {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE"/>
                            <button type="submit" class="btn btn-danger" name="button" onclick="return confirm('Are you sure to delete this record?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach 
            
        </tbody>
    </table>                      
</div>
@endsection

