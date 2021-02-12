<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnlyhomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onlyhomes', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('start_time');
            $table->string('end_time');
            $table->string('task');
            $table->string('multitaask');
            $table->string('cost');
            $table->string('reason_cost');
            $table->string('copartner');
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
        Schema::dropIfExists('onlyhomes');
    }
}
