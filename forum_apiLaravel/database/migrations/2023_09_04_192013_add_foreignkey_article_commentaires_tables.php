<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeyArticleCommentairesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('article_commentaires', function (Blueprint $table) {
            $table->foreignId('article_id')->constrained('articles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(Blueprint $table)
    {
        //
        Schema::table('article_commentaires', function (Blueprint $table) {
            $table->dropForeign(['article_id']);
        });
    }
}
