
<?php
include_once "Funciones.php";
$errores=[];
$HayError=false;
include_once '\\..\\models\\provincias.php';
$provincias=Provincias();
include_once '\\..\\models\\tareas.php';

if (!$_POST)
{	
	include_once "\\..\\views\\FormNuevaTarea.php";
}
else 
{
	comprobarErrores($errores, $HayError);
	
	if ($HayError)
	{
		include '\\..\\views\\FormNuevaTarea.php';
	}
	else 
	{
		InsertarRegistro($_POST);
		include_once 'redireccionar.php';
	}
		
}
