<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Insumo;

class InsumoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        /*
        nombre',
        'descripcion',
        'stock_minimo',
        'imagen',
        'restaurante_id',
        'unidad_medida_id',
        */

        Insumo::create([
            'nombre' => 'Arroz',
            'descripcion' => 'Arroz blanco',
            'stock_minimo' => 10,
            'imagen' => 'arroz.jpg',
            'restaurante_id' => 1,
            'unidad_medida_id' => 1,
        ]);

        Insumo::create([
            'nombre' => 'Azucar',
            'descripcion' => 'Azucar blanca',
            'stock_minimo' => 10,
            'imagen' => 'azucar.jpg',
            'restaurante_id' => 1,
            'unidad_medida_id' => 1,
        ]);

        Insumo::create([
            'nombre' => 'Aceite',
            'descripcion' => 'Aceite de cocina',
            'stock_minimo' => 10,
            'imagen' => 'aceite.jpg',
            'restaurante_id' => 1,
            'unidad_medida_id' => 1,
        ]);

        Insumo::create([
            'nombre' => 'Sal',
            'descripcion' => 'Sal de mesa',
            'stock_minimo' => 10,
            'imagen' => 'sal.jpg',
            'restaurante_id' => 1,
            'unidad_medida_id' => 1,
        ]);

        Insumo::create([
            'nombre' => 'Pimienta',
            'descripcion' => 'Pimienta negra',
            'stock_minimo' => 10,
            'imagen' => 'pimienta.jpg',
            'restaurante_id' => 1,
            'unidad_medida_id' => 1,
        ]);

        Insumo::create([
            'nombre' => 'Cebolla',
            'descripcion' => 'Cebolla blanca',
            'stock_minimo' => 10,
            'imagen' => 'cebolla.jpg',
            'restaurante_id' => 1,
            'unidad_medida_id' => 1,
        ]);

        Insumo::create([
            'nombre' => 'Ajo',
            'descripcion' => 'Ajo fresco',
            'stock_minimo' => 10,
            'imagen' => 'ajo.jpg',
            'restaurante_id' => 1,
            'unidad_medida_id' => 1,
        ]);

        Insumo::create([
            'nombre' => 'Papa',
            'descripcion' => 'Papa blanca',
            'stock_minimo' => 10,
            'imagen' => 'papa.jpg',
            'restaurante_id' => 1,
            'unidad_medida_id' => 1,
        ]);
        
        Insumo::create([
            'nombre' => 'Tomate',
            'descripcion' => 'Tomate rojo',
            'stock_minimo' => 10,
            'imagen' => 'tomate.jpg',
            'restaurante_id' => 1,
            'unidad_medida_id' => 1,
        ]);

        Insumo::create([
            'nombre' => 'Lechuga',
            'descripcion' => 'Lechuga verde',
            'stock_minimo' => 10,
            'imagen' => 'lechuga.jpg',
            'restaurante_id' => 1,
            'unidad_medida_id' => 1,
        ]);
    }
}
