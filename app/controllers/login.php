<?php

include_once MOD.'users.php';
if (!$_POST)
{
	include_once VIEW.'FormLogin.php';
	
}
else 
{
	if (ValidaUser($_POST['user'], $_POST['tipo'], $_POST['pass']))
	{
		$_SESSION['user']=$_POST['user'];
		$_SESSION['pass']=$_POST['pass'];
		$_SESSION['tipo']=$_POST['tipo'];
		$_SESSION['hora']=date("H:i:s");

		include_once 'redireccionar.php';
	}
	else 
	{
		include_once 'redireccionar.php';
	}
}