<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeandTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homeand_trips', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('tripno')->default(0);
            $table->string('starttime',100);
            $table->string('endtime',100);
            $table->string('task',100)->nullable();
            $table->string('multitaask',100)->nullable();
            $table->string('cost',100)->nullable();
            $table->string('reason_cost',100)->nullable();

            $table->string('ticketprice',100)->nullable();
            $table->string('adresses',100)->nullable();
            $table->string('destination',100)->nullable();
            $table->string('transport',100)->nullable();
            $table->string('copartner',100)->nullable();
            $table->string('q1value',100)->nullable();
            $table->string('q2value',100)->nullable();
            $table->string('q3value',100)->nullable();
            $table->string('q4value',100)->nullable();
            $table->string('q5value',100)->nullable();
            $table->string('q6value',100)->nullable();
            $table->string('q7value',100)->nullable();
            $table->string('q8value',100)->nullable();
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
        Schema::dropIfExists('homeand_trips');
    }
}
