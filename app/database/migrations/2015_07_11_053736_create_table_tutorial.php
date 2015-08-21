<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTutorial extends Migration {

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
			$table->integer('userid');
			$table->integer('categoryid');
			$table->string('judul')->length(100);
			$table->text('content');
			$table->integer('feedback');
			$table->integer('kesulitan');
			$table->integer('durasi');
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
		Schema::drop('tutorials');
	}

}
