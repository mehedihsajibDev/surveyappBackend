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
            $table->string('start_time',100);
            $table->string('end_time',100);
            $table->string('task',100);
            $table->string('multitaask',100);

            $table->string('cost',100)->nullable();
            $table->string('reason_cost',100)->nullable();
            $table->string('copartner',100);
            
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
