<?php

namespace src\controllers;

use src\core\Viewer;

class Home
{
	public function index()
	{
		Viewer::view('Home','Home_index');
	}
	public function create()
	{
		echo "create";
	}
}
