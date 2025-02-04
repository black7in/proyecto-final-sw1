<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    //

    use HasFactory;

    protected $fillable = [
        'nombre',
        'indicaciones',
        'tiempo_preparacion',
        'porciones',
        'imagen',
        'restaurante_id',
    ];

    public function restaurante()
    {
        return $this->belongsTo(Restaurante::class);
    }

    public function insumos()
    {
        return $this->belongsToMany(Insumo::class)->withPivot('cantidad');
    }


}
