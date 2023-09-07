<?php

namespace Database\Factories;

use App\Models\Question;
use App\Models\ReactionType;
use App\Models\Response;
use App\Models\UserProfil;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'question_id' => Question::inRandomOrder()->first(),
            'response_id' => Response::inRandomOrder()->first(),
            'user_id' => UserProfil::inRandomOrder()->first(),
            'reactionType_id' => ReactionType::inRandomOrder()->first()
            //
        ];
    }
}
