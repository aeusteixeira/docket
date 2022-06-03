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
            'key' => 'site',
            'value' => 'https://docket.com',
        ]);

        Configuration::create([
            'key' => 'email',
            'value' => 'docket@docket.com',
        ]);

        Configuration::create([
            'key' => 'color',
            'value' => '#0099ff',
        ]);
    }
}
