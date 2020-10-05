<?php
	require_once "../clases/Conexion.php";
	require_once "../clases/Crud.php";
	$obj= new crud();

	$datos=array(
		$_POST['nom'],
		$_POST['tip'],
		$_POST['fecha'],
		$_POST['desc']
	);
	echo $obj->agregar($datos);
	
?>