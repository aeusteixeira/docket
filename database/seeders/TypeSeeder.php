<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Type::create([
            'name' => 'Card',
            'slug' => 'card',
            'color' => '#000b76',
        ]);

        Type::create([
            'name' => 'Banner',
            'slug' => 'banner',
            'color' => '#0099ff',
        ]);

        Type::create([
            'name' => 'Pop-up',
            'slug' => 'pop-up',
            'color' => '#e7008a',
        ]);
    }
}
