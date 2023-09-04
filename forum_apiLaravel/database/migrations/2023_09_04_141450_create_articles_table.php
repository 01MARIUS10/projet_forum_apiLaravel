<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained('users_profils');
            $table->foreignId('categorie_id')->constrained('article_categories');


            $table->text('content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(Blueprint $table)
    {
        $table->dropForeign('articles_user_id_foreign');
        $table->dropForeign('articles_categorie_id_foreign');
        Schema::dropIfExists('articles');
    }
}
