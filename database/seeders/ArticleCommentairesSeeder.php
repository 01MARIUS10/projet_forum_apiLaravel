<?php

namespace Database\Seeders;

use App\Models\ArticleCommentaires;
use Illuminate\Database\Seeder;

class ArticleCommentairesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ArticleCommentaires::factory()->count(20)->create();
        //
    }
}
