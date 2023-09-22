<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('question_id')->nullable()->constrained('questions');
            $table->foreignId('response_id')->nullable()->constrained('responses');
            $table->foreignId('user_id')->constrained('user_profils');
            $table->foreignId('reactionType_id')->constrained('reaction_types');

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
        $table->dropForeign(['question_id']);
        $table->dropForeign(['response_id']);
        $table->dropForeign(['user_id']);
        Schema::dropIfExists('article_reactions');
    }
}
