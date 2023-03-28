<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aranzman>
 */
class AranzmanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'naziv'=> $this->faker->word(),
            'tip_aranzmana_id'=> TipAranzmana::factory(),
            'mesto_id'=> Mesto::factory(),
            'user_id'=> User::factory(),
        ];
    }
}
