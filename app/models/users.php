<?php
/*Incluimos el fichero de la clase*/
include_once INS.'bd_model.php';
include_once MOD.'users.php';

function ValidaUser($us, $tipo, $pass)
{
$bd=Db::getInstance();
	$sql = "SELECT idusers as id FROM `users` where `nombre`='$us' and tipo='$tipo' and password='$pass'";
	$bd->Consulta($sql);
	$id = $bd->LeeRegistro();

	if ($id!="")
	{
		$_SESSION['id']=$id['id'];
		return true;
	}
	else
	{
		return false;
	}	
}

function Usuarios()
{
	
	/*Creamos la instancia del objeto. Ya estamos conectados*/
	$bd = Db::getInstance();

	/*Creamos una query sencilla*/
	$sql = "SELECT idusers as id, nombre as nom, tipo as tipo FROM users";

	/*Ejecutamos la query*/
	$bd->Consulta($sql);

	// Creamos el array donde se guardarán las tareas
	$usuarios = Array();

	/*Realizamos un bucle para ir obteniendo los resultados*/
	while ($reg = $bd->LeeRegistro())
	{
		$usuarios[$reg['id']] = Array(
				'idusers'=>$reg['id'],
				'nombre'=>$reg['nom'], 
				'tipo'=>$reg['tipo']);
	}
	return $usuarios;
}

function UserAdd($registros)
{
	$bd = Db::getInstance();
	
	$bd->Insertar('users', $registros);
}

function ExisteUser($id)
{
	$bd=Db::getInstance();
	$sql = "SELECT count(*) as total FROM `jardines`.`users` WHERE `idusers` = $id";
	$bd->Consulta($sql);
	$cont = $bd->LeeRegistro();
	
	if ($cont['total']!=0)
	{
		return true;
	}
	else
	{
		return false;
	}
}

function DatosUser($iduser)
{
	/*Creamos la instancia del objeto. Ya estamos conectados*/
	$bd = Db::getInstance();
	
	/*Creamos una query sencilla*/
	$sql = "SELECT * FROM `users` WHERE idusers=$iduser";
	
	/*Ejecutamos la query*/
	$bd->Consulta($sql);
	
	// Creamos el array donde se guardarán las tareas
	$Users = Array();
	
	/*Realizamos un bucle para ir obteniendo los resultados*/
	while ($reg = $bd->LeeRegistro())
	{
		$Users = $reg;
	}
	return $Users;
}
function ActualizaUser($registro, $id)
{
	/*Creamos la instancia del objeto. Ya estamos conectados*/
	$bd = Db::getInstance();
	$bd->Actualizar('users', $registro,'idusers', $id);
}

function DevuelveContraseña($iduser)
{
	/*Creamos la instancia del objeto. Ya estamos conectados*/
	$bd = Db::getInstance();
	
	/*Creamos una query sencilla*/
	$sql = "SELECT password as pass FROM `users` where idusers=$iduser";
	
	/*Ejecutamos la query*/
	$bd->Consulta($sql);
	$reg = $bd->LeeRegistro();
	
	$contraseña = $reg['pass'];
	
	return $contraseña;
}

function BorraUser($iduser)
{
	/*Creamos la instancia del objeto. Ya estamos conectados*/
	$bd = Db::getInstance();
	$bd->Borrar('users', 'idusers', $iduser);
	
}
function CoincideUser($nombre, $tipo)
{
	$bd=Db::getInstance();
	$sql = "SELECT count(*) as total FROM `jardines`.`users` WHERE `nombre`='$nombre' and tipo='$tipo'";
	$bd->Consulta($sql);
	$cont = $bd->LeeRegistro();
	
	if ($cont['total']!=0)
	{
		return true;
	}
	else
	{
		return false;
	}
}