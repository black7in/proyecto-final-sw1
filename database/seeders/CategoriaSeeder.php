<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Categoria::create([
            'nombre' => 'Carnes',
            'descripcion' => 'Carnes de res, cerdo, pollo, etc.',
            'restaurante_id' => 1
        ]);

        Categoria::create([
            'nombre' => 'Verduras',
            'descripcion' => 'Verduras frescas y de calidad.',
            'restaurante_id' => 1
        ]);

        Categoria::create([
            'nombre' => 'Frutas',
            'descripcion' => 'Frutas frescas y de calidad.',
            'restaurante_id' => 1
        ]);

        Categoria::create([
            'nombre' => 'Lácteos',
            'descripcion' => 'Leche, queso, mantequilla, etc.',
            'restaurante_id' => 1
        ]);

        Categoria::create([
            'nombre' => 'Pescados',
            'descripcion' => 'Pescados frescos y de calidad.',
            'restaurante_id' => 1
        ]);

        Categoria::create([
            'nombre' => 'Condimentos',
            'descripcion' => 'Sal, azúcar, pimienta, etc.',
            'restaurante_id' => 1
        ]);

        Categoria::create([
            'nombre' => 'Bebidas',
            'descripcion' => 'Bebidas gaseosas, jugos, cervezas, etc.',
            'restaurante_id' => 1
        ]);

        Categoria::create([
            'nombre' => 'Otros',
            'descripcion' => 'Otros insumos.',
            'restaurante_id' => 1
        ]);

        Categoria::create(attributes: [
            'nombre' => 'Cereales y granos',
            'descripcion' => 'Abarrotes varios.',
            'restaurante_id' => 1
        ]);
    }
}
