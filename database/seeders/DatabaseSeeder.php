<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserProfilSeeder::class);
        $this->call(ChatSeeder::class);
        $this->call(QuestionCategorieSeeder::class);
        $this->call(QuestionSeeder::class);
        $this->call(ResponseSeeder::class);
        $this->call(ReactionTypeSeeder::class);
        $this->call(ReactionSeeder::class);
        //
    }
}
