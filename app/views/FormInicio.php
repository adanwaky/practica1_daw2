<?php include_once '\\..\\controllers\\Funciones.php';?>
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
<td align="center"> <a href="?page=Detallada&idTarea=<?=$tarea['idTarea']?>" > <img src="../assets/detalle.ico"></a>
	 <a href="?page=Modificar&idTarea=<?=$tarea['idTarea']?>"> <img src="../assets/modificar.ico"></a>
	 <a href="?page=BorrarTarea&idTarea=<?=$tarea['idTarea']?>"> <img src="../assets/borrar.ico"></a>
	 <a href="?page=Completada&idTarea=<?=$tarea['idTarea']?>"> <img src="../assets/completar.ico"></a></td>
</tr>
 <?php 
}
?>
</table></div>
</div></body></html>