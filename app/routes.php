<?php

Route::get('/', function()
{	
	$postCount = Post::published()->count();
	$currentPostID = Post::first()->id;
	$nextPostID = Post::first()->next;

	return View::make('blog', array('postCount'=>$postCount,'currentPostID'=>$currentPostID,'nextPostID'=>$nextPostID));
});

Route::get('api/posts/{id}', function($id)
{
	$post = Post::find($id);
	$post->date = $post->date;
	$post->author = $post->user->name;
	$post->nextID = $post->next;

	return $post;
});