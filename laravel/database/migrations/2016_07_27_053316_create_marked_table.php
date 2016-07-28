<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarkedTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('marked', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_id')->unique();
			for($i=1; $i<=60; $i++){
				$table->tinyInteger('q'.$i);
			}
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
		Schema::drop('marked');
	}

}
