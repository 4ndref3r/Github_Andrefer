<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materia;

class MateriaController extends Controller
{
    public function index()
    {

        $materias=Materia::all();
        return view('hr.employee', compact('materias'));
    }

    public function store(Request $request)
    {
        try {
            // Valida los datos
            $validated = $request->validate([
                'nombreMateria' => 'required|string|max:255',
            ]);
            $idUsuario = session('user_id');
            // Crea el grupo
            // Crea el grupo e incluye idUsuario
            $materia = Materia::create(array_merge($validated, ['idUsuario' => $idUsuario]));
    
            // Mensaje de éxito
            return redirect()->route('materias.index')->with('correcto', 'Grupo creado exitosamente.');
        } catch (\Exception $e) {
            // Mensaje de error
            return redirect()->route('materias.index')->with('incorrecto', 'Error al crear el grupo: ' . $e->getMessage());
        }
    }
}
