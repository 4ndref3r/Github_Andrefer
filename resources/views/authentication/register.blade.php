@extends('layout.authentication')
@section('title', 'Register')


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
            <a class="navbar-brand" href="javascript:void(0);"><img src="../assets/images/icon.svg" width="30" height="30" class="d-inline-block align-top mr-2" alt="">Oculux</a>                                                
        </div>
        <div class="card">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="body">
                <p class="lead">Crea una cuenta</p>
                <form class="form-auth-small m-t-25" method="POST" action="{{ route('register')}}">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <input name="aPaterno" type="text" class="form-control round" placeholder="Ap. Paterno *">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <input name="aMaterno" type="text" class="form-control round" placeholder="Ap. Materno">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-7">
                            <div class="form-group">
                                <input name="nombres" type="text" class="form-control round" placeholder="Nombres *">
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group">
                                <input name="ci" type="text" class="form-control round" placeholder="Nro CI *">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <input name="email" type="email" class="form-control round" placeholder="Tu correo *" required>
                    </div>
                    <div class="form-group">                            
                        <input name="password" type="password" class="form-control round" placeholder="Contraseña *" required>
                    </div>
                    <div class="form-group">                            
                        <input name="password_confirmation" type="password" class="form-control round" placeholder="Repite la contraseña *" required>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <input name="ingreso" type="date" class="form-control round" placeholder="Fecha Ingreso *">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <input name="celular" type="text" class="form-control round" placeholder="Celular *">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-round btn-block">Registrar</button>                                
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