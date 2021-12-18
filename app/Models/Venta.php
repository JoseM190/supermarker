<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $fillable = [
        'productoid',
        'cantidad',
        'precio',
        'unidad',
        'subtotal'
    ];

    protected $primaryKey = 'idventa';

    //uno a muchos inversa
    public function factura(){
        return $this->belongsTo('App\Models\Factura');
    }

    //mucho a muchos
    public function producto(){
        return $this->belongsToMany('App\Models\Producto');
    }
}
