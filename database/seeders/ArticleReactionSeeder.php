<?php

namespace Database\Seeders;

use App\Models\ArticleReaction;
use Illuminate\Database\Seeder;

class ArticleReactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ArticleReaction::factory()->count(12)->create();
        //
    }
}
