<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    protected $table='aula';
    protected $fillable = [
        'id',
        'nombre',
        'capacidad',
        'disponibilidad',
        'idUsuario',
        'estado'
    ];
    use HasFactory;
}
