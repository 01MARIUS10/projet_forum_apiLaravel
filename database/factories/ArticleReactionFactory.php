<?php

namespace Database\Factories;

use App\Models\ReactionType;
use App\Models\UserProfil;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleReactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'article_id' => \App\Models\Article::inRandomOrder()->first(),
            'user_id' => UserProfil::inRandomOrder()->first(),
            'reactionType_id' => ReactionType::inRandomOrder()->first()
            //
        ];
    }
}
