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
		Viewer::view('Gallery','Gallery_create');
	}

	public function update()
	{
		Viewer::view('Gallery','Gallery_update');
	}

	public function delete()
	{
		Viewer::view('Gallery','Gallery_delete');
	}
}