<?php

use Illuminate\Database\Migrations\Migration;

class CreateCategoryPostTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('category_post', function($table)
		   {
		       $table->increments('id');
		       $table->integer('post_id')->unsigned();
		       $table->integer('category_id')->unsigned();
		   });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('category_post');

	}
}