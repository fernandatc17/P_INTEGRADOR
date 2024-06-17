<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductoMovimiento;

class ProductoMovimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductoMovimiento::create([
            'producto_id' => 1,
            'tipo' => 'Salida',
            'cantidad' => 1,
        ]);
        ProductoMovimiento::create([
            'producto_id' => 1,
            'tipo' => 'Entrada',
            'cantidad' => 10,
        ]);
    }
}
