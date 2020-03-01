<?php
	session_start();
	spl_autoload_register(function ($class)
	{
		$path = "class/";
		$filename = $class;
		$extension = ".php";
		$fullpath = $path.$filename.$extension;

		//Include in project
		include $fullpath;
	});
?>