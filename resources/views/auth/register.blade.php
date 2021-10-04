<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
    <style type="text/css">
        body {
            font-family: Roboto, sans-serif;
            font-size: 13px;
            line-height: 1.538462;
            color: #7d7d8e;
            background-color: #f6f9fa;
        }
    </style>
</head>
<body>
    <div class="fluid-container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                  <div class="card">
                    <div class="card-content">
                        <div class="center-align">
                            <a class="" href="/">
                                <img class="" src="{{ asset('images/logo.png') }}" alt="LevelUp" height="150px" width="150px">
                              </a>

                        </div>
                          <h3 class="center-align" style="color: #07097f">Signup</h3>
                       <form method="POST" action="{{ route('register') }}">
                           @csrf
                            <div class="row">
                                <div class="input-field col s6">
                                <input
                                    id="firstname"
                                    type="text"
                                    name="firstname" class="validate
                                    @error('firstname') is-invalid @enderror"
                                    value="{{ old('firstname') }}">
                                    <label for="firstname" class="active">{{ __('Last Name') }}</label>
                                    @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="input-field col s6">
                                <input
                                    id="lastname"
                                    type="text"
                                    name="lastname" class="validate
                                    @error('lastname') is-invalid @enderror"
                                    value="{{ old('firstname') }}">
                                    <label for="lastname">{{ __('Last Name') }}</label>
                                    @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                <input
                                    id="username"
                                    type="text"
                                    name="username" class="validate
                                    @error('username') is-invalid @enderror"
                                    value="{{ old('username') }}">
                                    <label for="username">{{ __('Username') }}</label>
                                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="input-field col s6">
                                <input
                                    id="email"
                                    type="email"
                                    name="email" class="validate
                                    @error('email') is-invalid @enderror"
                                    value="{{ old('email') }}">
                                    <label for="email">{{ __('Email') }}</label>
                                    @error('email')
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
                                <input
                                    id="password_confirmation"
                                    type="password"
                                    name="password_confirmation" class="validate
                                    @error('password_confirmation') is-invalid @enderror"
                                    value="{{ old('password_confirmation') }}">
                                    <label for="password_confirmation">{{ __('Password Confirmation') }}</label>
                                    @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <select name="country" style="display: block">
                                        <option class="disabled selected">Select Country</option>
                                        @foreach ($allCountry as $country)
                                            <option value={{$country}} required>
                                                {{$country}}
                                            </option>
                                        @endforeach
                                    </select>
                                      @error('country')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                </div>
                                <div class="input-field col s6">
                                <input
                                    id="phone"
                                    type="number"
                                    name="phone" class="validate
                                    @error('phone') is-invalid @enderror"
                                    value="{{ old('phone') }}">
                                    <label for="phone">{{ __('Phone Number') }}</label>
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- Hidden input --}}
                        <div class="form-group row">
                            @php
                                $reg_number = bin2hex(random_bytes(4));
                            @endphp

                            <div class="col-md-6">
                                <input id="reg_number" type="text" class="form-control" name="reg_number" value="{{ $reg_number }}">
                            </div>
                        </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn-submit">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                       </form>
                    </div>
                  </div>
                </div>
              </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
   <!-- Compiled and minified JavaScript -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
