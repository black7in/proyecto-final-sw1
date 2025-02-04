<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    //

    protected $fillable = [
        'nombre',
        'pais',
        'ciudad',
        'direccion',
        'telefono',
        'descripcion',
        'user_id',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function insumos()
    {
        return $this->hasMany(Insumo::class);
    }

    public function proveedors()
    {
        return $this->hasMany(Proveedor::class);
    }

    public function categorias()
    {
        return $this->hasMany(Categoria::class);
    }
}
