<?php
include_once "Funciones.php";
$errores=[];
$HayError=false;
include_once 'provincias.php';
$provincias=Provincias();
include_once 'tareas.php';

if (!$_POST)
{	
	
	include_once 'inicio_pag.php';
}
else 
{
		include_once 'buscar.php';
}