<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentStatusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('student_status', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_id')->unique();
			$table->integer('exam_id');
			$table->string('set');
			$table->float('time_remaining');
			$table->integer('current_question');
			$table->timestamp('start_exam');
			$table->tinyInteger('end_exam');
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
		Schema::drop('student_status');
	}

}
