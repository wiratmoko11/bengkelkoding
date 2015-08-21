<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThreadAnswersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('threadAnswers', function($table)
		{
			$table->increments('id');
			$table->unsignedInteger('userid');
			$table->foreign('userid')->references('id')->on('users');
			$table->unsignedInteger('threadid');
			$table->foreign('threadid')->references('id')->on('threads');
			$table->integer('point');
			$table->text('content');
			$table->integer('solved');
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
		Schema::dropIfExists('threadAnswers');
	}

}
