<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfessionalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('professionals', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 191)->nullable();
			$table->string('sannyas', 191)->nullable();
			$table->integer('created_id')->unsigned()->index('therapists_created_by_index');
			$table->timestamps();
			$table->integer('updated_id')->unsigned()->index('therapists_updated_id_index');
			$table->integer('type_id')->unsigned()->nullable()->index();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('professionals');
	}

}
