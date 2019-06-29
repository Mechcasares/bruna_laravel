@extends('layouts.master')
@section('content')
<main>
    <div class="register-form">
            <form method="POST" action="{{ route('register') }}">
            @csrf   
                <div class="avatar">
                    <img src="img/User-Profile.png" alt="Avatar">
                </div>
                <h2 class="text-center"> {{ __('REGISTRO') }} </h2>

                <div class="">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="nombre" placeholder="{{ __('Nombre') }}" value="{{ old('name') }}" required autocomplete="name" autofocus> 

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <br>
                <div class="form-group">
                    <input id="email" type="email" class="form-control @error ('email') invalido @enderror" name="email" placeholder={{ __('Email') }} required autocomplete="email" value="{{ old('email') }}"> 
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="phone" placeholder="Telefono" required="required" value="">
                </div>

                <div class="form-group">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"  name="password" placeholder="{{ __('Contraseña') }}" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="{{ __('Confirmar Contraseña') }}" required autocomplete="new-password">
                </div>  

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">{{ __('Registrate') }}</button>
                </div>
            </form>
        </div>


    </main>
@endsection