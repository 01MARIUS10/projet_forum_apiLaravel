<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'label' => $this->faker->word(12),
            'desc' => $this->faker->sentence(3),
            'src' => $this->faker->url()
            //
        ];
    }
}
