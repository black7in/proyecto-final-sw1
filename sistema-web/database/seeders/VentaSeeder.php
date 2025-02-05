<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Venta;
class VentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Venta::create([
            'cantidad' => '10',
            'precio' => 100,
            'total' => 1000,
            'receta_id' => 1
        ]);

        Venta::create([
            'cantidad' => '4',
            'precio' => 200,
            'total' => 800,
            'receta_id' => 2
        ]);

        Venta::create([
            'cantidad' => '3',
            'precio' => 300,
            'total' => 900,
            'receta_id' => 3
        ]);

        Venta::create([
            'cantidad' => '2',
            'precio' => 400,
            'total' => 800,
            'receta_id' => 4
        ]);

        Venta::create([
            'cantidad' => '10',
            'precio' => 500,
            'total' => 5000,
            'receta_id' => 4
        ]);

        Venta::create([
            'cantidad' => '2',
            'precio' => 600,
            'total' => 1200,
            'receta_id' => 4
        ]);
    }
}
