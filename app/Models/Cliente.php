<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'cedula_cliente',
        'nombre_cliente',
        'apellido_cliente',
        'celular_cliente'
    ];

    protected $primaryKey = 'idcliente';
}
