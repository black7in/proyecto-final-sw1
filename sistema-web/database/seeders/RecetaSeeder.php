<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Receta;
class RecetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Receta::create([
            'nombre' => 'Tacos al Pastor',
            'indicaciones' => 'Marinar la carne con achiote y especias, luego cocinar en un trompo y servir con piña, cebolla y cilantro.',
            'tiempo_preparacion' => '45',
            'restaurante_id' => 1
        ]);

        Receta::create([
            'nombre' => 'Paella Valenciana',
            'indicaciones' => 'Cocinar el arroz con azafrán, pollo, conejo, judías verdes y garrofón en una paellera.',
            'tiempo_preparacion' => '1',
            'restaurante_id' => 1
        ]);

        Receta::create([
            'nombre' => 'Sushi de Salmón',
            'indicaciones' => 'Preparar el arroz de sushi, cortar el salmón en tiras y enrollar con alga nori y arroz.',
            'tiempo_preparacion' => '50',
            'restaurante_id' => 1
        ]);

        Receta::create([
            'nombre' => 'Pizza Margherita',
            'indicaciones' => 'Preparar la masa, añadir salsa de tomate, mozzarella fresca y hojas de albahaca, luego hornear.',
            'tiempo_preparacion' => '10',
            'restaurante_id' => 1
        ]);

        Receta::create([
            'nombre' => 'Ceviche Peruano',
            'indicaciones' => 'Marinar el pescado fresco en jugo de limón con cebolla, ají, cilantro y sal.',
            'tiempo_preparacion' => '25',
            'restaurante_id' => 1
        ]);

        DB::table('recetas_insumos')->insert([
            [
                'receta_id' => 1,
                'insumo_id' => 1,
                'cantidad' => 5,
            ],
            [
                'receta_id' => 1,
                'insumo_id' => 2,
                'cantidad' => 3,
            ],
            [
                'receta_id' => 2,
                'insumo_id' => 1,
                'cantidad' => 2,
            ],
            [
                'receta_id' => 2,
                'insumo_id' => 3,
                'cantidad' => 4,
            ],
            [
                'receta_id' => 3,
                'insumo_id' => 4,
                'cantidad' => 6,
            ],
            [
                'receta_id' => 3,
                'insumo_id' => 5,
                'cantidad' => 2,
            ],
            [
                'receta_id' => 4,
                'insumo_id' => 6,
                'cantidad' => 3,
            ],
            [
                'receta_id' => 4,
                'insumo_id' => 7,
                'cantidad' => 2,
            ],
            [
                'receta_id' => 5,
                'insumo_id' => 8,
                'cantidad' => 4,
            ],
            [
                'receta_id' => 5,
                'insumo_id' => 9,
                'cantidad' => 3,
            ],
            [
                'receta_id' => 5,
                'insumo_id' => 10,
                'cantidad' => 2,
            ],
            [
                'receta_id' => 5,
                'insumo_id' => 10,
                'cantidad' => 1,
            ],
        ]);


    }
}
