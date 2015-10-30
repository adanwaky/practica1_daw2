<html>
<?php include 'Funciones.php'; ?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
  
<body>

<form method="post" action="">
Descripción de la tarea: <br><textarea COLS="40" ROWS="4" name="descripcion" ><?=ValorPost('descripcion')?></textarea>
<!--  BUSCAR DATOS EN LA BASE DE DATOS -->
<p> Nombre: <input type="text" name="nombre" value="<?=ValorPost('nombre')?>" 
	style="<?php  if (isset($errores['nombre']))
			 	echo "background-color: #F78181;"?>">
			 						<?php  if (isset($errores['nombre']))
			 								echo $errores['nombre']?>  </p>

<p> Apellidos : <input type="text" name="apellidos" value="<?=ValorPost('apellidos')?>"
	style="<?php  if (isset($errores['apellidos']))
			 	echo "background-color: #F78181;"?>">
			 		<?php  if (isset($errores['apellidos']))
			 					echo $errores['apellidos']?></p>

<p> DNI: <input type="text" name="dni" value="<?=ValorPost('dni')?>"
	style="<?php  if (isset($errores['dni']))
			 	echo "background-color: #F78181;"?>">
			 		<?php  if (isset($errores['dni']))
			 				echo $errores['dni']?></p>
			 	
<p> Teléfono: <input type="text" name="tlf" value="<?=ValorPost('tlf')?>"
	style="<?php  if (isset($errores['tlf']))
			 	echo "background-color: #F78181;"?>">
			 		<?php  if (isset($errores['tlf']))
			 						echo $errores['tlf']?></p>
			 	
<p> Correo electrónico: <input type="text" name="correo" value="<?=ValorPost('correo')?>"
	style="<?php  if (isset($errores['correo']))
			 	echo "background-color: #F78181;"?>">
			 	<?php  if (isset($errores['correo']))
			 					echo $errores['correo']?></p>
			 	
<p> Dirección Jardín: <input type="text" name="direccion" value="<?=ValorPost('direccion')?>"></p>
<p> Población: <input type="text" name="poblacion" value="<?=ValorPost('poblacion')?>"></p>
<p> Código postal: <input type="text" name="cp" value="<?=ValorPost('cp')?>"
style="<?php  if (isset($errores['cp']))
			 	echo "background-color: #F78181;"?>">
			 		<?php  if (isset($errores['cp']))
			 						echo $errores['cp']?></p>
			 	
<!-- >p> Provincia: select provincias </p-->
<p> Estado: 
	<!--  BUSCAR EL CHECKED -->
	<input type="radio" value="P" name="estado" >Pendiente
	<input type="radio" name="estado" value="R">Realizada
	<input type="radio" name="estado" value="C">Cancelada
	</p>
<p> Fecha creación <input readonly type="date" name="fec-cre" value=" // buscar fecha creacion "></p>
<p> Operario: <input type="text" name="operario" value=""></p>
			 		
<p> Fecha realización: <input type="text" name="fec-rea" value="<?=ValorPost('fec-rea')?>" 
	style="<?php  if (isset($errores['fec-rea']))
			 	echo "background-color: #F78181;"?>"id="datepicker" readonly>
			 		<?php  if (isset($errores['fec-rea']))
			 								echo $errores['fec-rea']?></p>	
			 		
Anotaciones anteriores: <br><textarea COLS="40" ROWS="4" name="an-ant" ><?=ValorPost('an-ant')?></textarea>
<p>Anotaciones posteriores: <br><textarea COLS="40" ROWS="4" name="an-post" ><?=ValorPost('an-post')?></textarea>														
<input type="submit" value="enviar">

</form>
</body>
</html>