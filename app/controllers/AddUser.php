<?php
include_once "Funciones.php"; 
include_once MOD.'users.php';
$errores=[];//Array donde almacenamos los errores si hubiese
$HayError=false;

if (!$_POST)
{
	include_once VIEW.'AnadirUsuario.php';
}
else
{
	ErrorGuardarUser($errores, $HayError);
	
	if ($HayError)
		include_once VIEW.'AnadirUsuario.php';
	else
	{
		$datos=Array('nombre'=>$_POST['nombre'], 
				'password'=>$_POST['password'], 
				'tipo'=>$_POST['tipo']);
		
		UserAdd($datos);
		include_once 'redireccionar.php';
	}
}