<?php

namespace Database\Seeders;

use App\Models\ArticleCategories;
use Illuminate\Database\Seeder;

class ArticleCategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ArticleCategories::factory()->count(5)->create();
        //
    }
}
