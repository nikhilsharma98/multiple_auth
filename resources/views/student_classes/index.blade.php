@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Student Classes</h2>    
    <a href="{{route('student_classes.create')}}" class="btn btn-success">Create Student Class</a><br><br>
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Class</th>
            <th scope="col">Section</th>
            <th scope="col">Teacher Name</th>
            {{-- <th scope="col">Student Work</th> --}}
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
              
            @foreach ($student_classes as $student_class)
                <tr>
                    <td>{{ $student_class->id }}</td>
                    <td>
                        <a href="{{ route('student_classes.show', $student_class->id) }}" >
                        {{ $student_class->class }}
                    </td>
                    <td>{{ $student_class->section }}</td>
                    
                    <td>
                        @foreach ($student_class->teacher as $teacher)
                            {{ $teacher->first_name }} {{ $teacher->last_name }}
                        @endforeach 
                    </td>
                    {{-- <td>
                        @foreach ($student_class->student_work as $student_work)
                            {{ $student_work->title }}{{ $student_work->description }}
                        @endforeach 
                    </td> --}}
                    
                        
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
@endsection
