<?php

namespace Database\Factories;

use App\Models\Image;
use App\Models\Question;
use App\Models\UserProfil;
use Illuminate\Database\Eloquent\Factories\Factory;

class ResponseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "user_id" => UserProfil::factory(),
            "question_id" => Question::inRandomOrder()->first(),
            "content" => $this->faker->sentence(20),
            "image_id" => Image::inRandomOrder()->first()
            //
        ];
    }
}
