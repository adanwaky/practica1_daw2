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
	$exp_tlf= '/[0-9]{8}$/'; //TELEFONO	
	$exp_dni='/^[0-9]{8}[A-Z]$/'; //DNI
	
	if ($_POST['descripcion']=="") {
		$errores['descripcion']="Descripción vacío"; $HayError=true; }
	
	if ($_POST['nombre']==""){
		$errores['nombre']="Nombre vacío"; $HayError=true;}
		
		if ($_POST['apellidos']==""){
			$errores['apellidos']="Apellidos vacío"; $HayError=true;}
	
	if ($_POST['correo']=="" ||!filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL)){
		$errores['correo']="Error en el e-mail";$HayError=true;}
	
	if($_POST['fec-rea']<= date('m/d/Y')){
		$errores['fec-rea']="Fecha de realización menor o igual que hoy";$HayError=true;}
		
	if (!preg_match($exp_cp, $_POST['cp'])){
		$errores['cp']="Código postal incorrecto"; $HayError=true;}
	
	/*if ($_POST['provincia']==""){
		$errores['provincia']="Provincia vacía"; $HayError=true;}*/
	
	$telefono=$_POST['tlf'];
	$telefono=str_replace(" ", "", $telefono);
	$telefono=str_replace("-", "", $telefono);
	
	if ($_POST['tlf']=="" || !preg_match($exp_tlf, $telefono) ){
		$errores['tlf']="Teléfono incorrecto";$HayError=true;}
	
	if (!preg_match($exp_dni, $_POST['dni'])){
		$errores['dni']="DNI incorrecto";$HayError=true;}
		
}

