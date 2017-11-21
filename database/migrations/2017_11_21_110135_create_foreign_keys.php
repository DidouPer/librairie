<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('Basket', function(Blueprint $table) {
			$table->foreign('users_id')->references('id')->on('users')
						->onDelete('no action')
						->onUpdate('cascade');
		});
		Schema::table('Basket', function(Blueprint $table) {
			$table->foreign('book_id')->references('id')->on('Book')
						->onDelete('no action')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('Basket', function(Blueprint $table) {
			$table->dropForeign('Basket_users_id_foreign');
		});
		Schema::table('Basket', function(Blueprint $table) {
			$table->dropForeign('Basket_book_id_foreign');
		});
	}
}
