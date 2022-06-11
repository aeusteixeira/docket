<?php

namespace Database\Seeders;

use App\Models\CallToAction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CallToActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        CallToAction::factory()->create([
            'name' => 'Saiba mais',
            'color' => '#0099ff',
        ]);

        CallToAction::factory()->create([
            'name' => 'Acessar',
            'color' => '#000b76',
        ]);

        CallToAction::factory()->create([
            'name' => 'Continuar lendo',
            'color' => '#e7008a',
        ]);

        CallToAction::factory()->create([
            'name' => 'Entrar',
            'color' => '#000b76',
        ]);

        CallToAction::factory()->create([
            'name' => 'Acessar',
            'color' => '#e7008a',
        ]);

    }
}
