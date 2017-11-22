<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBooksTable extends Migration {

	public function up()
	{
		Schema::create('books', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('books_title', 50);
			$table->float('books_price');
			$table->integer('books_quantity');
		});
	}

	public function down()
	{
		Schema::drop('books');
	}
}