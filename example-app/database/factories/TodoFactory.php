<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class TodofactoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(3),
            'email' => $this->faker->paragraph(4),
            'completed' => false

        ];
    }
}
