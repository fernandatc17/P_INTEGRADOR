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
        Venta::create([
            'cliente_id' => 1,
            'fecha_venta' => now(),
            'monto' => 150.00,
            'metodo_pago' => 'Tarjeta de Credito',
        ]);
    }
}
