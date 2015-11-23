<!-- FORMULARIO DE CONFIRMACIÓN DE BORRADO -->
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
<h3>¿Desea borrar esta tarea? </h3>
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
</tr>
<?php 
foreach ($resultado as $tarea) {//$resultado DECLARADO EN EL CONTROLADOR
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
</tr>
 <?php 
}
?>
</table></div></div>
<center>
<form method="post" action="" name="form2">
<p>
<input type="submit" class="btn btn-success" name="si" value="SI">
<input type="submit" class="btn btn-danger" name="no" value="NO">
<p>
</form>
</center>
</body></html>

</body>
</html>