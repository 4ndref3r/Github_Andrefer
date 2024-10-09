<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;
    protected $table='grupo';

    const CREATED_AT='fechaCreacion';
    const UPDATED_AT='fechaModificacion';

    protected $fillable=[
        'nombreGrupo','cargaHoraria','turno','fechaInicio','fechaFin','idAula','idUsuario',
    ];
    public function aula()
    {
        return $this->belongsTo(Aula::class, 'idAula');
    }
}
