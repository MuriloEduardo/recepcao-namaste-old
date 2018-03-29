<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customer_types', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('lable', 191);
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
		Schema::drop('customer_types');
	}

}
