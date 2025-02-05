<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Insumo;

class InsumoSeeder extends Seeder
{
    public function run(): void
    {
        // CARNES - Categoría 1
        Insumo::create([
            'nombre' => 'Lomo de res',
            'descripcion' => 'Lomo fino de res para saltado',
            'stock_minimo' => 5.0,
            'restaurante_id' => 1,
            'unidad_medida_id' => 1, // Kg
            'categoria_id' => 1,
        ]);

        Insumo::create([
            'nombre' => 'Pechuga de pollo',
            'descripcion' => 'Pechuga de pollo sin hueso',
            'stock_minimo' => 5.0,
            'restaurante_id' => 1,
            'unidad_medida_id' => 1, // Kg
            'categoria_id' => 1,
        ]);

        Insumo::create([
            'nombre' => 'Pollo entero',
            'descripcion' => 'Pollo entero para brasa',
            'stock_minimo' => 3.0,
            'restaurante_id' => 1,
            'unidad_medida_id' => 4, // Unidad
            'categoria_id' => 1,
        ]);

        // VERDURAS - Categoría 2
        Insumo::create([
            'nombre' => 'Cebolla',
            'descripcion' => 'Cebolla roja fresca',
            'stock_minimo' => 5.0,
            'restaurante_id' => 1,
            'unidad_medida_id' => 1, // Kg
            'categoria_id' => 2,
        ]);

        Insumo::create([
            'nombre' => 'Tomate',
            'descripcion' => 'Tomate fresco',
            'stock_minimo' => 3.0,
            'restaurante_id' => 1,
            'unidad_medida_id' => 1, // Kg
            'categoria_id' => 2,
        ]);

        Insumo::create([
            'nombre' => 'Papa',
            'descripcion' => 'Papa amarilla',
            'stock_minimo' => 10.0,
            'restaurante_id' => 1,
            'unidad_medida_id' => 1, // Kg
            'categoria_id' => 2,
        ]);

        Insumo::create([
            'nombre' => 'Pimiento',
            'descripcion' => 'Pimiento rojo fresco',
            'stock_minimo' => 2.0,
            'restaurante_id' => 1,
            'unidad_medida_id' => 1, // Kg
            'categoria_id' => 2,
        ]);

        Insumo::create([
            'nombre' => 'Culantro',
            'descripcion' => 'Culantro fresco',
            'stock_minimo' => 1.0,
            'restaurante_id' => 1,
            'unidad_medida_id' => 1, // Kg
            'categoria_id' => 2,
        ]);

        Insumo::create([
            'nombre' => 'Camote',
            'descripcion' => 'Camote amarillo',
            'stock_minimo' => 5.0,
            'restaurante_id' => 1,
            'unidad_medida_id' => 1, // Kg
            'categoria_id' => 2,
        ]);

        // FRUTAS - Categoría 3
        Insumo::create([
            'nombre' => 'Limón',
            'descripcion' => 'Limón fresco',
            'stock_minimo' => 3.0,
            'restaurante_id' => 1,
            'unidad_medida_id' => 1, // Kg
            'categoria_id' => 3,
        ]);

        // LÁCTEOS - Categoría 4
        Insumo::create([
            'nombre' => 'Leche',
            'descripcion' => 'Leche entera',
            'stock_minimo' => 5.0,
            'restaurante_id' => 1,
            'unidad_medida_id' => 2, // Litro
            'categoria_id' => 4,
        ]);

        // PESCADOS - Categoría 5
        Insumo::create([
            'nombre' => 'Pescado corvina',
            'descripcion' => 'Corvina fresca',
            'stock_minimo' => 5.0,
            'restaurante_id' => 1,
            'unidad_medida_id' => 1, // Kg
            'categoria_id' => 5,
        ]);

        Insumo::create([
            'nombre' => 'Mariscos mixtos',
            'descripcion' => 'Mixtura de mariscos',
            'stock_minimo' => 3.0,
            'restaurante_id' => 1,
            'unidad_medida_id' => 1, // Kg
            'categoria_id' => 5,
        ]);

        // CONDIMENTOS - Categoría 6
        Insumo::create([
            'nombre' => 'Sillao',
            'descripcion' => 'Salsa de soya',
            'stock_minimo' => 2.0,
            'restaurante_id' => 1,
            'unidad_medida_id' => 2, // Litro
            'categoria_id' => 6,
        ]);

        Insumo::create([
            'nombre' => 'Vinagre',
            'descripcion' => 'Vinagre tinto',
            'stock_minimo' => 2.0,
            'restaurante_id' => 1,
            'unidad_medida_id' => 2, // Litro
            'categoria_id' => 6,
        ]);

        Insumo::create([
            'nombre' => 'Aceite',
            'descripcion' => 'Aceite vegetal',
            'stock_minimo' => 5.0,
            'restaurante_id' => 1,
            'unidad_medida_id' => 2, // Litro
            'categoria_id' => 6,
        ]);

        Insumo::create([
            'nombre' => 'Ají amarillo',
            'descripcion' => 'Ají amarillo molido',
            'stock_minimo' => 2.0,
            'restaurante_id' => 1,
            'unidad_medida_id' => 1, // Kg
            'categoria_id' => 6,
        ]);

        Insumo::create([
            'nombre' => 'Ají limo',
            'descripcion' => 'Ají limo fresco',
            'stock_minimo' => 1.0,
            'restaurante_id' => 1,
            'unidad_medida_id' => 1, // Kg
            'categoria_id' => 6,
        ]);

        Insumo::create([
            'nombre' => 'Ají panca',
            'descripcion' => 'Ají panca molido',
            'stock_minimo' => 1.0,
            'restaurante_id' => 1,
            'unidad_medida_id' => 1, // Kg
            'categoria_id' => 6,
        ]);

        Insumo::create([
            'nombre' => 'Ajo',
            'descripcion' => 'Ajo pelado',
            'stock_minimo' => 1.0,
            'restaurante_id' => 1,
            'unidad_medida_id' => 1, // Kg
            'categoria_id' => 6,
        ]);

        Insumo::create([
            'nombre' => 'Romero',
            'descripcion' => 'Romero fresco',
            'stock_minimo' => 0.5,
            'restaurante_id' => 1,
            'unidad_medida_id' => 1, // Kg
            'categoria_id' => 6,
        ]);

        Insumo::create([
            'nombre' => 'Comino',
            'descripcion' => 'Comino molido',
            'stock_minimo' => 1.0,
            'restaurante_id' => 1,
            'unidad_medida_id' => 1, // Kg
            'categoria_id' => 6,
        ]);

        // BEBIDAS - Categoría 7
        Insumo::create([
            'nombre' => 'Cerveza',
            'descripcion' => 'Cerveza rubia',
            'stock_minimo' => 6.0,
            'restaurante_id' => 1,
            'unidad_medida_id' => 24, // Botella
            'categoria_id' => 7,
        ]);

        // CEREALES Y GRANOS - Categoría 9
        Insumo::create([
            'nombre' => 'Pan',
            'descripcion' => 'Pan de molde',
            'stock_minimo' => 10.0,
            'restaurante_id' => 1,
            'unidad_medida_id' => 4, // Unidad
            'categoria_id' => 9,
        ]);

        Insumo::create([
            'nombre' => 'Arroz',
            'descripcion' => 'Arroz blanco',
            'stock_minimo' => 10.0,
            'restaurante_id' => 1,
            'unidad_medida_id' => 1, // Kg
            'categoria_id' => 9,
        ]);

        Insumo::create([
            'nombre' => 'Choclo',
            'descripcion' => 'Choclo desgranado',
            'stock_minimo' => 3.0,
            'restaurante_id' => 1,
            'unidad_medida_id' => 1, // Kg
            'categoria_id' => 9,
        ]);
        // Nuevos insumos para agregar
        Insumo::create([
            'nombre' => 'Papa amarilla',  // Específico para causa
            'descripcion' => 'Papa amarilla para puré',
            'stock_minimo' => 5.0,
            'restaurante_id' => 1,
            'unidad_medida_id' => 1, // Kg
            'categoria_id' => 2,
        ]);

        Insumo::create([
            'nombre' => 'Espinaca',
            'descripcion' => 'Espinaca fresca',
            'stock_minimo' => 2.0,
            'restaurante_id' => 1,
            'unidad_medida_id' => 1, // Kg
            'categoria_id' => 2,
        ]);

        Insumo::create([
            'nombre' => 'Fideos tallarín',
            'descripcion' => 'Fideos tallarín gruesos',
            'stock_minimo' => 5.0,
            'restaurante_id' => 1,
            'unidad_medida_id' => 1, // Kg
            'categoria_id' => 9,
        ]);

        Insumo::create([
            'nombre' => 'Huevos',
            'descripcion' => 'Huevos frescos',
            'stock_minimo' => 30.0,
            'restaurante_id' => 1,
            'unidad_medida_id' => 4, // Unidad
            'categoria_id' => 4,
        ]);

        Insumo::create([
            'nombre' => 'Kion',
            'descripcion' => 'Kion o jengibre fresco',
            'stock_minimo' => 1.0,
            'restaurante_id' => 1,
            'unidad_medida_id' => 1, // Kg
            'categoria_id' => 6,
        ]);
    }
}
