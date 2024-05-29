<?php

namespace src\controllers;

use src\core\Viewer;

class Gallery
{
	public function index()
	{
		Viewer::view('Gallery','Gallery_index');
	}

	public function create()
	{
		echo "create";
	}

	public function update()
	{
		echo "update";
	}

	public function delete()
	{
		echo "delete";
	}
}