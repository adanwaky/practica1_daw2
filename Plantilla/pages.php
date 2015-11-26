<?php

if (!isset($_SESSION['user']) && !isset($_SESSION['pass']))
{
	include_once CTRL.'login.php';
}
else 
{
	//LLAMA A LA PÁGINA DE LA CARPETA CONTROLLERS QUE PIDAMOS USANDO GET index.php?
	
	if (!isset($_GET['page'])) 
	{
	     include(CTRL."inicio_pag.php");
	     
	}
	 else 
	 {
	 	$file=CTRL.$_GET['page'].'.php';
		if (file_exists($file))
		{
	     include(CTRL.$_GET['page'].".php");
		}
		else 
			include_once 'Error404.php';
	}
}