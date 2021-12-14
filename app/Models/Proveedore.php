<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedore extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'apellido',
        'ciudad',
        'correo',
        'empresa',
        'celular',
        'estado'
    ];

    protected $primaryKey = 'idprveedor';
}
