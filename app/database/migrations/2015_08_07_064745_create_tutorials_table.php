<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorialsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tutorials', function($table)
		{
			$table->increments('id');
			$table->unsignedInteger('userid');
			$table->foreign('userid')->references('id')->on('users')->onDelete('CASCADE');
			$table->unsignedInteger('categoryid');
			$table->foreign('categoryid')->references('id')->on('categories');
			$table->string('tittle', 200);
			$table->text('content');
			$table->integer('points');
			$table->integer('views');
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
		Schema::dropIfExists('tutorials');
	}

}
