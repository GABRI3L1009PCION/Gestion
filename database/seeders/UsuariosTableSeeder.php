<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    public function run()
    {
        Usuario::create([
            'nombre' => 'Tony',
            'email' => 'tonypicon98@gmail.com',
            'password' => bcrypt('password'),
            'rol' => 'Admin', // Solo si mantienes el campo 'rol'
        ]);
    }
}
