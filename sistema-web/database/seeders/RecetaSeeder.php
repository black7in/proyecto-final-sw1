<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Receta;

class RecetaSeeder extends Seeder
{
    public function run(): void
    {
        // Creación de las recetas
        Receta::create([
            'nombre' => 'Lomo Saltado',
            'indicaciones' => 'Cortar el lomo en tiras. Saltear la carne a fuego alto. Agregar cebolla y tomate. Condimentar con sillao y vinagre. Servir con papas fritas y arroz.',
            'tiempo_preparacion' => 30,
            'restaurante_id' => 1
        ]);

        Receta::create([
            'nombre' => 'Ají de Gallina',
            'indicaciones' => 'Cocer el pollo y desmenuzar. Preparar una crema con pan remojado, leche y ají amarillo. Mezclar con el pollo. Servir con arroz, papas y huevo.',
            'tiempo_preparacion' => 45,
            'restaurante_id' => 1
        ]);

        Receta::create([
            'nombre' => 'Ceviche de Pescado',
            'indicaciones' => 'Cortar el pescado en cubos. Marinar con limón, cebolla, ají limo y culantro. Servir con choclo y camote.',
            'tiempo_preparacion' => 25,
            'restaurante_id' => 1
        ]);

        Receta::create([
            'nombre' => 'Arroz con Mariscos',
            'indicaciones' => 'Sofreír ajos y cebolla. Agregar ají panca y pimiento. Añadir arroz y mariscos. Cocinar hasta que el arroz esté listo.',
            'tiempo_preparacion' => 40,
            'restaurante_id' => 1
        ]);

        Receta::create([
            'nombre' => 'Pollo a la Brasa',
            'indicaciones' => 'Marinar el pollo con cerveza, romero, ajo y comino. Hornear hasta que esté dorado. Servir con papas fritas.',
            'tiempo_preparacion' => 60,
            'restaurante_id' => 1
        ]);
        Receta::create([
            'nombre' => 'Causa Rellena',
            'indicaciones' => 'Preparar puré de papa amarilla con limón y ají. Rellenar con pollo deshilachado. Decorar con palta y huevo.',
            'tiempo_preparacion' => 45,
            'restaurante_id' => 1
        ]);

        Receta::create([
            'nombre' => 'Tallarines Verdes',
            'indicaciones' => 'Preparar salsa de espinacas y albahaca. Cocinar los fideos al dente. Servir con bisteck.',
            'tiempo_preparacion' => 35,
            'restaurante_id' => 1
        ]);

        Receta::create([
            'nombre' => 'Arroz Chaufa',
            'indicaciones' => 'Saltear arroz con huevos, pollo y verduras. Sazonar con sillao y kion. Servir caliente.',
            'tiempo_preparacion' => 30,
            'restaurante_id' => 1
        ]);

        Receta::create([
            'nombre' => 'Seco de Res',
            'indicaciones' => 'Preparar aderezo de culantro. Cocinar la carne hasta que esté suave. Servir con frejoles y arroz.',
            'tiempo_preparacion' => 90,
            'restaurante_id' => 1
        ]);

        Receta::create([
            'nombre' => 'Chicharrón de Pescado',
            'indicaciones' => 'Cortar el pescado en trozos, rebozar y freír. Servir con yuca y salsa criolla.',
            'tiempo_preparacion' => 40,
            'restaurante_id' => 1
        ]);
        // Relaciones recetas-insumos
        DB::table('recetas_insumos')->insert([
            // Lomo Saltado
            [
                'receta_id' => 1,
                'insumo_id' => 1, // Lomo de res
                'cantidad' => 1,
            ],
            // Lomo Saltado (continuación)
            [
                'receta_id' => 1,
                'insumo_id' => 4,  // Cebolla
                'cantidad' => 1,
            ],
            [
                'receta_id' => 1,
                'insumo_id' => 5,  // Tomate
                'cantidad' => 1,
            ],
            [
                'receta_id' => 1,
                'insumo_id' => 6,  // Papa
                'cantidad' => 2,
            ],
            [
                'receta_id' => 1,
                'insumo_id' => 14, // Sillao
                'cantidad' => 1,
            ],
            [
                'receta_id' => 1,
                'insumo_id' => 15, // Vinagre
                'cantidad' => 1,
            ],
            [
                'receta_id' => 1,
                'insumo_id' => 16, // Aceite
                'cantidad' => 1,
            ],

            // Ají de Gallina
            [
                'receta_id' => 2,
                'insumo_id' => 2,  // Pechuga de pollo
                'cantidad' => 2,
            ],
            [
                'receta_id' => 2,
                'insumo_id' => 24, // Pan
                'cantidad' => 6,
            ],
            [
                'receta_id' => 2,
                'insumo_id' => 11, // Leche
                'cantidad' => 2,
            ],
            [
                'receta_id' => 2,
                'insumo_id' => 17, // Ají amarillo
                'cantidad' => 1,
            ],
            [
                'receta_id' => 2,
                'insumo_id' => 25, // Arroz
                'cantidad' => 2,
            ],

            // Ceviche de Pescado
            [
                'receta_id' => 3,
                'insumo_id' => 12, // Pescado corvina
                'cantidad' => 2,
            ],
            [
                'receta_id' => 3,
                'insumo_id' => 10, // Limón
                'cantidad' => 2,
            ],
            [
                'receta_id' => 3,
                'insumo_id' => 4,  // Cebolla
                'cantidad' => 1,
            ],
            [
                'receta_id' => 3,
                'insumo_id' => 18, // Ají limo
                'cantidad' => 1,
            ],
            [
                'receta_id' => 3,
                'insumo_id' => 8,  // Culantro
                'cantidad' => 1,
            ],
            [
                'receta_id' => 3,
                'insumo_id' => 26, // Choclo
                'cantidad' => 1,
            ],
            [
                'receta_id' => 3,
                'insumo_id' => 9,  // Camote
                'cantidad' => 1,
            ],

            // Arroz con Mariscos
            [
                'receta_id' => 4,
                'insumo_id' => 13, // Mariscos mixtos
                'cantidad' => 2,
            ],
            [
                'receta_id' => 4,
                'insumo_id' => 25, // Arroz
                'cantidad' => 2,
            ],
            [
                'receta_id' => 4,
                'insumo_id' => 7,  // Pimiento
                'cantidad' => 1,
            ],
            [
                'receta_id' => 4,
                'insumo_id' => 4,  // Cebolla
                'cantidad' => 1,
            ],
            [
                'receta_id' => 4,
                'insumo_id' => 20, // Ajo
                'cantidad' => 1,
            ],
            [
                'receta_id' => 4,
                'insumo_id' => 19, // Ají panca
                'cantidad' => 1,
            ],

            // Pollo a la Brasa
            [
                'receta_id' => 5,
                'insumo_id' => 3,  // Pollo entero
                'cantidad' => 1,
            ],
            [
                'receta_id' => 5,
                'insumo_id' => 23, // Cerveza
                'cantidad' => 2,
            ],
            [
                'receta_id' => 5,
                'insumo_id' => 21, // Romero
                'cantidad' => 1,
            ],
            [
                'receta_id' => 5,
                'insumo_id' => 20, // Ajo
                'cantidad' => 1,
            ],
            [
                'receta_id' => 5,
                'insumo_id' => 22, // Comino
                'cantidad' => 1,
            ],
            [
                'receta_id' => 5,
                'insumo_id' => 6,  // Papa
                'cantidad' => 3,
            ],
            [
                'receta_id' => 5,
                'insumo_id' => 16, // Aceite
                'cantidad' => 2,
            ],
            [
                'receta_id' => 6,
                'insumo_id' => 27, // Papa amarilla
                'cantidad' => 2,
            ],
            [
                'receta_id' => 6,
                'insumo_id' => 2,  // Pechuga de pollo
                'cantidad' => 1,
            ],
            [
                'receta_id' => 6,
                'insumo_id' => 10, // Limón
                'cantidad' => 1,
            ],
            [
                'receta_id' => 6,
                'insumo_id' => 17, // Ají amarillo
                'cantidad' => 1,
            ],
            [
                'receta_id' => 6,
                'insumo_id' => 30, // Huevos
                'cantidad' => 3,
            ],

            // Tallarines Verdes
            [
                'receta_id' => 7,
                'insumo_id' => 29, // Fideos tallarín
                'cantidad' => 1,
            ],
            [
                'receta_id' => 7,
                'insumo_id' => 28, // Espinaca
                'cantidad' => 1,
            ],
            [
                'receta_id' => 7,
                'insumo_id' => 1,  // Lomo de res
                'cantidad' => 1,
            ],
            [
                'receta_id' => 7,
                'insumo_id' => 11, // Leche
                'cantidad' => 1,
            ],

            // Arroz Chaufa
            [
                'receta_id' => 8,
                'insumo_id' => 25, // Arroz
                'cantidad' => 2,
            ],
            [
                'receta_id' => 8,
                'insumo_id' => 2,  // Pechuga de pollo
                'cantidad' => 1,
            ],
            [
                'receta_id' => 8,
                'insumo_id' => 30, // Huevos
                'cantidad' => 4,
            ],
            [
                'receta_id' => 8,
                'insumo_id' => 14, // Sillao
                'cantidad' => 1,
            ],
            [
                'receta_id' => 8,
                'insumo_id' => 31, // Kion
                'cantidad' => 1,
            ],

            // Seco de Res
            [
                'receta_id' => 9,
                'insumo_id' => 1,  // Lomo de res
                'cantidad' => 2,
            ],
            [
                'receta_id' => 9,
                'insumo_id' => 8,  // Culantro
                'cantidad' => 2,
            ],
            [
                'receta_id' => 9,
                'insumo_id' => 25, // Arroz
                'cantidad' => 2,
            ],
            [
                'receta_id' => 9,
                'insumo_id' => 20, // Ajo
                'cantidad' => 1,
            ],

            // Chicharrón de Pescado
            [
                'receta_id' => 10,
                'insumo_id' => 12, // Pescado
                'cantidad' => 2,
            ],
            [
                'receta_id' => 10,
                'insumo_id' => 16, // Aceite
                'cantidad' => 2,
            ],
            [
                'receta_id' => 10,
                'insumo_id' => 30, // Huevos
                'cantidad' => 2,
            ],
            [
                'receta_id' => 10,
                'insumo_id' => 4,  // Cebolla
                'cantidad' => 1,
            ],
        ]);
    }
}
