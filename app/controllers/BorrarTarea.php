
<?php
include_once '\\..\\models\\tareas.php';
$resultado=BuscarTarea($_GET['idTarea']);

if (! $_POST)
{
	include "\\..\\views\\FormBorrar.php";
}
else 
{
		if (isset($_POST['no']))
		{
			include_once 'redireccionar.php';
		}
		
		if (isset($_POST['si']))
		{
			BorrarRegistro($_GET['idTarea']);
			include_once 'redireccionar.php';
		}
			
}
?>
