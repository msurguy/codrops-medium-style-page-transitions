<?php

Route::get('/', function()
{	
	$postCount = Post::published()->count();
	$currentPost = Post::first()->id;
	return View::make('blog', array('postCount'=>$postCount,'currentPost'=>$currentPost));
});

Route::get('api/posts/{id}', function($id)
{
	$post = Post::find($id);
	$post->date = $post->date;
	$post->author = $post->user->name;

	return $post;
});