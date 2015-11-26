<?php
//CONTROLADOR PARA MODIFICAR UNA TAREA
include_once "Funciones.php";
$errores=[]; //Array para almacenar los errores si hubiese
$HayError=false;
include_once MOD.'users.php';
$usuario=DatosUser($_GET['idusers']);//Devuelve todos los datos del usuario pasado por GET

if(! $_POST)
{
	if (! ExisteUser($_GET['idusers']))//Si el usuario no existe mostrar error
	{
		include_once VIEW.'Error404.php';
	}
	else //Si existe mostrar el formulario para modificar los datos
	include VIEW.'ModificarUser.php';
}
else 
{	
	ErrorModUser($_GET['idusers'], $errores, $HayError);
	
	if ($HayError)//Si hay errores, se muestran los datos de $_POST para corregirlos 
	{
		$usuario=$_POST;
		include VIEW.'ModificarUser.php';
	}
	else //No hay errores
	{
		$datos=Array('nombre'=>$_POST['nombre'],
				'password'=>$_POST['password'],
				'tipo'=>$_POST['tipo']);
		
		ActualizaUser($datos, $_POST['idusers']);//Actualiza el registro en la base de datos
		include_once 'redireccionar.php';//Redirecciona a la página principal
	}
	
}
?>