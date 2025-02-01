<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
    //

    protected $fillable = [
        'nombre',
        'descripcion',
        'stock_minimo',
        'imagen',
        'restaurante_id',
        'unidad_medida_id',
    ];
}
