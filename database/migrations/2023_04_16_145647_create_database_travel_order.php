<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatabaseTravelOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr_travel_order', function (Blueprint $table) {
            $table->id();
            $table->string("code_transaction")->nullable();
            $table->smallInteger("travel_id")->nullable();
            $table->string("name")->nullable();
            $table->string("no_phone")->nullable();
            $table->string("email")->nullable();
            $table->integer("ticket_qty")->nullable();
            $table->date("date_booking")->nullable();
            $table->string("session_time")->nullable();
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
        Schema::dropIfExists('tr_travel_order');
    }
}
