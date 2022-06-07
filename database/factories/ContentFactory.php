<?php

namespace Database\Factories;

use App\Models\CallToAction;
use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Content>
 */
class ContentFactory extends Factory
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
            'slug' => $this->faker->slug,
            'content' => $this->faker->paragraph,
            'image' => $this->faker->imageUrl,
            'type_id' => random_int(1, Type::count()),
            'call_to_action_id' => random_int(1, CallToAction::count()),
        ];
    }
}
