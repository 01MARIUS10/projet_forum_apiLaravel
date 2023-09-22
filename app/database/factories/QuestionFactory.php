<?php

namespace Database\Factories;

use App\Models\Image;
use App\Models\QuestionCategories;
use App\Models\UserProfil;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "user_id" => UserProfil::inRandomOrder()->first(),
            "categorie_id" => QuestionCategories::inRandomOrder()->first(),
            'content' => $this->faker->sentence(30),
            'image_id' => Image::inRandomOrder()->first()
            //
        ];
    }
}
