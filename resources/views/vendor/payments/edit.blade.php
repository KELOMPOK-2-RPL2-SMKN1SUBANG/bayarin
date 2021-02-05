@extends('layouts.admin.index')

@section('title', 'Edit Payments')

@section('content')
<div class="row">
    <div class="col-12">
        @if (session('status'))
        <div class="alert alert-primary">
            {{ session('status') }}
        </div>
        @endif
        <div class="card">
            {{-- <div class="card-header">
                <h4>Add Payments</h4>
            </div> --}}
            <form action="{{ '/payments/' . $payment['id'] }}" method="post">
                @method('patch')
                @csrf
                <div class="card-body">
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Payment</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" value="{{ $payment['payment'] }}" name="payment" class="form-control @error('payment') is-invalid @enderror" placeholder="Payment name" autofocus>
                            <div class="invalid-feedback">
                                @error('payment') {{ $message }} @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nominal</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" value="{{ $payment['nominal'] }}" name="nominal" class="form-control @error('nominal') is-invalid @enderror" placeholder="Payment nominal">
                            <div class="invalid-feedback">
                                @error('nominal') {{ $message }} @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Classroom</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control @error('classroom') is-invalid @enderror" value="{{ $payment['classroom'] }}" name="classroom">
                                <option value="0">{{ 'All Classroom' }}</option>
                                @foreach ($classrooms as $classroom)
                                    @if ($payment['classroom'] == 0)
                                        <option value="0" selected>{{ 'All Classroom' }}</option>
                                    @elseif ($payment['classroom'] == $classroom['id'])
                                        <option value="{{ $classroom['id'] }}" selected>{{ $classroom['classroom'] }}</option>
                                    @else 
                                        <option value="{{ $classroom['id'] }}">{{ $classroom['classroom'] }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                @error('classroom') {{ $message }} @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection