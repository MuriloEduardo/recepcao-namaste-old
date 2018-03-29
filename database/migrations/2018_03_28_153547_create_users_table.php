<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('role_id')->nullable();
			$table->string('name', 191);
			$table->string('email', 191)->unique();
			$table->string('avatar', 191)->nullable()->default('users/default.png');
			$table->string('password', 191);
			$table->string('remember_token', 100)->nullable();
			$table->timestamps();
			$table->integer('created_id')->unsigned()->index();
			$table->integer('updated_id')->unsigned()->index();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
