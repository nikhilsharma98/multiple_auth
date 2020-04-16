@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Admins</h2>    
    <a href="{{route('admins.create')}}" class="btn btn-success">Create Admin</a><br><br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
              
         @foreach ($admins as $admin)
            <tr>
                <td>{{ $admin->id }}</td>
                <td>{{ $admin->first_name }}</td>
                <td>{{ $admin->last_name }}</td>
                <td>{{ $admin->email }}</td>
                <td><img class="rounded" src='{{asset('storage/'.$admin->image)}}' height="50px" width="100px"></td>
                <td>
                    <a href="{{ route('admins.edit', $admin->id) }}" class="btn btn-primary">
                        Edit
                    </a>                       
    
                    <form class="form-horizontal pull-right" action="{{ URL::route('admins.destroy', [$admin->id]) }}" method="POST" >
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
