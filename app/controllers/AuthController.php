<?php

class AuthController extends BaseController {

	protected $layout = 'layouts.default';

	public function getLogin()
	{
		$this->layout->content = View::make('login');
	}

	public function postLogin()
	{
		$input = array(
	      'username'    => Input::get( 'login_username' ), 
	      'password' 	=> Input::get( 'login_password' )
	   	);
	   	if (($input['password']!='') && Auth::attempt($input, Input::get( 'login_remember' )))
	   	{
	   	  	return Redirect::intended('user');
	   	} else {
	   		return Redirect::to('auth/login')->with('status','error')->withInput();
	   	}
	}

	public function postRegister(){

	    $rules = array(
	    	'username'	=> 'required|min:4|alpha_num|unique:users,username',
	    	'email' 	=> 'required|email|min:5|unique:users,email',
	    	'password' 	=> 'required|min:6|confirmed'
	    );

	    $validation = Validator::make(Input::all(), $rules);

	    if ( $validation -> fails()){
	    	return Redirect::to('auth/login')->withErrors($validation)->withInput();
	    } 

	    $user = new User;

	    $user->email 		= e(Input::get('email'));
	    $user->username 	= e(Input::get('username'));
	    $user->password 	= Input::get('password');
	    
	    $user->save();

	    if ($user) { 
	    	// user created, log them in 
	      	Auth::login($user);
	    	return Redirect::to('user');
		} else {
			return Redirect::to('/');
		}
	}

	public function getLogout()
	{
		Auth::logout();
		return Redirect::to('auth/login')->with('status','logout');
	}
}