<?php
include("conexionBase.php");

function consultarSinWhere($tabla, $parametros='*'){
	$query="SELECT $parametros FROM $tabla";
	$resultado=pg_query($query);
	return $resultado;
}

function insertar($table,$param){
	$query="INSERT INTO $table
	VALUES (".$param.")
	";
	return	pg_query($query);

}	

function eliminar($table,$where){
	$query="DELETE FROM $table
	WHERE $where
	";
	return pg_query($query);
}


function eliminarTodo($table){
	$query="DELETE FROM $table
	";
	return pg_query($query);
}


function actualizar($table, $colum, $value, $where){
	$query="UPDATE $table
	SET $colum=$value
	WHERE $where
	";
	return pg_query($query);
}






?>