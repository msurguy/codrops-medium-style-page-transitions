<?php

use Illuminate\Database\Migrations\Migration;

class CreatePostTagTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('post_tag', function($table)
		   {
		       $table->increments('id');
		       $table->integer('post_id')->unsigned();
		       $table->integer('tag_id')->unsigned();
		   });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('post_tag');
	}

}