<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'idcargo',
        'nombre_usuario',
        'apellido_usuario',
        'cedula_usuario',
        'celular_usuario',
        'direccion_usuario',
        'correo_usuario',
        'contraseña_usuario',
        'estado_usuario',
    ];

    protected $primaryKey = 'idusuario';

    //uno a muchos
    public function factura(){
        return $this->hasMAny('App\Models\Factura');
    }

    //uno a uno
    public function cargo(){
        return $this->hasOne('App\Models\Cargo');
    }
}
