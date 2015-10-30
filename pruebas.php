<?php
include "Funciones.php";
$errores=[];
$HayError=false;

if (!$_POST)
{
	include "FormNuevaTarea.php";
}
else 
{
	
	comprobarErrores($errores, $HayError);
	
	
	if ($HayError)
	include 'FormNuevaTarea.php';
	else 
		echo "dar alta";
		
}