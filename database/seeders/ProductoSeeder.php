<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Producto::create([
            'inventario_id' => 1,
            'nombre' => 'Producto Ejemplo',
            'descripcion' => 'Descripción del Producto Ejemplo',
            'precio' => 150,
            'stock' => 50,
            'marca' => 'Marca 1',
            'categoria_id' => 1,
            'imagen_url' => 'img/foto1.jpg',
            'especificacion'=>'HHHHHHHHHHHHHHHHHHHHHHHHHHHHHHH',
            'estado' => true,
        ]);
        Producto::create([
            'inventario_id' => 1,
            'nombre' => 'Producto Ejemplo',
            'descripcion' => 'Descripción del Producto Ejemplo',
            'precio' => 150,
            'stock' => 50,
            'marca' => 'Marca 2',
            'categoria_id' => 1,
            'imagen_url' => 'img/foto2.jpg',
            'especificacion'=>'FFFFFFFFFFFFFFFFFFFFFFFFFFF',
            'estado' => true,
        ]);
    }
}
