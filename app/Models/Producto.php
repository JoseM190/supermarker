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
}
