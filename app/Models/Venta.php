<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    //
    protected $table = 'ventas';
    protected $fillable = ['cantidad', 'precio', 'total', 'receta_id'];

    public function receta()
    {
        return $this->belongsTo(Receta::class);
    }
    public function movimientos_inventario()
    {
        return $this->hasMany(MovimientoInventario::class);
    }
    
    public function restaurante()
    {
        return $this->belongsTo(Restaurante::class);
    }
}
