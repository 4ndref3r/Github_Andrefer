<?php

namespace App\Http\Controllers;

use App\Aula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AulaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aulas = Aula::all();
        return view('hr.departments',compact('aulas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        try {
            $sql=DB::insert("INSERT INTO aula(nombre,capacidad,disponibilidad) VALUES (?,?,?)",[
                $request->nombre,
                $request->capacidad,
                $request->libre,
            ]);
        } catch (\Throwable $th) {
            return back()->with("incorrecto", "Error al registrar: " . $th->getMessage());
        }
        if($sql==true){
            return back()->with("correcto","Aula registrada correctamente");
        } else {
            return back()->with("incorrecto","Error al registrar"); 
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try {
            $sql=DB::update("UPDATE aula SET nombre=?, capacidad=?, disponibilidad=? WHERE id=?",[
                $request->nombre,
                $request->capacidad,
                $request->disponibilidad,
                $request->id,
            ]);
        } catch (\Throwable $th) {
            return back()->with("incorrecto", "Error al modificar: " . $th->getMessage());
        }
        if($sql==true){
            return back()->with("correcto","Usuario modificado correctamente");
        } else {
            return back()->with("incorrecto","Error al modificar"); 
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
