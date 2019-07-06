@extends('layouts.master')
@section('content')
<main>
<div id="faqs" class="login-form">
    <form action="" method="post">
        <div class="avatar">
            <img src="img/User-Profile.png" alt="Avatar">
        </div>
        
        <h2 class="text-center"> {{ __('Login') }}</h2>
        
        <form method="POST" action="{{ route('login') }}">
        
        @csrf
        
        <div class="form-group">
            <input id= "email" type="text" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>

            @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
        </div>
        
        <div class="form-group">
            <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" " name="password" placeholder="Contraseña" required="required">

            @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block">{{ __('Login') }}</button>
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> Recordarme</label>
        @if (Route::has('password.request'))
            <a class="pull-right" href="{{ route('password.request') }}">
                {{ __('¿Olvidaste la contraseña?') }}
            </a>
        @endif
            
        </div>
    </form>
    <p class="text-center small">¿No tenes una cuenta? <a href="/register">Registrate</a></p>
</div>
</main>
@endsection



