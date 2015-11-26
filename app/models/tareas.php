<?php

/*Incluimos el fichero de la clase*/
include_once INS.'bd_model.php'; 

/**
 * Devuelve el número de registros en la base de datos
 * @return Ambigous <multitype:, NULL>
 */
function ContarRegistros()
{
	$bd = Db::getInstance();	
	$tabla='tarea';
	$sql = "select count(*) as total from $tabla";
	$bd->Consulta($sql);
	
	//Creamos el array donde se guardarán las tareas
	$numero = Array();
	
	/*Realizamos un bucle para ir obteniendo los resultados*/
	while ($reg = $bd->LeeRegistro())
	{
		$numero = $reg;
	}
	return $numero;
}

/**
 * Inserta un registro en la base de datos
 * @param unknown $registros
 */
function InsertarRegistro($registros)
{
	/*Creamos la instancia del objeto. Ya estamos conectados*/
	$bd = Db::getInstance();
	
	$bd->Insertar('tarea', $registros);
}

/**
 * Actualiza los datos de un registro en la base de datos
 * @param unknown $registro
 * @param unknown $id
 */
function ActualizarRegistro($registro, $id)
{
	/*Creamos la instancia del objeto. Ya estamos conectados*/
	$bd = Db::getInstance();
	$bd->Actualizar('tarea', $registro,'idTarea', $id);
}

/**
 * Borra un registro en la base de datos
 * @param unknown $idTarea
 */
function BorrarRegistro($idTarea)
{
	/*Creamos la instancia del objeto. Ya estamos conectados*/
	$bd = Db::getInstance();
	
	$bd->Borrar('tarea', `idTarea`, $idTarea);
}

/**
 * Devuelve una serie de datos de cada tarea
 * @param unknown $nReg
 * @param unknown $nElementosxPagina
 * @return multitype:multitype:unknown Ambigous <>
 */
function DatosPaginacion(& $nReg,& $nElementosxPagina)
{
	/*Creamos la instancia del objeto. Ya estamos conectados*/
	$bd = Db::getInstance();

	/*Creamos una query sencilla*/
	$sql = "SELECT idTarea as id, Nombre as nom, Telefono as tlf, 
				Direccion as dir, Poblacion as pobl, Estado as est, 
					Fecha_creacion as fec_cre, Fecha_realizacion as fec_rea,
					 idOperario as op FROM `tarea` LIMIT $nReg, $nElementosxPagina";

	/*Ejecutamos la query*/
	$bd->Consulta($sql);

	// Creamos el array donde se guardarán las tareas
	$Tareas = Array();

	/*Realizamos un bucle para ir obteniendo los resultados*/
	while ($reg = $bd->LeeRegistro())
	{
		$Tareas[$reg['id']] = Array(
				'idTarea'=>$reg['id'],
				'Nombre'=>$reg['nom'], 
				'Telefono'=>$reg['tlf'], 
				'Direccion'=>$reg['dir'],
				'Poblacion'=> $reg['pobl'],
				'Estado'=>$reg['est'],
				'Fecha_creacion'=>$reg['fec_cre'],
				'Fecha_realizacion'=>$reg['fec_rea'],
				'Operario'=> $reg['op'] );
	}
	return $Tareas;
}

/**
 * Devuelve todos los datos de una tarea pasada por parámetro
 * @param unknown $idTarea
 * @return Ambigous <multitype:, NULL>
 */
function VistaDetallada($idTarea)
{
	/*Creamos la instancia del objeto. Ya estamos conectados*/
	$bd = Db::getInstance();

	/*Creamos una query sencilla*/
	$sql = "SELECT * FROM `tarea` WHERE idTarea=$idTarea";

	/*Ejecutamos la query*/
	$bd->Consulta($sql);

	// Creamos el array donde se guardarán las tareas
	$Tareas = Array();

	/*Realizamos un bucle para ir obteniendo los resultados*/
	while ($reg = $bd->LeeRegistro())
	{
		$Tareas = $reg;
	}
	return $Tareas;
}

