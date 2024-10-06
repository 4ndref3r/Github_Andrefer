@extends('layout.master')
@section('parentPageTitle', 'Project')
@section('title', 'Clients')


@section('content')
<div class="row clearfix">
    <div class="col-12">
        @if(session("correcto"))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <i class="fa fa-check-circle"></i> {{session("correcto")}}
        </div>
    @endif
    @if(session("incorrecto"))
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <i class="fa fa-times-circle"></i> {{session("incorrecto")}}
    </div>
    @endif
    <div class="card">
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#Users">Usuarios</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#addUser">Añadir usuarios</a></li>        
        </ul>
        <div class="tab-content mt-0">
            <div class="tab-pane show active" id="Users">
                <div class="table-responsive">
                    <table class="table table-hover table-custom spacing8">
                        <thead>
                            <tr>
                                <th class="w60">Nombre</th>
                                <th></th>
                                <th>Rol</th>
                                <th>Fecha Ingreso</th>
                                <th>CI</th>
                                <th class="w100">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($usuarios as $usuario)
                            <tr>
                                <td class="width45">
                                    <div class="avtar-pic w35 bg-pink" data-toggle="tooltip" data-placement="top" title="Avatar Name"><span>{{ strtoupper(substr($usuario->nombres, 0, 1)) . strtoupper(substr($usuario->apellidoPaterno, 0, 1)) }}</span></div>
                                </td>
                                <td>
                                    <h6 class="mb-0">{{$usuario->nombres .' '. $usuario->apellidoPaterno .' '. $usuario->apellidoMaterno}}</h6>
                                    <span>{{$usuario->email}}</span>
                                </td>
                                <td><span class="badge 
                                    @if($usuario->rol == 'SUPER_ADMIN') badge-danger
                                    @elseif($usuario->rol == 'ADMIN') badge-info
                                    @elseif($usuario->rol == 'DOCENTE') badge-success
                                    @endif">
                                    {{$usuario->rol}}</span></td>
                                <td>{{$usuario->fechaIngreso}}</td>
                                <td>{{$usuario->ci}}</td>
                                <td>
                                    @if($usuario->rol!='SUPER_ADMIN')
                                    <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#exampleModalLabel" title="Editar"><i class="fa fa-edit"></i></button>
                                        @if($usuario->estado == 1)
                                            <form action="{{ route('usuarios.delete', $usuario->id) }}" method="POST" class="d-inline-block js-delete-form">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-default js-sweetalert" title="Eliminar"><i class="fa fa-trash-o text-danger"></i></button>
                                            </form>
                                        @else
                                            <form action="{{ route('usuarios.enable', $usuario->id) }}" method="POST" class="d-inline-block">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-default" title="Habilitar"><i class="fa fa-check text-success"></i></button>
                                            </form>
                                        @endif
                                    @else
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>                
                </div>
            </div>
            <div class="tab-pane" id="addUser">
                <div class="body mt-2">
                    <form action="{{route('usuarios.create')}}" method="POST">
                        @csrf
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="form-group">
                                    <input name="aPaterno" type="text" class="form-control" placeholder="Apellido Paterno *">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="form-group">
                                    <input name="aMaterno" type="text" class="form-control" placeholder="Apellido Materno">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="form-group">
                                    <input name="nombres" type="text" class="form-control" placeholder="Nombres *">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="form-group">
                                    <input name="email" type="email" class="form-control" placeholder="Correo *">
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="form-group">
                                    <input name="ci" type="text" class="form-control" placeholder="Nro de Carnet">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Contraseña*">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <div class="form-group">
                                    <input name="Celular" type="text" class="form-control" placeholder="No de Celular *">
                                </div>
                            </div>                            

                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Employee ID *">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <div class="form-group">                                   
                                    <input name="ingreso" type="datetime" class="form-control" placeholder="Fecha de ingreso *">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <div class="form-group">
                                    <select name="rol" class="form-control show-tick">
                                        <option>Selecciona el rol</option>
                                        <option>ADMIN</option>
                                        <option>DOCENTE</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>            
    </div>
    </div>
    <div class="modal fade" id="exampleModalLabel" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Editar usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="basic-form" action="{{ route('usuarios.update') }}" method="post" data-parsley-validate novalidate>
                        @csrf
                        <div class="form-group">
                            <div class="row clearfix">
                                <input name="id" type="text" value="{{ $usuario->id }}" hidden>
                                <div class="col-lg-6 col-md-12">
                                    <label>Nombres</label>
                                    <input name="nombres" type="text" class="form-control" value="{{ $usuario->nombres }}" required>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <label>Apellido Paterno</label>
                                    <input name="aPaterno" type="text" class="form-control" value="{{ $usuario->apellidoPaterno }}">
                                </div>
                            </div>                                    
                        </div>
                        <div class="form-group">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12">
                                    <label>Apellido Materno</label>
                                    <input name="aMaterno" type="text" class="form-control" value="{{ $usuario->apellidoMaterno }}" required>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <label>Nro. Carnet</label>
                                    <input name="ci" type="text" id="text-input1" value="{{ $usuario->ci }}" class="form-control" required data-parsley-minlength="6">
                                </div>
                            </div>                                    
                        </div>
                        <div class="form-group">
                            <label>Correo</label>
                            <input name="email" type="email" value="{{ $usuario->email }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12">
                                    <label>Fecha Ingreso</label>
                                    <input name="ingreso" data-provide="datepicker" value="{{ $usuario->fechaIngreso }}" data-date-autoclose="true" class="form-control" data-date-format="dd/mm/yyyy">
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <label>Rol</label>
                                    <select name="rol" value="{{ $usuario->rol }}" class="form-control show-tick">
                                        <option>Selecciona el rol</option>
                                        <option>ADMIN</option>
                                        <option>DOCENTE</option>
                                    </select>
                                </div>
                            </div>                                    
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-round btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-round btn-primary">Guardar cambios</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>  
</div>
@stop

@section('page-styles')

@stop

@section('page-script')
<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
@stop