<?php
include_once "Funciones.php";
$errores=[];
$HayError=false;
include_once 'provincias.php';
$provincias=Provincias();
include_once 'tareas.php';

if (!$_POST)
{	
	
	include_once 'Paginacion.php';
}
else 
{
		
}