<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comprobante;

class ComprobanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comprobante::create([
            'venta_id' => 1,
            'tipo' => 'Boleta',
            'fecha_emision' => now(),
            'estado' => true,
        ]);
    }
}
