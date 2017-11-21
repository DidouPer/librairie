<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBasketTable extends Migration {

	public function up()
	{
		Schema::create('Basket', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('users_id')->unsigned();
			$table->integer('book_id')->unsigned();
			$table->integer('basket_token');
		});
	}

	public function down()
	{
		Schema::drop('Basket');
	}
}
