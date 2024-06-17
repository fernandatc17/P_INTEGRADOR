<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reclamo;

class ReclamoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reclamo::create([
            'tipo' => 'Producto dañado',
            'fecha_reclamo' => now(),
            'descripcion' =>  'dfjsbfhdsghbdsgbkdjg',
            'venta_id' => 1, 
        ]);
    }
}
