<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grupo;
use App\Aula;

class GrupoController extends Controller
{
    public function index()
    {

        $grupos=Grupo::all();
        $aulas = Aula::all();
        return view('hr.events', compact('grupos','aulas'));
    }

    public function store(Request $request)
    {
        try {
            // Valida los datos
            $validated = $request->validate([
                'nombreGrupo' => 'required|string|max:255',
                'fechaInicio' => 'required|date',
                'fechaFin' => 'nullable|date',
                'cargaHoraria' => 'required|integer',
                'turno' => 'required|string|max:100',
                'idAula' => 'required|exists:aula,id',
            ]);
            $idUsuario = session('user_id');
            // Crea el grupo
            // Crea el grupo e incluye idUsuario
            $grupo = Grupo::create(array_merge($validated, ['idUsuario' => $idUsuario]));
    
            // Mensaje de éxito
            return redirect()->route('grupos.index')->with('correcto', 'Grupo creado exitosamente.');
        } catch (\Exception $e) {
            // Mensaje de error
            return redirect()->route('grupos.index')->with('incorrecto', 'Error al crear el grupo: ' . $e->getMessage());
        }
    }
}
