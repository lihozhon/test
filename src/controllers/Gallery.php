<?php

namespace src\controllers;

use src\core\Viewer;
use src\models\galleries;

class Gallery
{
	public function index()
	{
		$model = new Galleries();
		$data['galleries'] = $model->findOne(1);
		Viewer::view('Gallery','Gallery_index', $data);
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