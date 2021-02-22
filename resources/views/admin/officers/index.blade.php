@extends('layouts.admin-master')

@section('title', 'Officers')

@section('content')
<div class="row">
    <div class="col-md-12">
        @if (session('status'))
        <div class="alert alert-primary">
            {{ session('status') }}
        </div>
        @endif
        {{-- <div class="card">
            <div class="card-header">
                <h4>Students <span>({{ $count }})</span></h4>
                <div class="card-header-action">
                    <a href="{{ route('admin.students.create') }}" class="btn btn-primary">Add <i class="fas fa-plus"></i></a>
                </div>
            </div>
        </div> --}}
    </div>
</div>
<div class="card">
    {{-- <div class="card-header">
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
    </div> --}}
    <div class="card-header">
        <h4>Officers <span>({{ $officers->count() }})</span></h4>
        <div class="card-header-action">
            <a href="{{ route('admin.officers.create') }}" class="btn btn-primary">Add <i class="fas fa-plus"></i></a>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Address</th>
                        <th scope="col"></th>
                    </tr>
                    @foreach ($officers as $officer)      
                    <tr>
                        <td>{{ $officer['name'] }}</td>
                        <td>{{ $officer['email'] }}</td>
                        <td>{{ $officer['phone_number'] }}</td>
                        <td>{{ $officer['address'] }}</td>
                        <td class="text-center">
                            <form action="{{ '/admin/officers/' . $officer['id'] }}" method="post">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                <a href="{{ '/admin/officers/' . $officer['id'] . '/edit' }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                <a href="{{ '/admin/officers/' . $officer['id'] }}" class="btn btn-info"><i class="fa fa-search"></i></a>
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
                {{-- {{ $students->links() }} --}}
            </ul>
        </nav>
    </div>
</div>
@endsection