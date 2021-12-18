<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre_cargo'
    ];

    protected $primaryKey = 'idcargo';

    //uno a uno inversa
    public function usuario(){
        return $this->belongsTo('App\Models\Usuario', 'usuario', 'idcargo', 'idusuario');
    }
}
