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

        $this->call([

            UserSeeder::class,
            CategoriaSeeder::class,
            InventarioSeeder::class,
            ClienteSeeder::class,
            ProductoSeeder::class,
            VentaSeeder::class,
            VentaDetalleSeeder::class,
            ProductoMovimientoSeeder::class,
            ReclamoSeeder::class,
            ComprobanteSeeder::class,

            
        ]);
    }
}
