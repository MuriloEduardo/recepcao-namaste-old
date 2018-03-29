<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHowDidFindOutsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('how_did_find_outs', function(Blueprint $table)
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
		Schema::drop('how_did_find_outs');
	}

}
