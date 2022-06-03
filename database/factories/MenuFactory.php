<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence,
            'slug' => $this->faker->url,
            'icon' => $this->faker->word,
            'order' => $this->faker->numberBetween(1, 10),
            'parent_id' => 1,
            'is_active' => $this->faker->boolean,
        ];
    }
}
