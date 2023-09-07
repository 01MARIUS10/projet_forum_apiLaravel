<?php

namespace Database\Seeders;

use App\Models\QuestionCategories;
use Illuminate\Database\Seeder;

class QuestionCategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        QuestionCategories::factory()->count(5)->create();
        //
    }
}
