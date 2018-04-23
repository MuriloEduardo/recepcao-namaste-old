<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHowDidFindOutCustomerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('how_did_find_out_customer', function(Blueprint $table)
		{
			$table->integer('how_did_find_out_id')->unsigned()->index();
			$table->integer('customer_id')->unsigned()->index();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('how_did_find_out_customer');
	}

}
