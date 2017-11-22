<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBasketsTable extends Migration {

	public function up()
	{
		Schema::create('baskets', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('users_id')->unsigned();
			$table->integer('books_id')->unsigned();
			$table->integer('baskets_token');
		});
	}

	public function down()
	{
		Schema::drop('baskets');
	}
}
