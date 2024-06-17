<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Inventario;

class InventarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Inventario::create([
            'name' => 'Nombre del inventario',
            'ubicacion' => 'Ubicación del inventario',
            'capacidad' => 100, 
        ]);
    }
}
