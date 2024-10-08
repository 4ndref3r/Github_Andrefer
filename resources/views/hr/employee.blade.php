@extends('layout.master')
@section('parentPageTitle', 'HR ')
@section('title', 'Employee')


@section('content')
<div class="row clearfix">
    <div class="col-lg-12">
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
            <ul class="nav nav-tabs2">
                <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#e_departments">Materia</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#e_add">Añadir</a></li>                
            </ul>
            <div class="tab-content">
                <div class="tab-pane" id="e_add">
                    <form method="POST" action="{{route('materias.store')}}">
                    @csrf
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-md-12">
                                <div class="form-group">                                    
                                    <input name="nombreMateria" type="text" class="form-control" placeholder="Nombre de la materia">
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Añadir</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="tab-pane show active" id="e_departments">
                    <div class="table-responsive">
                        <table class="table table-hover js-basic-example dataTable table-custom spacing5 mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Materia</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $contador=1; @endphp
                                @foreach ($materias as $materia)
                                    <tr>
                                        <td>{{ $contador++ }}</td>
                                        <td>{{$materia->nombreMateria}}</td>
                                        <td>{{$materia->estado}}</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-default" title="Editar" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-sm btn-default js-sweetalert" title="Eliminar" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                        </td>
                                    </tr>                                 
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Vertically centered -->
                <div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Editar Aula</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('aulas.update') }}" method="POST" data-parsley-validate novalidate>
                                    @csrf
                                    <div class="form-group">
                                        <div class="row clearfix">
                                            <input name="id" type="text" value="" hidden>
                                            <div class="col-lg-6 col-md-12">
                                                <label>Nombre</label>
                                                <input name="nombre" type="text" class="form-control" value="" required>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <label>Capacidad</label>
                                                <input name="capacidad" type="text" class="form-control" value="">
                                            </div>
                                        </div>                                    
                                    </div>
                                    <div class="form-group">
                                        <div class="row clearfix">
                                            <div class="col-lg-6 col-md-12">
                                                <label>Disponibilidad</label>
                                                <input name="libre" type="text" class="form-control" value="" required>
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
        </div>
    </div>
</div>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/sweetalert/sweetalert.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/dropify/css/dropify.min.css') }}">
<style>
.dataTables_length{display: none;}
</style>

@stop

@section('page-script')
<script src="{{ asset('assets/vendor/sweetalert/sweetalert.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('assets/bundles/datatablescripts.bundle.js') }}"></script>
<script src="{{ asset('assets/vendor/dropify/js/dropify.min.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/forms/dropify.js') }}"></script>
<script src="{{ asset('assets/js/pages/ui/dialogs.js') }}"></script>
<script src="{{ asset('assets/js/pages/tables/jquery-datatable.js') }}"></script>
<script>
    $('.dataTable').dataTable({searching: false});
</script>
@stop