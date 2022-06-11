<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Section::create([
            'name' => 'Noticias',
            'slug' => 'noticias',
            'icon' => 'fas fa-newspaper',
        ]);

        Section::create([
            'name' => 'Eventos',
            'slug' => 'eventos',
            'icon' => 'fas fa-calendar-alt',
        ]);
    }
}
