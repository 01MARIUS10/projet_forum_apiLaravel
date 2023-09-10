<?php

namespace Database\Seeders;

use App\Models\ReactionType;
use Illuminate\Database\Seeder;

class ReactionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
            ReactionType::create(['type' => $i]);
        }
        // ReactionType::factory()->count(10)->create();
        //
    }
}
