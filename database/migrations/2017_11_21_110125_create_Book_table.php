<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBookTable extends Migration {

	public function up()
	{

		Schema::create('books', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('book_title', 50);
			$table->float('book_price');
			$table->float('book_quantity');
		});
	}
	public function down()
	{
		Schema::drop('books');

	}
}
