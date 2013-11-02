<?php

class AdminCommentsController extends \BaseController {

	protected $layout = 'layouts.default';

	public function getIndex()
	{
		$this->layout->content = View::make('admin.comments.index');
	}
}