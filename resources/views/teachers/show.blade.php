@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Teacher List</h2><br>

    <a href="{{route('teachers.create')}}" class="btn btn-success">Create Teacher</a><br><br>
    <a href="{{route('students.create')}}" class="btn btn-success">Add Student</a><br><br>
    <a href="{{ url('teachers/create/' . $teacher->id)}}" class="btn btn-success" role="button">Assign Class & Work</a><br><br>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                {{-- <th scope="col">Password</th> --}}
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
              
            {{-- @foreach ($teachers as $teacher) --}}
                <tr>
                    <td>{{ $teacher->id }}</td>
                    <td>{{ $teacher->first_name }}</td>
                    <td>{{ $teacher->last_name }}</td>
                    <td>{{ $teacher->email }}</td>
                    {{-- <td>{{ $teacher->password }}</td> --}}
                    <td>{{ $teacher->address }}</td>
                    <td>{{ $teacher->age }}</td>
                    <td>{{ $teacher->experience }}</td>
                    <td>{{ $teacher->aadhar_id }}</td>
                    <td>{{ $teacher->dob }}</td>
                    <td>{{ $teacher->gender }}</td>
                    {{-- <td>
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
                    </td> --}}
                </tr>
            {{-- @endforeach --}}
        </tbody>
      </table>                      
</div>
@endsection


