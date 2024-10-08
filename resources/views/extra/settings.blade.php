@extends('layout.master')
@section('parentPageTitle', 'Extra')
@section('title', 'Settings')


@section('content')
<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <ul class="nav nav-tabs mb-2">
                <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#Company_Settings">Mi perfil</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Change_Password">Cambiar Contraseña </a></li>
            </ul>
            <div class="tab-content mt-0">
                <div class="tab-pane active show" id="Company_Settings">
                    <div class="card text-white bg-info">
                        <div class="card-header">Configuración de Perfil</div>
                        <div class="card-body">
                            <form action="{{ route('perfil.update') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Nombres <span class="text-danger">*</span></label>
                                            <input name="nombres" class="form-control" type="text" value="{{ $user->nombres }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Apellido Paterno <span class="text-danger">*</span></label>
                                            <input name="aPaterno" class="form-control" value="{{ $user->apellidoPaterno }}" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Apellido Materno </label>
                                            <input name="aMaterno" class="form-control" value="{{ $user->apellidoMaterno }}" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Correo <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-envelope"></i></span>
                                                </div>
                                                <input name="email" type="text" class="form-control" value="{{ $user->email }}" type="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Fecha de ingreso</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-calendar"></i></span>
                                                </div>
                                                <input name="ingreso" type="date" class="form-control" value="{{ $user->fechaIngreso }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label>Nro de Carnet</label>
                                            <input name="ci" class="form-control" value="{{ $user->ci }}" type="text">
                                        </div>
                                    </div>                                
                                    <div class="col-sm-6 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label>Nro de Celular</label>
                                            <input name="celular" class="form-control" value="{{ $user->celular }}" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label>Rol</label>
                                            <select class="form-control">
                                                <option>ADMIN</option>
                                                <option>DOCENTE</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label>Foto de perfil</label>
                                            <input class="form-control" value="91403" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 text-right m-t-20">
                                        <button type="submit" class="btn btn-primary">GUARDAR</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>                        
                </div>
                <div class="tab-pane" id="Change_Password">
                    <div class="card text-white bg-blue">
                        <div class="card-header">Cambiar Contraseña</div>
                        <div class="card-body">
                            <form id="changePasswordForm" action="{{ route('perfil.changePassword') }}" method="POST">
                                @csrf
                                <div class="row clearfix">                              
                                    <div class="col-lg-12 col-md-12">
                                        <hr>
                                        <h6>Cambiar Contraseña</h6>
                                        <div class="form-group">
                                            <input name="current_password" type="password" class="form-control" placeholder="Contraseña Actual">
                                            <span class="text-danger" id="current_password_error"></span>
                                        </div>
                                        <div class="form-group">
                                            <input id="new_password" name="new_password" type="password" class="form-control" placeholder="Nueva Contraseña">
                                            <span class="text-danger" id="new_password_error"></span>
                                        </div>
                                        <div class="form-group">
                                            <input id="new_password_confirmation" name="new_password_confirmation" type="password" class="form-control" placeholder="Confirmar Nueva Contraseña">
                                            <span class="text-danger" id="new_password_confirmation_error"></span>
                                            <span id="password_match_message" class="text-success" style="display:none;">Las contraseñas coinciden.</span>
                                            <span id="password_mismatch_message" class="text-danger" style="display:none;">Las contraseñas no coinciden.</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 m-t-20 text-right">
                                        <button type="submit" class="btn btn-primary">GUARDAR</button> &nbsp;
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/dropify/css/dropify.min.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/vendor/dropify/js/dropify.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/forms/dropify.js') }}"></script>
<script>
    $(document).ready(function() {
        // Verifica coincidencia de contraseñas en tiempo real
        $('#new_password, #new_password_confirmation').on('input', function() {
            const newPassword = $('#new_password').val();
            const newPasswordConfirmation = $('#new_password_confirmation').val();
            
            if (newPassword === newPasswordConfirmation && newPassword !== '') {
                $('#password_match_message').show();
                $('#password_mismatch_message').hide();
                $('#new_password_confirmation').removeClass('is-invalid').addClass('is-valid');
            } else {
                $('#password_match_message').hide();
                $('#password_mismatch_message').show();
                $('#new_password_confirmation').removeClass('is-valid').addClass('is-invalid');
            }
        });
    
        $('#changePasswordForm').on('submit', function(event) {
            // Evita el envío del formulario si hay errores
            let valid = true;
    
            // Limpia mensajes de error
            $('.text-danger').text('');
    
            // Verifica campos vacíos
            if ($('input[name="current_password"]').val() === '') {
                $('#current_password_error').text('Este campo es obligatorio.');
                valid = false;
            }
            if ($('input[name="new_password"]').val() === '') {
                $('#new_password_error').text('Este campo es obligatorio.');
                valid = false;
            }
            if ($('input[name="new_password_confirmation"]').val() === '') {
                $('#new_password_confirmation_error').text('Este campo es obligatorio.');
                valid = false;
            }
    
            // Si no es válido, evita el envío
            if (!valid) {
                event.preventDefault();
            }
        });
    });
    </script>
@stop