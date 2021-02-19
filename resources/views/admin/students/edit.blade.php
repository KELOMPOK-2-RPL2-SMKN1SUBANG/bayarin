@extends('layouts.admin-master')

@section('title', 'Edit Students')

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
                <h4>Edit Students</h4>
            </div> --}}
            <form action="{{ '/admin/students/' . $model['id'] }}" method="post">
                @method('patch')
                @csrf
                <div class="card-body">
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">First name</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" value="{{ $model['first_name'] }}" name="first_name" class="form-control @error('first_name') is-invalid @enderror" placeholder="First name" autofocus>
                            <div class="invalid-feedback">
                                @error('first_name') {{ $message }} @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Last name</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" value="{{ $model['last_name'] }}" name="last_name" class="form-control @error('last_name') is-invalid @enderror" placeholder="Last name" autofocus>
                            <div class="invalid-feedback">
                                @error('last_name') {{ $message }} @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NISN</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" value="{{ $model['nisn'] }}" name="nisn" class="form-control @error('nisn') is-invalid @enderror" placeholder="NISN">
                            <div class="invalid-feedback">
                                @error('nisn') {{ $message }} @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NIS</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" value="{{ $model['nis'] }}" name="nis" class="form-control @error('nis') is-invalid @enderror" placeholder="NIS">
                            <div class="invalid-feedback">
                                @error('nis') {{ $message }} @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Account Number</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="number" value="{{ $model['account_number'] }}" name="account_number" class="form-control @error('account_number') is-invalid @enderror" placeholder="Account Number">
                            <div class="invalid-feedback">
                                @error('nis') {{ $message }} @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Date of Birth</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="date" value="{{ $model['date_of_birth'] }}" name="date_of_birth" class="form-control @error('date_of_birth') is-invalid @enderror">
                            <div class="invalid-feedback">
                                @error('date_of_birth') {{ $message }} @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gender</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control @error('gender') is-invalid @enderror" name="gender">
                                <option value="" selected>-- Select Gender -- </option>
                                @foreach ($genders as $gender)
                                    @if ($gender == $model['gender'])
                                    <option value="{{ $model['gender'] }}" selected>{{ $model['gender'] }}</option>
                                    @else 
                                    <option value="{{ $gender }}">{{ $gender }}</option> --}}
                                    @endif
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                @error('gender') {{ $message }} @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Classroom</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control @error('classroom') is-invalid @enderror" value="{{ old('classroom') }}" name="classroom">
                                <option value="" selected>-- Select Classroom -- </option>
                                @foreach ($classrooms as $classroom)
                                    @if ($classroom->id == $model['classroom'])
                                    <option value="{{ $classroom->id }}" selected>{{ $classroom->classroom }}</option>
                                    @else 
                                    <option value="{{ $classroom->id }}">{{ $classroom->classroom }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                @error('classroom') {{ $message }} @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="email" value="{{ $model['email'] }}" name="email" class="form-control @error('email') is-invalid @enderror">
                            <div class="invalid-feedback">
                                @error('email') {{ $message }} @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Phone Number</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" value="{{ $model['phone_number'] }}" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror">
                            <div class="invalid-feedback">
                                @error('phone_number') {{ $message }} @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Address</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" value="{{ $model['address'] }}" name="address" class="form-control @error('address') is-invalid @enderror">
                            <div class="invalid-feedback">
                                @error('address') {{ $message }} @enderror
                            </div>
                        </div>
                    </div>
                    {{-- <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Password</label>
                        <div class="col-sm-12 col-md-7">
                            <input v-bind:class="{'is-invalid': errors.password}" type="password" v-model="password" class="form-control" autocomplete="new-password" placeholder="Set an account password.">
                            <div class="invalid-feedback" v-if="errors.password">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Confirm Password</label>
                        <div class="col-sm-12 col-md-7">
                            <input v-bind:class="{'is-invalid': errors.password_confirmation}" type="password" v-model="password_confirmation" class="form-control" placeholder="Confirm account password." autocomplete="new-password">
                            <div class="invalid-feedback" v-if="errors.password_confirmation">
                                <p></p>
                            </div>
                        </div>
                    </div> --}}
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