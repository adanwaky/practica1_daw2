<?php
include_once '\\..\\models\\tareas.php';
$tareas=VistaDetallada($_GET['idTarea']);

if(! $_POST)
	include '\\..\\views\\FormCompletada.php';
else 
{
	ActualizarRegistro($_POST, $_GET['idTarea']);
}

