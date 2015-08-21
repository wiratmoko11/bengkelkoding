<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThreadsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('threads', function($table)
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
		Schema::dropIfExists('threads');
	}

}
