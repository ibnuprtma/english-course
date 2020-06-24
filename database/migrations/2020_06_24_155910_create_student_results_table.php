<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_results', function (Blueprint $table) {
            $table->unsignedBigInteger('student_id')->nullable();
            $table->unsignedBigInteger('question_detail_id')->nullable();
            $table->string('answer')->nullable();
            $table->string('correct_answer')->nullable();
            $table->integer('score')->nullable();
            $table->timestamps();
            $table->softDeletes();


            $table->foreign('question_detail_id')
                    ->references('id')->on('question_details')
                    ->onUpdate('cascade')
                    ->onDelete('restrict');

            $table->foreign('student_id')
                    ->references('id')->on('students')
                    ->onUpdate('cascade')
                    ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_results');
    }
}
