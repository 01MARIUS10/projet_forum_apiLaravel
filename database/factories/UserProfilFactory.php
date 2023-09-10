<?php

namespace Database\Factories;

use App\Models\Image;
use App\Models\UserAuth;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserProfilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'adress' => $this->faker->address(),
            'work' => $this->faker->word(1),
            'school' => $this->faker->streetName(),
            // "auth_id" => UserAuth::inRandomOrder()->first(),
            "auth_id" => UserAuth::factory(),
            "image_id" => Image::factory()
            //
        ];
    }
}
