@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Teachers</h1>    
    <a href="{{route('teachers.create')}}" class="btn btn-success">Create Teacher</a><br><br>
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Class</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Age</th>
            <th scope="col">Experience</th>
            <th scope="col">Aadhar ID</th>
            <th scope="col">DOB</th>
            <th scope="col">Gender</th>
            <th scope="col">Action</th>
            
            </tr>
        </thead>
        <tbody>
              
            @foreach ($teachers as $teacher)
                <tr>
                    <td>{{ $teacher->id }}</td>
                    <td>
                        <a href="{{ route('teachers.show', $teacher->id) }}" >
                        {{ $teacher->first_name }}
                    </td>
                    
                    <td>{{ $teacher->last_name }}</td>
                    <td>{{ $teacher->student_class->class }}
                        {{ $teacher->student_class->section }}</td>
                    <td>{{ $teacher->email }}</td>
                    <td>{{ $teacher->address }}</td>
                    <td>{{ $teacher->age }}</td>
                    <td>{{ $teacher->experience }}</td>
                    <td>{{ $teacher->aadhar_id }}</td>
                    <td>{{ $teacher->dob }}</td>
                    <td>{{ $teacher->gender }}</td>
                    {{-- <td>
                        @foreach ($teacher->student_class as $student_class)
                            {{ $student_class->title }}{{ $student_class->section }}
                        @endforeach 
                    </td> --}}
                    <td>
                        <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-primary">
                            Edit
                        </a>                       
        
                        <form class="form-horizontal pull-right" action="{{ URL::route('teachers.destroy', [$teacher->id]) }}" method="POST" >
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
