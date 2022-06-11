<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::create([
            'name' => 'Gerentes',
            'description' => 'Gerentes da empresa',
        ]);

        Group::create([
            'name' => 'Vendedores',
            'description' => 'Vendedores da empresa',
        ]);

        Group::create([
            'name' => 'Clientes',
            'description' => 'Clientes da empresa',
        ]);

        Group::create([
            'name' => 'Funcionários',
            'description' => 'Funcionários da empresa',
        ]);

        Group::create([
            'name' => 'Administradores',
            'description' => 'Administradores da empresa',
        ]);
    }
}
