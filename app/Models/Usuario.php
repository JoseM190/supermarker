<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'cargoid',
        'nombre',
        'apellido',
        'cedula',
        'celular',
        'direccion',
        'correo',
        'contraseña',
        'estado',
    ];

    protected $primaryKey = 'idusuario';
}
