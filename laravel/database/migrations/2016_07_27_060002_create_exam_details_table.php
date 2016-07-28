<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('exam_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('exam_name');
			$table->integer('duration_in_mins');
			$table->string('set');
			$table->string('questions_per_set');			
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
		Schema::drop('exam_details');
	}

}
