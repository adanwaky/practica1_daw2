<?php
include_once 'tareas.php';
$tareas=VistaDetallada($_GET['idTarea']);

if(! $_POST)
	include 'FormCompletada.php';
else 
{
	ActualizarRegistro($_POST, $_GET['idTarea']);
}

