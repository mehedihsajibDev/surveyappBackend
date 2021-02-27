<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripactivityModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tripactivity_models', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('tripno')->default(0);
            $table->string('starttime',100);
            $table->string('endtime',100);
            $table->string('task',100);
            $table->string('multitaask',100);
            $table->string('ticketprice',100);
            $table->string('adresses',100);
            $table->string('destination',100);
            $table->string('transport',100);
            $table->string('copartner',100);
            $table->string('q1value',100);
            $table->string('q2value',100);
            $table->string('q3value',100);
            $table->string('q4value',100);
            $table->string('q5value',100);
            $table->string('q6value',100);
            $table->string('q7value',100);
            $table->string('q8value',100);
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
        Schema::dropIfExists('tripactivity_models');
    }
}
