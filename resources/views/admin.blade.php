{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    You are logged in admin!
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
                        <a href="{{url('teachers/show')}}" class="btn btn-success">Teachers List</a>                       
                    </td>
                    <td>
                        <a href="{{url('student_classes/show')}}" class="btn btn-success">Student Classes List</a>                       
                    </td>
                    <td>
                        <a href="{{url('student_works/show')}}" class="btn btn-success">Student Works List</a>                       
                    </td>
                    
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection --}}



@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    You are logged in Admin!
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
                        <a href="{{url('teachers/show')}}" class="btn btn-success">Teachers List</a>                       
                    </td>
                    <td>
                        <a href="{{url('student_classes/show')}}" class="btn btn-success">Student Classes List</a>                       
                    </td>
                    <td>
                        <a href="{{url('student_works/show')}}" class="btn btn-success">Student Works List</a>                       
                    </td>
                    
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection