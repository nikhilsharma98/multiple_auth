@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Student Works List</h2><br><br>

    {{-- <a href={{route('student_classes.index')}} class="btn btn-success">Menu</a><br><br> --}}
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($student_works as $student_work)
                <tr>
                    <td>{{ $student_work->id }}</td>
                    <td>{{ $student_work->title }}</td>
                    <td>{{ $student_work->description }}</td>
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


