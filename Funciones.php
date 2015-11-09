<?php
function ValorPost($nombreCampo, $valorPorDefecto='')
{
	if (isset($_POST[$nombreCampo]))
		return $_POST[$nombreCampo];
	else
		return $valorPorDefecto;
}

function comprobarErrores(& $errores,& $HayError)
{
	$exp_cp='/0[1-9][0-9]{3}|[1-4][0-9]{4}|5[0-2][0-9]{3}/'; //CP ESPAÑA
	$exp_tlf= '/[0-9]{9}$/'; //TELEFONO	
	$exp_dni='/^[0-9]{8}[A-Z]$/'; //DNI
	
	if ($_POST['Descripcion']=="") {
		$errores['Descripcion']="Descripción vacío"; $HayError=true; }
	
	if ($_POST['Nombre']==""){
		$errores['Nombre']="Nombre vacío"; $HayError=true;}
		
		if ($_POST['Apellidos']==""){
			$errores['Apellidos']="Apellidos vacío"; $HayError=true;}
	
	if ($_POST['e-mail']=="" ||!filter_var($_POST['e-mail'], FILTER_VALIDATE_EMAIL)){
		$errores['e-mail']="Error en el e-mail";$HayError=true;}
		
		
	if($_POST['Fecha_realizacion']<= date('Y-m-d')){
		$errores['Fecha_realizacion']="Fecha de realización menor o igual que hoy";$HayError=true;}
		
		
	if (!preg_match($exp_cp, $_POST['CP'])){
		$errores['CP']="Código postal incorrecto"; $HayError=true;}
	
	if ($_POST['tbl_provincias_cod']==""){
		$errores['tbl_provincias_cod']="Provincia vacía"; $HayError=true;}
	
	$telefono=$_POST['Telefono'];
	$telefono=str_replace(" ", "", $telefono);
	$telefono=str_replace("-", "", $telefono);
	
	if ($_POST['Telefono']=="" || !preg_match($exp_tlf, $telefono) ){
		$errores['Telefono']="Teléfono incorrecto";$HayError=true;}
	
	if (!preg_match($exp_dni, $_POST['DNI'])){
		$errores['DNI']="DNI incorrecto";$HayError=true;}		
}

/**
 *
 * @param string $name Nombre del campo
 * @param array $opciones Opciones que tiene el select
 * 			clave array=valor option
 * 			valor array=texto option
 * @param string $valorDefecto Valor seleccionado
 * @return string
 */
function CreaSelect($name, $opciones, $valorDefecto='')
{
	$html="\n".'<select class="form-control" name="'.$name.'">';
	$html.='<option value=""></option>';
	foreach($opciones as $value=>$text)
	{
		if ($value==$valorDefecto)
			$select='selected="selected"';
		else
			$select="";
		$html.= "\n\t<option value=\"$value\" $select>$text</option>";
	}
	$html.="\n</select>";

	return $html;
}

/**
 * Muestra un paginador para una lista de elementos
 *
 * @param int $pag_actual
 * @param unknown $nPags
 * @param unknown $url
 */
function MuestraPaginador($pag_actual, $nPags, $url)
{
	// Mostramos paginador
	echo '<div>';
	echo '<div class="col-xs-12">';
	echo EnlaceAPagina($url, 1, '<button type="button" class="btn btn-primary">Inicio</button>');
	echo EnlaceAPagina($url, $pag_actual-1, '<button type="button" class="btn btn-info">Anterior</button>', $pag_actual>1);

	echo '&nbsp';
	echo EnlaceAPagina($url, $pag_actual+1, '<button type="button" class="btn btn-info">Siguiente</button>', $pag_actual<$nPags);

	echo EnlaceAPagina($url, $nPags, '<button type="button" class="btn btn-primary">Fin</button>');
	
	echo '<br>'; //Siguiente linea
	echo '<br>';
	for($pag=1; $pag<=$nPags; $pag++)
	{
	echo EnlaceAPagina($url, $pag, "<button type='button' class='btn btn-primary btn-sm'>$pag</button>", $pag_actual!=$pag);
	}
	echo "</div>";
}

	/**
	* Devuelve el texto de un enlace (etiqueta <a>) a la p�gina $url si el enlace est� activo,
	* en otro caso solo devuelve el texto
	*
	* @param string $url		URL de la p�gina que muestra la lista
	* @param int $pag			N� de p�gina al cual enlazamos
	* @param string $texto		Texto del enlace
	* @param bool $activo		Se muestra enlace (true) o no (false)
	* @return string
	*/
	function EnlaceAPagina($url, $pag, $texto, $activo=true)
	{
	if ($activo)
		return '  <a href="'.$url.'?pag='.$pag.'">'.$texto.'</a>  ';
				else
					return $texto;
}

