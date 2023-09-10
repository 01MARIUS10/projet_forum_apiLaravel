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
        $bool = rand(0, 1);
        return [
            'question_id' => $bool ? null : Question::inRandomOrder()->first(),
            'response_id' => $bool ? Response::inRandomOrder()->first() : null,
            'user_id' => UserProfil::inRandomOrder()->first(),
            'reactionType_id' => ReactionType::inRandomOrder()->first()
            //
        ];
    }
}
