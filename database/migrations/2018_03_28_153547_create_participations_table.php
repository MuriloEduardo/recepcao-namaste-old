<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParticipationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('participations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('created_id')->unsigned()->index('participation_created_id_index');
			$table->integer('updated_id')->unsigned()->index('participation_updated_id_index');
			$table->timestamps();
			$table->integer('event_id')->unsigned()->index();
			$table->dateTime('start_date')->nullable();
			$table->dateTime('end_date')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('participations');
	}

}
