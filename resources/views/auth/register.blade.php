@extends('layouts.app')

@section('content')
<div class="grid-container">
  <h4>{{ __('Register') }}</h4>
    <div class="grid-y grid-padding-y">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="medium-6 cell">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback error" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
            </div>

            <div class="medium-6 cell">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback error" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
            </div>

            <div class="medium-6 cell">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback error" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
            </div>

            <div class="medium-6 cell">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="button success hollow">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
