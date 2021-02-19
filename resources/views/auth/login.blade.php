<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
        <title>@yield('title', 'Login') &mdash; {{ config('app.name') }}</title>

        <!-- Fontawesome -->
        <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.css') }}">

        <!-- Template CSS -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <body>
        <div id="app">
            <section class="section">
                <div class="d-flex flex-wrap align-items-stretch">
                    <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
                        <div class="p-4 m-3">
                            <div class="mb-5 mt-2"></div>
                            <h4 class="text-dark font-weight-normal">Welcome to <span class="font-weight-bold">{{ config('app.name') }}</span></h4>
                            <p class="text-muted">Before you get started, you must login or register if you don't already have an account.</p>
                            <form method="post" action="{{ route('login') }}">
                                @csrf

                                <!-- Email -->
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autofocus tabindex="1">
                                    <div class="invalid-feedback">
                                        @error('email') {{ $message }}  @enderror
                                    </div>
                                </div>

                                <!-- Password -->
                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">Password</label>
                                    </div>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" tabindex="2" autocomplete="">
                                    <div class="invalid-feedback">
                                        @error('password') {{ $message }}  @enderror
                                    </div>
                                </div>

                                <!-- Remember Me -->
                                {{-- <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                                    <label class="custom-control-label" for="remember-me">Remember Me</label>
                                    </div>
                                </div> --}}

                                <!-- Forgot Password -->
                                <div class="form-group text-right">
                                    <a href="{{ route('password.request') }}" class="float-left mt-3">
                                    Forgot Password?
                                    </a>
                                    <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="3">
                                        Login
                                    </button>
                                </div>

                                <!-- Registration -->
                                <div class="mt-5 text-center">
                                    Don't have an account? <a href="{{ route('register') }}">Create new one</a>
                                </div>
                            </form>

                            <div class="text-center mt-5 text-small">
                                Copyright &copy; <a href="https://github.com/KELOMPOK-2-RPL2-SMKN1SUBANG">Kelompok 2</a> <div class="bullet"></div> {{ date('Y') }}
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-8 mt-2 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="img/background/wavy_bus.jpg">
                        <div class="absolute-bottom-left index-2">
                            <div class="text-white p-5 pb-2">
                                <div class="mb-5 pb-3">
                                    <h1 class="mb-2 display-3 font-weight-bold">{{ config('app.name') }}</h1>
                                    <h5 class="font-weight-normal text-muted-transparent">Subang, Indonesia</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- General JS Scripts -->
        <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.nicescroll.min.js') }}"></script>
        <script src="{{ asset('assets/js/momment.min.js') }}"></script>

        <!-- Script -->
        <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>

