<?php

use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments', function($table)
		   {
		       $table->increments('id');
		       $table->integer('user_id')->unsigned();
		       $table->integer('post_id')->unsigned();
		       $table->integer('comment_id')->unsigned();
		       $table->text('content');
		       $table->boolean('spam')->default(0);
		       $table->boolean('approved')->default(0);
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
		Schema::drop('comments');
	}

}