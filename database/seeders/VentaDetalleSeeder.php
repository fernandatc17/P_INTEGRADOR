<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VentaDetalle;

class VentaDetalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        VentaDetalle::create([
            'producto_id' => 1,
            'venta_id' => 1,
            'precio' => 150, 
            'cantidad' => 3 
        ]);
    }
}
