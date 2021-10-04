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
                        <h3 class="center-align" style="color: #07097f">Sign In</h3>
                        <div class="alert alert-danger">
                            <span class="text-white">You Can not Sign Up without Referral Link</span>
                        </div>
                       <form action="{{ route('register') }}">
                           @csrf
                            <div class="row">
                                <div class="input-field col s12">
                                    <input
                                        id="username"
                                        type="text"
                                        name="username" class="validate
                                        @error('username') is-invalid @enderror"
                                        value="{{ old('username') }}">
                                        <label for="username" class="active">{{ __('Username') }}</label>
                                        @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                <input
                                    id="password"
                                    type="password"
                                    name="password" class="validate
                                    @error('password') is-invalid @enderror"
                                    value="{{ old('password') }}">
                                    <label for="password">{{ __('Password') }}</label>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                     @if (Route::has('password.request'))
                                <a class="text-danger" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn-submit">
                                        {{ __('Sign In') }}
                                    </button>
                                </div>
                            </div>
                       </form>
                        <div class="row">
                            <div class="input-field col s12">
                            <a href="{{ route('register') }}" style="color: #07097f">
                                <strong>{{ __("Don't have an account?") }}</strong>
                                <span class="text-danger">{{ __("Sign Up") }}</span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

