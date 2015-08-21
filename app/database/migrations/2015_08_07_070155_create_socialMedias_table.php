<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialMediasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('socialMedias', function($table)
		{
			$table->increments('id');
			$table->unsignedInteger('userid');
			$table->foreign('userid')->references('id')->on('users');
			$table->string('github', 32);
			$table->string('facebook', 64);
			$table->string('twitter', 32);
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
		Schema::dropIfExists('socialMedias');
	}

}
