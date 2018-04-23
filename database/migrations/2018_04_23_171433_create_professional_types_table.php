<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfessionalTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('professional_types', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('lable', 191)->nullable();
			$table->integer('created_id')->unsigned()->index('professional_type_created_id_index');
			$table->integer('updated_id')->unsigned()->index('professional_type_updated_id_index');
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
		Schema::drop('professional_types');
	}

}
