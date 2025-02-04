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
        'categoria_id',
        'restaurante_id',
        'unidad_medida_id',
    ];

    public function restaurante()
    {
        return $this->belongsTo(Restaurante::class);
    }

    public function unidad_medida()
    {
        return $this->belongsTo(UnidadMedida::class);
    }

    public function recetas()
    {
        return $this->belongsToMany(Receta::class)->withPivot('cantidad');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function movimiento_inventarios()
    {
        return $this->hasMany(MovimientoInventario::class);
    }
}
