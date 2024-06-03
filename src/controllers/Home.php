<?php

namespace src\controllers;

use src\core\Viewer;
use src\models\posts;

class Home
{
	public function index()
	{	
		$model = new Posts();
		$data['posts'] = $model->findOne(1);

		Viewer::view('Home','Home_index', $data);
	}
	public function create()
	{
		Viewer::view('Home','Home_create');
	}
}
