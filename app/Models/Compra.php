<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;
    protected $fillable = [
        'usuarioid',
        'proveedorid',
        'productoid',
        'fecha',
        'descripcion',
        'unidad',
        'cantidad',
        'precio',
        'subtotal',
        'total'
    ];

    protected $primaryKey = 'idcompra';
}
