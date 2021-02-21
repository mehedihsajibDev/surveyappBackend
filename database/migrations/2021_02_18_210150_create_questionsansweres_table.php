<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsansweresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionsansweres', function (Blueprint $table) {
        
            $table->id();
            $table->integer('user_id');
            $table->string('q1title',100);
            $table->string('ans1',100);
            $table->string('q2title',100);
            $table->string('ans2',100);
            $table->string('q3title',100);
            $table->string('ans3',100);
            $table->string('q4title',100);
            $table->string('ans4',100);
            $table->string('q5title',100);
            $table->string('ans5',100);
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
        Schema::dropIfExists('questionsansweres');
    }
}
