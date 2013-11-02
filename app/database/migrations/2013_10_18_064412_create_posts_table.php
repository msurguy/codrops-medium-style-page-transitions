<?php

use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function($table)
		   {
		       $table->increments('id');
		       $table->integer('user_id')->unsigned();
		       $table->string('title', 300);
		       $table->string('slug', 300);
		       $table->string('description', 500);
		       $table->string('image', 255);
		       $table->text('content');
		       $table->boolean('published')->default('0');
		       $table->dateTime('published_at');
		       $table->timestamps();
		   });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');
	}

}