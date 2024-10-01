@extends('layout.authentication')
@section('title', 'Login')


@section('content')
<div class="pattern">
    <span class="red"></span>
    <span class="indigo"></span>
    <span class="blue"></span>
    <span class="green"></span>
    <span class="orange"></span>
</div>

<div class="auth-main particles_js">
    <div class="auth_div vivify popIn">
        <div class="auth_brand">
            <a class="navbar-brand" href="javascript:void(0);"><img src="../assets/images/icon.svg" width="30" height="30" class="d-inline-block align-top mr-2" alt="">Sayani</a>
        </div>
        <div class="card">
            <div class="body">
                <p class="lead">Inicia sesión con tu cuenta</p>
                <form class="form-auth-small m-t-20" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="signin-email" class="control-label sr-only">Correo</label>
                        <input name="email" type="email" class="form-control round" id="signin-email" placeholder="Email">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="signin-password" class="control-label sr-only">Contraseña</label>
                        <input name="password" type="password" class="form-control round" id="signin-password" placeholder="Password">
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group clearfix">
                        <label class="fancy-checkbox element-left">
                            <input type="checkbox" name="remember">
                            <span>Recuerdame</span>
                        </label>								
                    </div>
                    <div class="form-group">
                        @if ($errors->has('message'))
                            <span class="text-danger">{{ $errors->first('message') }}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary btn-round btn-block">INICIAR SESIÓN</button>
                    <div class="bottom">
                        <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="{{route('authentication.forgotpassword')}}">Olvidaste tu contraseña?</a></span>
                        <span>No tienes una cuenta? <a href="{{route('authentication.register')}}">Registrate</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="particles-js"></div>
</div>
@stop

@section('page-styles')

@stop

@section('page-script')

@stop