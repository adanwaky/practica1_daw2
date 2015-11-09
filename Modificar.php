<?php
include_once "Funciones.php";
$errores=[];
$HayError=false;
include_once 'provincias.php';
$provincias=Provincias();
include_once 'tareas.php';
$tareas=VistaDetallada($_GET['idTarea']);


if(! $_POST)
	include 'FormModificar.php';
else 
{
	comprobarErrores($errores, $HayError);
	
	if ($HayError)
	{
		$tareas=$_POST;
		include 'FormModificar.php';
	}
	else 
	{
		ActualizarRegistro($_POST, $_POST['idTarea']);
	}
	
}

