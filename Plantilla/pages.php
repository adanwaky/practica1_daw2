<?php
define('CTRL','..\\app\\controllers\\');
if (!isset($_GET['page'])) 
{
     include("\\..\\app\\controllers\\inicio_pag.php");
     
}
 else 
 {
 	$file=CTRL.$_GET['page'].'.php';
	if (file_exists($file))
	{
     include(CTRL.$_GET['page'].".php");
	}
	else 
		include CTRL.'Error404.php';
}
?>