<?php

namespace Database\Seeders;

use App\Models\Configuration;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Configuration::create([
            'key' => 'company_name',
            'value' => 'Docket',
        ]);

        Configuration::create([
            'key' => 'company_website',
            'value' => 'https://docket.com',
        ]);

        Configuration::create([
            'key' => 'email',
            'value' => 'docket@docket.com',
        ]);

        Configuration::create([
            'key' => 'primary_color',
            'value' => '#E7008A',
        ]);

        Configuration::create([
            'key' => 'secondary_color',
            'value' => '#00CBA9',
        ]);

        Configuration::create([
            'key' => 'app_key',
            'value' => '72414f4c-967a-4b7c-989e-a32409d6533d'
        ]);

        Configuration::create([
            'key' => 'compnay_logo',
            'value' => 'https://bpoinnova.com/wp-content/uploads/2021/07/logo-bpoinnova.png',
        ]);

        Configuration::create([
            'key' => 'short_name',
            'value' => 'Docket',
        ]);

        Configuration::create([
            'key' => 'full_name',
            'value' => 'Portal de Comunicação da BPO Innova',
        ]);

        Configuration::create([
            'key' => 'short_description',
            'value' => 'O hub de comunicação da BPO Innova',
        ]);

        Configuration::create([
            'key' => 'full_description',
            'value' => 'O Canal do Teams da BPO Innova é um hub de comunicação que permite a interação de forma rápida e eficiente entre os colaboradores da empresa.',
        ]);

        Configuration::create([
            'key' => 'privacy_policy',
            'value' => 'https://bpoinnova.com/privacidade/',
        ]);

        Configuration::create([
            'key' => 'terms_and_conditions',
            'value' => 'https://bpoinnova.com/termos-de-uso/',
        ]);

        Configuration::create([
            'key' => 'image',
            'value' => 'public/app/color.png',
        ]);
    }
}
