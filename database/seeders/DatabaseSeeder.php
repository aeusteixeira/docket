<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Matheus Teixeira',
            'email' => 'contato.matheusteira@gmail.com',
            'is_admin' => true,
        ]);

        $this->call(MenuSeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(CallToActionSeeder::class);
        $this->call(ContentSeeder::class);

    }
}
