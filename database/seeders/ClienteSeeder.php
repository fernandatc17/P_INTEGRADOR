<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Si el usuario existe, crear el cliente
        Cliente::create([
            'nombre' => 'NombreCliente',
            'apellido' => 'ApellidoCliente',
            'doc_identidad' => '20099208',
            'telefono' => '555-555-5555',
            'user_id' => 1,
        ]);

        Cliente::create([
            'nombre' => 'Abigail ',
            'apellido' => 'Ticlavilca',
            'doc_identidad' => '60789338',
            'telefono' => '555-555-5555',
            'user_id' => 2,
        ]);
    }
}
