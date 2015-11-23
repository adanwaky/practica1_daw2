<?php
//CONTROLADOR PARA MODIFICAR UNA TAREA
include_once "Funciones.php";
$errores=[]; //Array para almacenar los errores si hubiese
$HayError=false;
include_once '\\..\\models\\provincias.php';
$provincias=Provincias();//Devuelve un array con todas las provincias españolas
include_once '\\..\\models\\tareas.php';
$tareas=VistaDetallada($_GET['idTarea']);//Devuelve todos los datos de la tarea pasada por GET

if(! $_POST)
{
	if (! ExisteTarea($_GET['idTarea']))//Si la tarea no existe mostrar error
	{
		include_once '\\..\\views\\Error404.php';
	}
	else //Si existe mostrar el formulario para modificar los datos
	include '\\..\\views\\FormModificar.php';
}
else 
{	
	comprobarErrores($errores, $HayError);
	
	if ($HayError)//Si hay errores, se muestran los datos de $_POST para corregirlos 
	{
		$tareas=$_POST;
		include '\\..\\views\\FormModificar.php';
	}
	else //No hay errores
	{
		ActualizarRegistro($_POST, $_POST['idTarea']);//Actualiza el registro en la base de datos
		include_once 'redireccionar.php';//Redirecciona a la página principal
	}
	
	
}
?>
