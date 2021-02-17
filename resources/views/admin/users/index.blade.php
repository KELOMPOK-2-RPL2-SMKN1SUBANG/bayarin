@extends('layouts.admin-master')

@section('title')
Manage Users
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        @if (session('status'))
        <div class="alert alert-primary">
            {{ session('status') }}
        </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h4>Students <span>({{ 1 }})</span></h4>
                <div class="card-header-action">
                    <a href="/students/create" class="btn btn-primary">Add <i class="fas fa-plus"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <div class="card">
    <div class="card-header">
        <h4></h4>
        <div class="card-header-form">
            <form>
                <div class="input-group">
                <input type="text" class="form-control" placeholder="Search">
                <div class="input-group-btn">
                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Account Number</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Classroom</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)      
                    <tr>
                        <td>{{ $student['name'] }}</td>
                        <td>{{ $student['account_number'] }}</td>
                        <td>{{ $student['gender'] }}</td>
                        <td>{{ $student->class->classroom }}</td>
                        <td>{{ $student['phone_number'] }}</td>
                        <td class="text-right">
                            <form action="{{ '/students/' . $student['id'] }}" method="post">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                <a href="{{ '/students/' . $student['id'] . '/edit' }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                <a href="{{ '/students/' . $student['id'] }}" class="btn btn-info"><i class="fa fa-search"></i></a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer text-right">
        <nav class="d-inline-block">
            <ul class="pagination mb-0">
                {{ $students->links() }}
            </ul>
        </nav>
    </div>
</div> --}}
@endsection
