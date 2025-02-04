<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    //
    use HasFactory;
    protected $table = 'proveedors';
    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'email',
        'descripcion',
        'restaurante_id',
    ];

    public function restaurante()
    {
        return $this->belongsTo(Restaurante::class);
    }
}
