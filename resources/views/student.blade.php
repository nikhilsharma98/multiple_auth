
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    You are logged Student
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="row justify-content-center">
        <table class="table table-striped">
            <tbody>
                <tr class="text-center">
                    <td>
                        <a href="{{url('students/show')}}" class="btn btn-success">Students List</a>                       
                    </td>
                    
                    <td>
                        <a href="{{url('student_works/show')}}" class="btn btn-success">Students Work List</a>                       
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection