<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::create([
            'name' => 'Laptops',
            'descripcion' => 'Laptops de cualquier marca',
        ]);

        Categoria::create([
            'name' => 'Procesador',
            'descripcion' => 'Procesador de cualquier marca',
        ]);
    }
}
