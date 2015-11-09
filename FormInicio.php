<?php include_once 'Funciones.php';?>
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

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $.datepicker.regional['es'] = {
		  closeText: 'Cerrar',
		  prevText: '<Ant',
		  nextText: 'Sig>',
		  currentText: 'Hoy',
		  monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
		  monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
		  dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
		  dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
		  dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
		  weekHeader: 'Sm',
		  dateFormat: 'yy-mm-dd',
		  firstDay: 1,
		  isRTL: false,
		  showMonthAfterYear: false,
		  yearSuffix: ''
		  };
		  $.datepicker.setDefaults($.datepicker.regional['es']);
		 $(function () {
		 $("#fecha").datepicker();
		 });
  </script>
</head>
<body>
<div>
<div class="col-xs-12">
<div class="row">
<div class="col-xs-10">
	<div class="panel panel-primary">
	  <div class="panel-heading">
		<div class="panel-title">Buscar</div>
	  </div>
	  <div class="panel-body">
		<form role="form" method="post" action="" class="form-horizontal">
		<div class="form-group">
			<div class="row">
					<label class="col-xs-2 control-label">Fecha de realización: </label>
					<div class="col-xs-1">
					<select class="form-control" name="operacion">
						<option value=">=">>=</option>
						<option value="<="><=</option>
					</select>
					</div>
					<div class="col-xs-2">
						<input class="form-control" type="text" name="fecha" value=""  id="fecha">	
					</div>
			
				<label class="col-xs-1 control-label">Estado: </label>
					<div class="col-xs-2">
					<select class="form-control" name="estado">
						<option value=""> </option>
						<option value="Pendiente">Pendiente</option>
						<option value="Realizada">Realizada</option>
						<option value="Cancelada">Cancelada</option>
					</select>
				</div>	
				
				<label class="col-xs-2 control-label">Nombre empieza por: </label>
				<div class="col-xs-1">
				<input class="form-control" type="text" name="letra" value="">	
				</div>
				<button type="submit"  class="btn btn-default">
				<span class="glyphicon glyphicon-search"></span>
			</button>
			</div>
		</div>
		</form>
	  </div>
	</div>
</div>
<div class="col-xs-2">
	<div class="panel panel-success">
		
	  <div class="panel-heading">
		<div class="panel-title" align="center">Nueva Tarea</div>
	  </div>
	  <div class="panel-body" align="center">
		<a href="NuevaTarea.php"> <img src="nueva.png" ></a>
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