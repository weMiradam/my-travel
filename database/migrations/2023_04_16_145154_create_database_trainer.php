<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatabaseTrainer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainer', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->string("info_name")->nullable();
            $table->string("photo")->nullable();
            $table->longText("description")->nullable();
            $table->string("instagram")->nullable();
            $table->string("twitter")->nullable();
            $table->string("facebook")->nullable();
            $table->string("email")->nullable();
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
        Schema::dropIfExists('trainer');
    }
}
