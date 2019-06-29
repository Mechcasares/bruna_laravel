@extends('layouts.master')
@section('content')
<main>
<div id="faqs" class="login-form">
    <form action="" method="post">
        <div class="avatar">
            <img src="img/User-Profile.png" alt="Avatar">
        </div>
        <h2 class="text-center"> LOGIN</h2>
        <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="Email" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Contraseña" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Logeate</button>
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