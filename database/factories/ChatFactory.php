<?php

namespace Database\Factories;

use App\Models\Image;
use App\Models\File;
use App\Models\UserProfil;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $to = UserProfil::inRandomOrder()->first();
        $from = '';
        while ($to == $from) {
            $from = UserProfil::inRandomOrder()->first();
        }
        return [
            'text' => $this->faker->sentence(2),
            'from_id' => $to,
            'to_id' => $from,
            "image_id" => Image::inRandomOrder()->first(),
            "file_id" => File::inRandomOrder()->first()
            //
        ];
    }
}
