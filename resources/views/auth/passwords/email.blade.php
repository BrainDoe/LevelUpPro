@extends('layouts.auth.app')
    @section('content')
    <div class="fluid-container">
            <div class="row mt-5">
                <div class="col-md-6 col-lg-3 mx-auto">
                  <div class="card">
                    <div class="card-content">
                        <div class="center-align">
                            <a class="" href="/">
                                <img class="" src="{{ asset('images/logo.png') }}" alt="LevelUp" height="150px" width="150px">
                            </a>
                        </div>
                        <h5 class="center-align" style="color: #07097f">Forgot Username Or Password</h5>
                        <p class="center-align" style="color: #07097f">Enter your email address and we'll send you a link to reset your password.</p>
                       <form action="{{ route('login') }}">
                           @csrf
                            <div class="row">
                                <div class="input-field col s12">
                                    <input
                                        id="email"
                                        type="email"
                                        name="email" class="validate
                                        @error('email') is-invalid @enderror"
                                        value="{{ old('email') }}">
                                        <label for="email" class="active">{{ __('Email') }}</label>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                <a href="{{ route('login') }}" style="color: #07097f">
                                    <strong>{{ __('Go to') }}</strong> <span class="text-danger">{{ __('LOGIN') }}</span>
                                </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn-submit">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                                </div>
                            </div>
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

