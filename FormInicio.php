<html>
<head> 
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet"
 href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" 
 integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" 
 crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" 
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" 
integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" 
crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" 
integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" 
crossorigin="anonymous"></script>
</head>
<body>
<div>
<div class="col-xs-12">
<div class="row">
<div class="col-xs-11">
	<div class="panel panel-primary">
		
	  <div class="panel-heading">
		<div class="panel-title">Buscar</div>
	  </div>
	  <div class="panel-body">
		Contenido del panel
	  </div>
	</div>
</div>
<div class="col-xs-1">
	<div class="panel panel-success">
		
	  <div class="panel-heading">
		<div class="panel-title">Nueva Tarea</div>
	  </div>
	  <div class="panel-body">
		<a href="NuevaTarea.php"> <img src="nueva.png"></a>
	  </div>
	</div>
</div>
</div>
<table border="1" class="table table-condensed">
<tr class="success" align="center">
	<td> <b>Tarea</b></td>
	<td><b>Nombre Contacto</b> </td>
	<td><b>Teléfono</b></td>
	<td><b>Dirección</b></td>
	<td><b>Población</b></td>
	<td><b>Estado</b></td>
	<td><b>Fecha Creación</b></td>
	<td><b>Fecha Realización</b></td>
	<td><b>Operario</b></td>
	<td><b>Opciones</b></td>
</tr>
<?php 
foreach ($resultado as $tarea) {
?>
<tr> <td> <?=$tarea['idTarea']?></td>
<td> <?=$tarea['Nombre']?></td>
<td> <?=$tarea['Telefono']?></td>
<td> <?=$tarea['Direccion']?></td>
<td> <?=$tarea['Poblacion']?></td>
<td> <?=$tarea['Estado']?></td>
<td> <?=$tarea['Fecha_creacion']?></td>
<td> <?=$tarea['Fecha_realizacion']?></td>
<td> <?=$tarea['Operario']?></td>
<td> <a href="Detallada.php?idTarea=<?=$tarea['idTarea']?>" target="_new"> <img src="detalle.ico"></a>
	 <a href="Modificar.php?idTarea=<?=$tarea['idTarea']?>"> <img src="modificar.ico"></a>
	 <a href="BorrarTarea.php?idTarea=<?=$tarea['idTarea']?>"> <img src="borrar.ico"></a>
	 <a href="Completada.php?idTarea=<?=$tarea['idTarea']?>"> <img src="completar.ico"></a></td>
</tr>
 <?php 
}
?>
</table></div>
</div></body></html>