<?php

namespace src\controllers;

class About
{
	public function index()
	{
		Viewer::view('About','About_index');
	}

	public function page()
	{
		Viewer::view('About','About_page');
	}
}