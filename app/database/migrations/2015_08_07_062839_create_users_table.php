<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table){
			$table->increments('id');
			$table->string('username', 20)->unique();
			$table->string('email', 120)->unique();
			$table->string('password', 200);
			$table->string('about', 200);
			$table->string('job', 100);
			$table->integer('reputation');
			$table->text('followers');
			$table->text('following');
			$table->text('photo');
			$table->integer('confirmation');
			$table->rememberToken();
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
		Schema::dropIfExists('users');
	}

}
