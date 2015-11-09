<?php
include_once '\\..\\models\\tareas.php';
include_once 'Funciones.php';

// Ruta URL desde la que ejecutamos el script
$myURL='pruebas.php'; 

$nElementosxPagina=5;

// Calculamos el n�mero de p�gina que mostraremos
if (isset($_GET['pag']))
{
	// Leemos de GET el n�mero de p�gina
	$nPag=$_GET['pag'];
}
else 
{
	// Mostramos la primera p�gina
	$nPag=1;
}

$reg = ContarRegistros();//guardamos en el array

$totalRegistros=$reg['total'];
$totalPaginas=floor($totalRegistros/$nElementosxPagina);


// Calculamos el registro por el que se empieza en la sentencia LIMIT
$nReg=($nPag-1)*$nElementosxPagina;

// --SENTENCIAS PHP -- Mostramos los elementos de la consulta como deseemos
$resultado =DatosPaginacion($nReg, $nElementosxPagina);


include_once '\\..\\views\\FormInicio.php';
MuestraPaginador($nPag, $totalPaginas, $myURL);




