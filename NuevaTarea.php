<?php
include_once "Funciones.php";
$errores=[];
$HayError=false;
include_once 'provincias.php';
$provincias=Provincias();
include_once 'tareas.php';

if (!$_POST)
{	
	include_once "FormNuevaTarea.php";
}
else 
{
	comprobarErrores($errores, $HayError);
	
	if ($HayError)
	{
		include 'FormNuevaTarea.php';
	}
	else 
	{
		InsertarRegistro($_POST);
	}
		
}