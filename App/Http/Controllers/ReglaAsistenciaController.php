<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReglaAsistencia;

class ReglaAsistenciaController extends Controller
{
    public function index()
    {
        // Obtener la regla de asistencia
        $regla = ReglaAsistencia::first(); // Suponiendo que solo tienes una regla
        return view('job.jobdashboard', compact('regla'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'campo' => 'required|string',
            'valor' => 'required|integer',
        ]);

        // Actualizar el campo específico de la regla de asistencia
        $regla = ReglaAsistencia::first();
        $regla->{$request->campo} = $request->valor;
        $regla->idUsuario = session('user_id');
        $regla->save();

        return redirect()->route('config.reglas')->with('success', 'Configuración actualizada correctamente.');
    }
}
