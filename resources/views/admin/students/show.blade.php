@extends('layouts.admin-master')

@section('title', 'Detail Students')

@section('content')
<div class="card">
    <div class="card-header">
    <h4 class="card-title">{{ $student['name'] }}</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <tr>
                    <th scope="col">Name</th>
                    <td>{{ $student['name'] }}</td>
                </tr>
                <tr>
                    <th scope="col">NISN</th>
                    <td>{{ $student['nisn'] }}</td>
                </tr>
                <tr>
                    <th scope="col">NIS</th>
                    <td>{{ $student['nis'] }}</td>
                </tr>
                <tr>
                    <th scope="col">Date Of Birth</th>
                    <td>{{ $student['date_of_birth'] }}</td>
                </tr>
                <tr>
                    <th scope="col">Gender</th>
                    <td>{{ $student['gender'] }}</td>
                </tr>
                <tr>
                    <th scope="col">Classroom</th>
                    <td>{{ $student->class->classroom }}</td>
                </tr>
                <tr>
                    <th scope="col">Phone Number</th>
                    <td>{{ $student['phone_number'] }}</td>
                </tr>
                <tr>
                    <th scope="col">Address</th>
                    <td>{{ $student['address'] }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection