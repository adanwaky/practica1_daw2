<?php
/*Incluimos el fichero de la clase*/
include_once 'bd_model.php';

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
function InsertarRegistro($registros)
{
	/*Creamos la instancia del objeto. Ya estamos conectados*/
	$bd = Db::getInstance();
	
	$bd->Insertar('tarea', $registros);
}

function ActualizarRegistro($registro, $id)
{
	/*Creamos la instancia del objeto. Ya estamos conectados*/
	$bd = Db::getInstance();
	$bd->Actualizar('tarea', $registro, $id);
}

function BorrarRegistro($idTarea)
{
	/*Creamos la instancia del objeto. Ya estamos conectados*/
	$bd = Db::getInstance();
	
	$bd->Borrar('tarea', $idTarea);
}

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
