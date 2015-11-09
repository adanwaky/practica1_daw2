<?php
include_once 'tareas.php';
$tareas=VistaDetallada($_GET['idTarea']);

if(! $_POST)
	include 'FormDetallada.php';

