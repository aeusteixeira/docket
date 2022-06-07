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
            'name' => '',
        ]);

        CallToAction::factory()->create([
            'name' => 'Saiba mais',
        ]);

        CallToAction::factory()->create([
            'name' => 'Acessar',
        ]);

        CallToAction::factory()->create([
            'name' => 'Continuar lendo',
        ]);

        CallToAction::factory()->create([
            'name' => 'Entrar',
        ]);

        CallToAction::factory()->create([
            'name' => 'Acessar',
        ]);

    }
}
