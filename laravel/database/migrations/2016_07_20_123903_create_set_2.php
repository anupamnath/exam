<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSet2 extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('set_2', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('question_no')->unique();
            $table->text('question');
			$table->string('section');
            $table->text('a');
			$table->text('b');
			$table->text('c');
			$table->text('d');
            $table->string('correct_option');
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
		Schema::drop('set_2');
	}

}
