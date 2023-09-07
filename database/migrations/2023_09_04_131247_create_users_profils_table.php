<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersProfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userProfils', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('adress');
            $table->string('work');
            $table->string('school');
            $table->foreignId('auth_id')->constrained('userAuths');
            $table->foreignId('image_id')->constrained('images');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_profils');
    }
}
