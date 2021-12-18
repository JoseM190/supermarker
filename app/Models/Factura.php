<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;
    protected $fillable = [
        'usuarioid',
        'clientesid',
        'ventaid',
        'fecha',
        'descripcion',
        'total'
    ];

    protected $primaryKey = 'idfactura';

    //uno a muchos
    public function venta(){
        return $this->hasMAny('App\Models\Venta');
    }

    //uno a muchos inversa
    public function cliente(){
        return $this->belongsTo('App\Models\Cliente');
    }

    public function usuario(){
        return $this->belongsTo('App\Models\Usuario');
    }
}
