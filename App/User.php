<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
   /**
     * The attributes that are mass assignable.
     *
     * 
     * @var string
     */
    protected $table='usuario';

    /**
     * The attributes that are mass assignable.
     *
     * 
     * @var array
     */
    protected $fillable = [
        'id','nombres','apellidoPaterno','apellidoMaterno','email','password','ci','celular','fechaIngreso','rol','estado','fechaCreacion','fechaModificacion','idUsuario','email_verification_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','email_verification_token',
    ];
}
