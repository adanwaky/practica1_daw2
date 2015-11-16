
<?php
include_once "Funciones.php";
$errores=[];
$HayError=false;
include_once '\\..\\models\\provincias.php';
$provincias=Provincias();
include_once '\\..\\models\\tareas.php';
$tareas=VistaDetallada($_GET['idTarea']);


if(! $_POST)
{
	if (! ExisteTarea($_GET['idTarea']))
	{
		echo 'error';
	}
	else
	include '\\..\\views\\FormModificar.php';
}
else 
{
	
	comprobarErrores($errores, $HayError);
	
	if ($HayError)
	{
		$tareas=$_POST;
		include '\\..\\views\\FormModificar.php';
	}
	else 
	{
		ActualizarRegistro($_POST, $_POST['idTarea']);
		include_once 'redireccionar.php';
	}
	
	
}
?>
