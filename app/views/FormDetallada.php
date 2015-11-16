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
<?php include_once '\\..\\models\\provincias.php'; ?>  
<body>

<div>
<div class="col-xs-12">
	<div class="panel panel-primary">
 		<div class="panel-heading">
			<div class="panel-title">Datos de la tarea <?=$tareas['idTarea']?></div>
		</div>
<div class="row">
<div class="col-xs-4">
	<div class="panel panel-info">
 		<div class="panel-heading">
			<div class="panel-title">Descripción de la tarea</div>
		</div>
		<div class="panel-body">
		<?=nl2br($tareas['Descripcion'])?>
		</div>
	</div>
</div>
<div class="col-xs-4">
	<div class="panel panel-info">
 		<div class="panel-heading">
			<div class="panel-title"> Nombre</div>
		</div>
		<div class="panel-body">
		<?=$tareas['Nombre']?>
		</div>
	</div>
</div>
<div class="col-xs-4">
	<div class="panel panel-info">
 		<div class="panel-heading">
			<div class="panel-title"> Apellidos</div>
		</div>
		<div class="panel-body">
		<?=$tareas['Apellidos']?>
		</div>
	</div>
</div>
</div>
<div class="row">
<div class="col-xs-4">
	<div class="panel panel-info">
 		<div class="panel-heading">
			<div class="panel-title">DNI</div>
		</div>
		<div class="panel-body">
		<?=$tareas['DNI']?>
		</div>
	</div>
</div>
<div class="col-xs-4">
	<div class="panel panel-info">
 		<div class="panel-heading">
			<div class="panel-title"> Teléfono</div>
		</div>
		<div class="panel-body">
		<?=$tareas['Telefono']?>
		</div>
	</div>
</div>
<div class="col-xs-4">
	<div class="panel panel-info">
 		<div class="panel-heading">
			<div class="panel-title"> Correo electrónico</div>
		</div>
		<div class="panel-body">
		<?=$tareas['e-mail']?>
		</div>
	</div>
</div>
</div>
<div class="row">
<div class="col-xs-3">
	<div class="panel panel-info">
 		<div class="panel-heading">
			<div class="panel-title">Dirección Jardín</div>
		</div>
		<div class="panel-body">
		<?=$tareas['Direccion']?>
		</div>
	</div>
</div>
<div class="col-xs-3">
	<div class="panel panel-info">
 		<div class="panel-heading">
			<div class="panel-title"> Población</div>
		</div>
		<div class="panel-body">
		<?=$tareas['Poblacion']?>
		</div>
	</div>
</div>
<div class="col-xs-3">
	<div class="panel panel-info">
 		<div class="panel-heading">
			<div class="panel-title"> Código postal</div>
		</div>
		<div class="panel-body">
		<?=$tareas['CP']?>
		</div>
	</div>
</div>
<div class="col-xs-3">
	<div class="panel panel-info">
 		<div class="panel-heading">
			<div class="panel-title"> Provincia</div>
		</div>
		<div class="panel-body">
		<?=DevuelveProvincia($tareas['tbl_provincias_cod'])?>
		</div>
	</div>
</div>
</div>
<div class="row">
<div class="col-xs-3">
	<div class="panel panel-info">
 		<div class="panel-heading">
			<div class="panel-title">Estado</div>
		</div>
		<div class="panel-body">
		<?=$tareas['Estado']?>
		</div>
	</div>
</div>
<div class="col-xs-3">
	<div class="panel panel-info">
 		<div class="panel-heading">
			<div class="panel-title"> Fecha creación</div>
		</div>
		<div class="panel-body">
		<?=$tareas['Fecha_creacion']?>
		</div>
	</div>
</div>
<div class="col-xs-3">
	<div class="panel panel-info">
 		<div class="panel-heading">
			<div class="panel-title"> Operario</div>
		</div>
		<div class="panel-body">
		<?=$tareas['idOperario']?>
		</div>
	</div>
</div>
<div class="col-xs-3">
	<div class="panel panel-info">
 		<div class="panel-heading">
			<div class="panel-title"> Fecha realización</div>
		</div>
		<div class="panel-body">
		<?=$tareas['Fecha_realizacion']?>
		</div>
	</div>
</div>
</div>
<div class="row">
<div class="col-xs-6">
	<div class="panel panel-info">
 		<div class="panel-heading">
			<div class="panel-title">Anotaciones anteriores</div>
		</div>
		<div class="panel-body">
		<?=nl2br($tareas['Anotaciones_anteriores'])?>
		</div>
	</div>
</div>
<div class="col-xs-6">
	<div class="panel panel-info">
 		<div class="panel-heading">
			<div class="panel-title">Anotaciones posteriores</div>
		</div>
		<div class="panel-body">
		<?=nl2br($tareas['Anotaciones_posteriores'])?>
		</div>
	</div>
</div>	 		
</div>
</div></div></div>
</body>
</html>