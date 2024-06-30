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
        Cliente::create([
            'tipo_documento' => 'DNI',
            'numero_documento' => '20099208',
            'datos' => 'NombreCliente ApellidoCliente',
            'telefono' => '555-555-5555',
            'email' => 'cliente1@example.com',
            'password' => bcrypt('password'),
            'username' => 'cliente1',
        ]);
        
        Cliente::create([
            'tipo_documento' => 'DNI',
            'numero_documento' => '60789338',
            'datos' => 'Abigail Ticlavilca',
            'telefono' => '555-555-5556',
            'email' => 'cliente2@example.com',
            'password' => bcrypt('password'),
            'username' => 'cliente2',
        ]);

        Cliente::create([
            'tipo_documento' => 'DNI',
            'numero_documento' => '12345678',
            'datos' => 'John Doe',
            'telefono' => '555-555-5557',
            'email' => 'john.doe@example.com',
            'password' => bcrypt('password'),
            'username' => 'johndoe',
        ]);
        
        Cliente::create([
            'tipo_documento' => 'DNI',
            'numero_documento' => '87654321',
            'datos' => 'Jane Smith',
            'telefono' => '555-555-5558',
            'email' => 'jane.smith@example.com',
            'password' => bcrypt('password'),
            'username' => 'janesmith',
        ]);
        
        Cliente::create([
            'tipo_documento' => 'DNI',
            'numero_documento' => '98765432',
            'datos' => 'Alice Johnson',
            'telefono' => '555-555-5559',
            'email' => 'alice.johnson@example.com',
            'password' => bcrypt('password'),
            'username' => 'alicejohnson',
        ]);
        
        Cliente::create([
            'tipo_documento' => 'DNI',
            'numero_documento' => '23456789',
            'datos' => 'Bob Brown',
            'telefono' => '555-555-5560',
            'email' => 'bob.brown@example.com',
            'password' => bcrypt('password'),
            'username' => 'bobbrown',
        ]);

    }
}


