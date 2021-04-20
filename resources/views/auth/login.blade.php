@extends('layouts/main')

@section('title', 'PTSP')
@section('container')

<div class="bg-form">
        <div class="card p-4">
          <div class="panel-heading bg-success p-2">
            <h3 class="panel-title text-white"  style="text-align:center" >LOGIN</h3>
          </div>
          <div class="panel-body ">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group row mb-3 mt-3">
                    <label for="nip" class="col-md-4 col-form-label text-md-right">{{ __('NIP Petugas') }}</label>

                    <div class="col-md-6">
                        <input id="nip" type="nip" class="form-control @error('nip') is-invalid @enderror" name="nip" value="{{ old('nip') }}" required autocomplete="nip" autofocus>

                        @error('nip')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row  mt-3">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-1">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row p-2">
                    
                        <button type="submit" class="btn btn-success">
                            {{ __('Login') }}
                        </button>

                        <!-- @if (Route::has('password.request'))
                            <a class="small nav-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                        <hr> -->
                        <a class="nav-link small text-secondary" href="{{ route('register') }}">{{ __('Need an account? Sign up!') }}</a>
                </div>
            </form>
          </div>
        </div> 
      </div>

@endsection
