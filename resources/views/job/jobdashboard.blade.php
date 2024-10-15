@extends('layout.master')
@section('parentPageTitle', 'Job ')
@section('title', 'Dashboard')


@section('content')
<div class="row clearfix">
    <!-- Sección de configuración de parámetros -->
    <div class="col-lg-12">
        <h1>Configuración de Asistencia</h1>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <i class="fa fa-check-circle"></i>{{ session('success') }}
            </div>
        @endif
    </div>
<!-- Hora Académica -->
<div class="col-lg-4 col-md-6 col-sm-12">
    <div class="card w_card3">
        <div class="body">
            <div class="text-center">
                <i class="fa fa-clock-o fa-3x"></i>
                <h5 class="m-t-20 mb-0">Hora Académica</h5>
                <p class="text-muted" id="horaAcademica-text">{{ $regla->duracionAcad }} minutos</p>
                <input type="number" id="horaAcademica-input" class="form-control" value="{{ $regla->duracionAcad }}" style="display:none;">
                <form action="{{ route('config.update') }}" method="POST" class="d-inline" id="horaAcademica-form" style="display:none;">
                    @csrf
                    <input type="hidden" name="campo" value="duracionAcad">
                    <input type="hidden" name="valor" id="horaAcademica-value">
                    <button type="submit" class="btn btn-success btn-round" id="horaAcademica-save" style="display:none;">Guardar</button>
                </form>
                <a href="javascript:void(0);" class="btn btn-info btn-round" onclick="toggleInput('horaAcademica')">Modificar</a>
            </div>
        </div>
    </div>
</div>

<!-- Tolerancia -->
<div class="col-lg-4 col-md-6 col-sm-12">
    <div class="card w_card3">
        <div class="body">
            <div class="text-center">
                <i class="fa fa-hourglass-half fa-3x"></i>
                <h5 class="m-t-20 mb-0">Tolerancia</h5>
                <p class="text-muted" id="minutosRetraso-text">{{ $regla->minRetraso }} minutos</p>
                <input type="number" id="minutosRetraso-input" class="form-control" value="{{ $regla->minRetraso }}" style="display:none;">
                <form action="{{ route('config.update') }}" method="POST" class="d-inline" id="minutosRetraso-form" style="display:none;">
                    @csrf
                    <input type="hidden" name="campo" value="minRetraso">
                    <input type="hidden" name="valor" id="minutosRetraso-value">
                    <button type="submit" class="btn btn-success btn-round" id="minutosRetraso-save" style="display:none;">Guardar</button>
                </form>
                <a href="javascript:void(0);" class="btn btn-info btn-round" onclick="toggleInput('minutosRetraso')">Modificar</a>
            </div>
        </div>
    </div>
</div>

<!-- Falta -->
<div class="col-lg-4 col-md-6 col-sm-12">
    <div class="card w_card3">
        <div class="body">
            <div class="text-center">
                <i class="fa fa-times-circle fa-3x"></i>
                <h5 class="m-t-20 mb-0">Falta</h5>
                <p class="text-muted" id="minFalta-text">{{ $regla->minFalta }} minutos</p>
                <input type="number" id="minFalta-input" class="form-control" value="{{ $regla->minFalta }}" style="display:none;">
                <form action="{{ route('config.update') }}" method="POST" class="d-inline" id="minFalta-form" style="display:none;">
                    @csrf
                    <input type="hidden" name="campo" value="minFalta">
                    <input type="hidden" name="valor" id="minFalta-value">
                    <button type="submit" class="btn btn-success btn-round" id="minFalta-save" style="display:none;">Guardar</button>
                </form>
                <a href="javascript:void(0);" class="btn btn-info btn-round" onclick="toggleInput('minFalta')">Modificar</a>
            </div>
        </div>
    </div>
</div>
</div>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/c3/c3.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/jvectormap/jquery-jvectormap-2.0.3.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/bundles/c3.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/jvectormap.bundle.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/jobdashboard.js') }}"></script>
<script>
    function toggleInput(campo) {
        const text = document.getElementById(`${campo}-text`);
        const input = document.getElementById(`${campo}-input`);
        const form = document.getElementById(`${campo}-form`);
        const saveButton = document.getElementById(`${campo}-save`);

        if (input.style.display === "none") {
            // Mostrar el input y el botón de guardar
            input.style.display = "block";
            text.style.display = "none";
            input.focus();
            saveButton.style.display = "inline";
            // Asignar el valor del input al campo oculto del formulario
            document.getElementById(`${campo}-value`).value = input.value;

            // Actualizar el valor del campo oculto en el formulario
            input.addEventListener('input', function() {
                document.getElementById(`${campo}-value`).value = input.value;
            });
        } else {
            // Ocultar el input y el botón de guardar
            input.style.display = "none";
            text.style.display = "block";
            saveButton.style.display = "none";
        }
    }
</script>
@stop