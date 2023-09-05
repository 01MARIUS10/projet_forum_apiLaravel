<?php

namespace Database\Factories;

use App\Models\ArticleCategories;
use App\Models\UserProfil;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
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
            "categorie_id" => ArticleCategories::inRandomOrder()->first(),
            'content' => $this->faker->sentence(30)
            //
        ];
    }
}
