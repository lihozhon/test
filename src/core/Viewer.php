<?php

namespace src\core;

class Viewer 
{
	public static function view(string $dirName, string $name, array $data = []) : void
	{
		extract($data);
		
		include_once __DIR__.DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."view".DIRECTORY_SEPARATOR.$dirName.DIRECTORY_SEPARATOR.$name.".php";
	}
}