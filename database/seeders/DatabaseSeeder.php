<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123')
        ]);

        // crear restaurante
        $user->restaurante()->create([
            'nombre' => 'Restaurante 1',
            'pais' => 'Colombia',
            'ciudad' => 'Bogotá',
            'direccion' => 'Calle 123',
            'telefono' => '1234567',
            'descripcion' => 'Restaurante de prueba',
            'user_id' => $user->id
        ]);

        $this->call([
            UnidadMedidaSeeder::class,
            CategoriaSeeder::class,
            InsumoSeeder::class,
            ProveedorSeeder::class,
            MovimientoSeeder::class,
            RecetaSeeder::class,
        ]);
    }
}
