@extends('layouts.auth')

@section('content')
    <section class="login-sectionv py-15 position-relative overflow-hidden w-100 h-100 ">
        <div class="cmn-scroll-wrapper d-center">
            <div class="cmn-scroll">
                
                <div class="left-logwrap d-center p-xxl-10 p-xl-8 p-6 radius24">
                    <div class="authentication-cmn">
                       
                        <div class="log-title text-center mb-xxl-15 mb-xl-10 mb-6">
                            <h3 class="mb-xxl-6 mb-4">
                                Iniciar sesión
                            </h3>

                        </div>

                        <form method="POST" action="{{ route('login') }}" id="loginForm" class="form-cmn-action">
                            @csrf

                            <div class="row mb-3">
                                <label for="email" class="">{{ __('Email Address') }}</label>

                                <div>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="">{{ __('Password') }}</label>

                                <div>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="row mb-0">
                                <div class="">
                                    <button type="submit"
                                        class="btn btn-primary cmn-btn s1-bg radius12 w-100 fw_600 justify-content-center d-inline-flex align-items-center gap-2 py-xxl-4 py-3 px-xl-6 px-5 n0-clr mt-1">
                                        <span class="fw_600 n0-clr">
                                            Iniciar sesion
                                        </span>
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js') }}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\auth\LoginRequest', '#loginForm') !!}
@endsection
