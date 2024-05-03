<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        Role::create(['nombre' => 'Master']);
        Role::create(['nombre' => 'Líder de proyecto']);
        Role::create(['nombre' => 'Cliente']);
        Role::create(['nombre' => 'Programador']);
    }
}
