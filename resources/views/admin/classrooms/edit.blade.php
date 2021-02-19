@extends('layouts.admin-master')

@section('title', 'Edit Classrooms')

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
                <h4>Edit Classrooms</h4>
            </div> --}}
            <form action="{{ '/admin/classrooms/' . $model['id'] }}" method="post">
                @method('patch')
                @csrf
                <div class="card-body">
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Classroom</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" value="{{ $model['classroom'] }}" name="classroom" class="form-control @error('classroom') is-invalid @enderror" placeholder="First name" autofocus>
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