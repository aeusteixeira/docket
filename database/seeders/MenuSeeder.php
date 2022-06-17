<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::factory()->create([
            'name' => 'Meu RH',
            'action' => '/rh',
            'icon' => 'fas fa-user-tie',
            'color' => '#0000',
            'order' => 1,
        ]);

        Menu::factory()->create([
            'name' => 'Sharepoint',
            'action' => '/sharepoint',
            'icon' => 'fas fa-share-alt',
            'color' => '#0078d4',
            'order' => 2,
        ]);

        Menu::factory()->create([
            'name' => 'Suporte',
            'action' => '/suporte',
            'icon' => 'fas fa-life-ring',
            'color' => '#6D6DF7',
            'order' => 3,
        ]);

        Menu::factory()->create([
            'name' => 'Targon',
            'action' => '/targon',
            'icon' => 'fas fa-history',
            'color' => '#0f5941',
            'order' => 3,
        ]);
    }
}
