<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDataTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('data_types', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 191)->unique();
			$table->string('slug', 191)->unique();
			$table->string('display_name_singular', 191);
			$table->string('display_name_plural', 191);
			$table->string('icon', 191)->nullable();
			$table->string('model_name', 191)->nullable();
			$table->string('policy_name', 191)->nullable();
			$table->string('controller', 191)->nullable();
			$table->string('description', 191)->nullable();
			$table->boolean('generate_permissions')->default(0);
			$table->boolean('server_side')->default(0);
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
		Schema::drop('data_types');
	}

}
