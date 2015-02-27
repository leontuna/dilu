<?php


class SessionsController extends \BaseController {


	public function create()
	{
		return View::make('sessions.create');
	}

	public function store()
	{
		$input = Input::only('email', 'password');

		if (Auth::attempt($input))
		{

			return Redirect::to('/');

		}

		return Redirect::back()->withInput()->withFlashMessage('Invalid Credentials');
	}


	public function destroy()
	{
		Auth::logout();
		return Redirect::to('/');
	}

}