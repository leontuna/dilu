<?php

class PagesController extends \BaseController {

	public function index(){return View::make('pages.index');}
	public function contact(){return View::make('pages.contact');}
	public function login(){return View::make('pages.login');}
	public function product(){return View::make('pages.product');}
	public function about(){return View::make('pages.about');}

}
