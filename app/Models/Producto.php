<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = [
        'categoriaid',
        'proveedorid',
        'nombre',
        'cantidad',
        'unidad',
        'precio',
        'stock'
    ];

    protected $primaryKey = 'idproducto';

    //uno a muchos inversa
    public function cargo(){
        return $this->belongsTo('App\Models\Cargo');
    }

    //mucho a mucho
    public function compra(){
        return $this->belongsToMany('App\Models\Compra');
    }

    public function proveedore(){
        return $this->belongsToMany('App\Models\Proveedore');
    }

    public function venta(){
        return $this->belongsToMany('App\Models\Venta');
    }
}
