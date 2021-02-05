@extends('layouts.admin.index')

@section('title', 'Payments')

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
                <h4>Payments <span>({{ $payments->count() }})</span></h4>
                <div class="card-header-action">
                    <a href="/payments/create" class="btn btn-primary">Add <i class="fas fa-plus"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card">
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
                        <th scope="col">Payment</th>
                        <th scope="col">Nominal</th>
                        <th scope="col">Classroom</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($payments as $payment)      
                    <tr>
                        <td>{{ $payment['payment'] }}</td>
                        <td>Rp. {{ $payment['nominal'] }}</td>
                        <td>
                            @if ($payment['classroom'] == 0)
                                {{ 'All Classroom' }}
                            @else 
                                {{ $payment->class->classroom }}
                            @endif
                        </td>
                        <td>
                            <form action="{{ '/payments/' . $payment['id'] }}" method="post">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                <a href="{{ '/payments/' . $payment['id'] . '/edit' }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
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
                {{-- {{ $payments->links() }} --}}
            </ul>
        </nav>
    </div>
</div>
@endsection