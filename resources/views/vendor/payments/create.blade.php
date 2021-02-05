@extends('layouts.admin.index')

@section('title', 'Create Payments')

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
            <form action="/payments" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Payment</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" value="{{ old('payment') }}" name="payment" class="form-control @error('payment') is-invalid @enderror" placeholder="Payment name" autofocus>
                            <div class="invalid-feedback">
                                @error('payment') {{ $message }} @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nominal</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" value="{{ old('nominal') }}" name="nominal" class="form-control @error('nominal') is-invalid @enderror" placeholder="Payment nominal">
                            <div class="invalid-feedback">
                                @error('nominal') {{ $message }} @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Classroom</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control @error('classroom') is-invalid @enderror" value="{{ old('classroom') }}" name="classroom">
                                <option value="0" selected>-- Select All Classroom -- </option>
                                @foreach ($classrooms as $classroom)
                                    <option value="{{ $classroom['id'] }}">{{ $classroom['classroom'] }}</option>
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