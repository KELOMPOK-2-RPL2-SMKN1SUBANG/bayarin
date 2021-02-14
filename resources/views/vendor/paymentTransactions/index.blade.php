@extends('layouts.admin.index')

@section('title', 'Payment Transactions')

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
            <form action="/payment-transactions/search" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Accout Number</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" value="{{ old('account_number') }}" name="account_number" class="form-control @error('account_number') is-invalid @enderror" placeholder="Account Number" autofocus>
                            <div class="invalid-feedback">
                                @error('account_number') {{ $message }} @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Payment</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control @error('payment') is-invalid @enderror" value="{{ old('payment') }}" name="payment">
                                <option value="" selected>-- Select Payment -- </option>
                                @foreach ($payments as $payment)
                                    <option value="{{ $payment['id'] }}">{{ $payment['payment'] }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                @error('payment') {{ $message }} @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Payment Method</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control @error('payment_method') is-invalid @enderror" value="{{ old('payment_method') }}" name="payment_method">
                                <option value="" selected>-- Select Payment Method -- </option>
                                @foreach ($paymentMethod as $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                @error('payment_method') {{ $message }} @enderror
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