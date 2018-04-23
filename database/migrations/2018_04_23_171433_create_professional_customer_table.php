<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfessionalCustomerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('professional_customer', function(Blueprint $table)
		{
			$table->integer('professional_id')->unsigned()->index('therapist_customer_therapist_id_index');
			$table->integer('customer_id')->unsigned()->index('therapist_customer_customer_id_index');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('professional_customer');
	}

}
