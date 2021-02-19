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
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h4>Students <span>({{ $users->count() }})</span></h4>
        <div class="card-header-action">
            <a href="/students/create" class="btn btn-primary">Add <i class="fas fa-plus"></i></a>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-striped">
                <tbody>
                    <th scope="col">Name</th>
                    <th scope="col">Emal</th>
                    <th scope="col"></th>
                    @foreach ($users as $user)      
                    <tr>
                        <td>{{ $user['name'] }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td class="text-right">
                            <form action="{{ '/students/' . $user['id'] }}" method="post">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger @if($user['id'] == Auth::user()->id) d-none @endif"><i class="fa fa-trash"></i></button>
                                <a href="{{ '/students/' . $user['id'] . '/edit' }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                <a href="{{ '/students/' . $user['id'] }}" class="btn btn-info"><i class="fa fa-search"></i></a>
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
                {{-- {{ $users->links() }} --}}
            </ul>
        </nav>
    </div>
</div>
@endsection
