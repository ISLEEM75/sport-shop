@extends('layouts.app')

@section('content')
    <section class="sub-bnr" data-stellar-background-ratio="0.5">
        <div class="position-center-center">
            <div class="container">
                <h4>LOGIN</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula.
                    Sed feugiat, tellus vel tristique posuere, diam</p>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">PAGES</a></li>
                    <li class="active">LOGIN</li>
                </ol>
            </div>
        </div>
    </section>
    <div class="container">
        <section class="chart-page padding-top-100 padding-bottom-100">
        <div class="shopping-cart">
            <div class="cart-ship-info">
                <div class="row">
                    <div class="col-sm-7">
                        <h6><div class="card-header">{{ __('Login') }}</div></h6>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <ul class="row">

                                <!-- Name -->
                                <li class="col-md-12">
                                    <label> {{ __('E-Mail Address') }}
                                        <input id="email" type="email"
                                               class="form-control @error('email') is-invalid @enderror" name="email"
                                               value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </label>
                                </li>
                                <li class="col-md-12">
                                    <label> {{ __('Password') }}
                                        <input id="password" type="password"
                                               class="form-control @error('password') is-invalid @enderror" name="password"
                                               required autocomplete="current-password">
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </label>

                                </li>
                                <li class="col-md-4">
                                    <button type="submit" class="btn">{{ __('Login') }}</button>
                                </li>
                                <li class="col-md-4">
                                    <div class="checkbox margin-0 margin-top-20">
                                        <input id="checkbox1" class="styled" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                                        <label for="checkbox1"> {{ __('Remember Me') }}</label>
                                    </div>
                                </li>
                                <!-- FORGET PASS -->
                                <li class="col-md-4">
                                    <div class="checkbox margin-0 margin-top-20 text-right">
                                        @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                                        @endif
                                    </div>
                                </li>
                            </ul>


                        </form>
                    </div>
                </div>
            </div>
        </div>
        </section>
    </div>

@endsection
