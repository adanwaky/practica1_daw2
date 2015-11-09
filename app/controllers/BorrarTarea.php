<?php
include_once '\\..\\models\\tareas.php';
$resultado=BuscarTarea($_GET['idTarea']);

if (! $_POST)
{
	include "FormBorrar.php";
}
else 
{
		if (isset($_POST['no']))
			include_once "inicio_pag.php";
		
		if (isset($_POST['si']))
		{
			BorrarRegistro($_GET['idTarea']);
		}
			
}