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
            'descripcion' => 'Laptops de cualquier marca y especificación',
        ]);

        Categoria::create([
            'name' => 'Componentes',
            'descripcion' => 'Componentes de computadora como tarjetas madre, procesadores, memoria RAM, etc.',
        ]);

        Categoria::create([
            'name' => 'Impresoras',
            'descripcion' => 'Impresoras de diferentes tipos y marcas',
        ]);

        Categoria::create([
            'name' => 'Periféricos',
            'descripcion' => 'Accesorios de computadora como teclados, ratones, monitores, etc.',
        ]);

        Categoria::create([
            'name' => 'Store',
            'descripcion' => 'Dispositivos de almacenamiento como discos duros, SSDs, memorias USB, etc.',
        ]);

        Categoria::create([
            'name' => 'Redes',
            'descripcion' => 'Equipo de redes como routers, switches, cables, etc.',
        ]);
    }
}
