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
        'imagen',
        'restaurante_id',
    ];

    public function restaurante()
    {
        return $this->belongsTo(Restaurante::class);
    }

    public function insumos()
    {
        return $this->belongsToMany(Insumo::class, 'recetas_insumos')
            ->withPivot('cantidad') // Incluye el campo extra
            ->withTimestamps();    // Incluye marcas de tiempo
    }

    // calcular cantidad de insumos gastados en una receta
    public function insumosGastados($cantidadRecetas)
    {
        $insumos = $this->insumos;
        $insumosGastados = [];
        foreach ($insumos as $insumo) {
            $insumosGastados[$insumo->id] = $insumo->pivot->cantidad * $cantidadRecetas;
        }
        
        return $insumosGastados;
    }
}
