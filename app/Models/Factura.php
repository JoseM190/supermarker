<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;
    protected $fillable = [
        'usuarioid',
        'clienteid',
        'ventaid',
        'fecha',
        'descripcion',
        'total'
    ];

    protected $primaryKey = 'idfactura';
}
