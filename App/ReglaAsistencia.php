<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReglaAsistencia extends Model
{
    use HasFactory;
    protected $table = 'reglaasistencia';
    const CREATED_AT='fechaCreacion';
    const UPDATED_AT='fechaModificacion';
    protected $fillable = ['minRetraso', 'minFalta', 'duracionAcad'];
}
