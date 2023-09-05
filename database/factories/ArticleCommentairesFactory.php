<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\UserProfil;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleCommentairesFactory extends Factory
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
            "article_id" => Article::inRandomOrder()->first(),
            "content" => $this->faker->sentence(20)
            //
        ];
    }
}
