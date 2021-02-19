@extends('layouts.admin-master')

@section('title', 'Classrooms')

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
                <h4>Classrooms <span>({{ $count }})</span></h4>
                <div class="card-header-action">
                    <a href="/classrooms/create" class="btn btn-primary">Add <i class="fas fa-plus"></i></a>
                </div>
            </div>
        </div> --}}
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h4>Classrooms <span>({{ $count }})</span></h4>
        <div class="card-header-action">
            <a href="{{ route('admin.classrooms.create') }}" class="btn btn-primary">Add <i class="fas fa-plus"></i></a>
        </div>
        {{-- <div class="card-header-form">
            <form>
                <div class="input-group">
                <input type="text" class="form-control" placeholder="Search">
                <div class="input-group-btn">
                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                </div>
                </div>
            </form>
        </div> --}}
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <th scope="col">Classroom</th>
                        <th scope="col"></th>
                    </tr>
                    @foreach ($classrooms as $classroom)      
                    <tr>
                        <td>{{ $classroom['classroom'] }}</td>
                        <td>
                            <form action="{{ '/admin/classrooms/' . $classroom['id'] }}" method="post">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                <a href="{{ '/admin/classrooms/' . $classroom['id'] . '/edit' }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
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
                {{ $classrooms->links() }}
            </ul>
        </nav>
    </div>
</div>
@endsection