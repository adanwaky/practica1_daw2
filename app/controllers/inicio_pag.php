<?php
//CONTROLADOR QUE MUESTRA UNOS DATOS DE LAS TAREAS DE LA BASE DE DATOS DE 1O EN 10
include_once '\\..\\models\\tareas.php';
include_once 'Funciones.php';

// Ruta URL desde la que ejecutamos el script
$myURL='?page=inicio_pag'; 

$nElementosxPagina=10;

// Calculamos el número de página que mostraremos
if (isset($_GET['pag']))
{
	$nPag=$_GET['pag'];
}
else 
{
	// Mostramos la primera página	
	$nPag=1;
}

$reg = ContarRegistros();//guardamos en el array

$totalRegistros=$reg['total'];
$totalPaginas=floor($totalRegistros/$nElementosxPagina);

// Calculamos el registro por el que se empieza en la sentencia LIMIT
$nReg=($nPag-1)*$nElementosxPagina;

// --SENTENCIAS PHP -- Mostramos los elementos de la consulta como deseemos
$resultado=DatosPaginacion($nReg, $nElementosxPagina);//Devuelve unos datos limitados de las tareas

include_once '\\..\\views\\FormInicio.php';//Donde se muestran los datos
MuestraPaginador($nPag, $totalPaginas, $myURL);