/**
 * Devuelve una serie de datos de una tarea pasada por parámetro
 * @param unknown $idTarea
 * @return multitype:multitype:unknown Ambigous <>
 */
function BuscarTarea($idTarea)
	{
		/*Creamos la instancia del objeto. Ya estamos conectados*/
		$bd = Db::getInstance();
		
		/*Creamos una query sencilla*/
		$sql = "SELECT idTarea as id, Nombre as nom, Telefono as tlf, 
				Direccion as dir, Poblacion as pobl, Estado as est, 
					Fecha_creacion as fec_cre, Fecha_realizacion as fec_rea,
					idOperario as op FROM `tarea` WHERE idTarea=$idTarea";

		/*Ejecutamos la query*/
		$bd->Consulta($sql);
	
		// Creamos el array donde se guardarán las tareas
		$Tarea = Array();
	
		/*Realizamos un bucle para ir obteniendo los resultados*/
		while ($reg = $bd->LeeRegistro())
		{
			$Tarea[$reg['id']] = Array(
					'idTarea'=>$reg['id'],
					'Nombre'=>$reg['nom'], 
					'Telefono'=>$reg['tlf'], 
					'Direccion'=>$reg['dir'],
					'Poblacion'=> $reg['pobl'],
					'Estado'=>$reg['est'],
					'Fecha_creacion'=>$reg['fec_cre'],
					'Fecha_realizacion'=>$reg['fec_rea'],
					'Operario'=> $reg['op'] );
		}
		return $Tarea;
	}
	
/**
 * Devuelve una serie de datos de las tareas que cumplan una serie de condiciones pasadas por parámetros
 * @param unknown $nReg
 * @param unknown $nElementosxPagina
 * @param unknown $operacion
 * @param unknown $fecha
 * @param unknown $estado
 * @param unknown $nombre
 * @return multitype:multitype:unknown Ambigous <>
 */	
function BuscarTareas(& $nReg,& $nElementosxPagina, $operacion, $fecha, $estado, $nombre )
	{
		/*Creamos la instancia del objeto. Ya estamos conectados*/
		$bd = Db::getInstance();
	
		/*Creamos una query sencilla*/
		$sql = "SELECT idTarea as id, Nombre as nom, Telefono as tlf,
		Direccion as dir, Poblacion as pobl, Estado as est,
		Fecha_creacion as fec_cre, Fecha_realizacion as fec_rea,
		idOperario as op FROM `tarea` WHERE 
		Fecha_realizacion $operacion '$fecha%' and
		Estado like '$estado%' and Nombre like '$nombre%'
		LIMIT $nReg, $nElementosxPagina ";
		
		/*Ejecutamos la query*/
		$bd->Consulta($sql);
	
		// Creamos el array donde se guardarán las tareas
		$Tareas = Array();
	
		/*Realizamos un bucle para ir obteniendo los resultados*/
		while ($reg = $bd->LeeRegistro())
		{
			$Tareas[$reg['id']] = Array(
					'idTarea'=>$reg['id'],
					'Nombre'=>$reg['nom'],
					'Telefono'=>$reg['tlf'],
					'Direccion'=>$reg['dir'],
					'Poblacion'=> $reg['pobl'],
					'Estado'=>$reg['est'],
					'Fecha_creacion'=>$reg['fec_cre'],
					'Fecha_realizacion'=>$reg['fec_rea'],
					'Operario'=> $reg['op'] );
		}
		return $Tareas;
}

/**
 * Devuelve true o false dependiendo de si existe la tarea en la base de datos o no
 * @param unknown $id
 * @return boolean
 */
function ExisteTarea($id)
{
	$bd=Db::getInstance();
	$sql = "SELECT count(*) as total FROM `jardines`.`tarea` WHERE `idTarea` = $id";
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
