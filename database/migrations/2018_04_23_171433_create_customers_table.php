<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 191)->nullable();
			$table->string('email', 191)->nullable();
			$table->string('phone', 13)->nullable();
			$table->string('cpf', 11)->nullable();
			$table->date('birth_day')->nullable();
			$table->string('emergency_phone', 13)->nullable();
			$table->string('cep', 8)->nullable();
			$table->string('neighborhood', 191)->nullable();
			$table->string('street', 191)->nullable();
			$table->timestamps();
			$table->integer('number')->nullable();
			$table->integer('created_id')->unsigned()->index('customers_user_id_index');
			$table->integer('professional_id')->unsigned()->nullable()->index('customers_therapist_id_index');
			$table->string('sannyas', 191)->nullable();
			$table->integer('updated_id')->unsigned()->index();
			$table->integer('type_id')->unsigned()->nullable()->default(3)->index();
			$table->integer('how_did_find_out_id')->unsigned()->nullable()->index();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customers');
	}

}
