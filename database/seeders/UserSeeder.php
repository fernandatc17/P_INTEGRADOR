<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'Usuario1',
            'email' => 'usuario1@gmail.com',
            'password' => bcrypt('123'),
            'rol' => 0,

        ]);
        User::create([
            'username' => 'Usuario2',
            'email' => 'usuario2@gmail.com',
            'password' => bcrypt('1234'),
            'rol' => 1,
        ]);
    }
}
