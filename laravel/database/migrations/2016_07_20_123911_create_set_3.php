<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSet3 extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('set_3', function (Blueprint $table) {
            $table->increments('id');
            $table->text('question');
            $table->string('option_1');
			$table->string('option_2');
			$table->string('option_3');
			$table->string('option_4');
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
		Schema::drop('set_3');
	}

}
