@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Students</h2>    
    <a href="{{route('students.create')}}" class="btn btn-success">Create Student</a><br><br>
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Class</th>
            <th scope="col">Email</th>
            <th scope="col">Father Name</th>
            <th scope="col">Mother Name</th>
            <th scope="col">Aadhar ID</th>
            <th scope="col">Age</th>
            <th scope="col">DOB</th>
            <th scope="col">DOA</th>
            <th scope="col">Image</th>
            <th scope="col">Gender</th>
            <th scope="col">Address</th>
            <th scope="col">City</th>
            <th scope="col">State</th>
            <th scope="col">Countary</th>
            <th scope="col">Action</th>
            
            </tr>
        </thead>
        <tbody>
              
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td><a href="{{ route('students.show', $student->id) }}" >
                        {{ $student->first_name }}
                    </td>
                    <td>{{ $student->last_name }}</td>
                    <td>{{ $student->student_class->class }}
                        {{ $student->student_class->section }}</td>
                    <td>{{ $student->email }}</td>
                    {{-- <td>{{ $student->password }}</td> --}}
                    <td>{{ $student->father_name }}</td>
                    <td>{{ $student->mother_name }}</td>
                    <td>{{ $student->aadhar_id }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->dob }}</td>
                    <td>{{ $student->doa }}</td>
                    <td><img class="rounded" src='{{asset('storage/'.$student->image)}}' height="50px" width="100px"></td>
                    <td>{{ $student->gender }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->city }}</td>
                    <td>{{ $student->state->name }}</td>
                    <td>{{ $student->countary->name }}</td>
                    
                    <td>
                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary">
                            Edit
                        </a>                       

                        <form class="form-horizontal pull-right" action="{{ URL::route('students.destroy', [$student->id]) }}" method="POST" >
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


