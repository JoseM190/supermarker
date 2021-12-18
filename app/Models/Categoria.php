<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'pasillo',
        'estado'
    ];

    protected $primaryKey = 'idcategoria';

    //uno a muchos
    public function categoria(){
        return $this->hasMAny('App\Models\Categoria');
    }
}
