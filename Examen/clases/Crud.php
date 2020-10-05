<?php 
 class crud {
 	public function agregar($datos) {
 		$obj= new conectar();
 		$conexion=$obj->conexion();
 		$sql="INSERT INTO t_videojuegos (nombre, tipo, fechaLanzamiento, descripcion)
 		values ('$datos[0]',
 		'$datos[1]',
 		'$datos[2]',
 		'$datos[3]')";
 		return mysqli_query($conexion, $sql);
 	}
 	public function obtenDatos($idjuego){
 		$obj= new conectar();
 		$conexion=$obj->conexion();

 		$sql="SELECT id_videojuego,
 		nombre,
 		tipo,
 		fechaLanzamiento,
 		descripcion
 		from t_videojuegos 
 		where id_videojuego='$idjuego'";
 		$result=mysqli_query($conexion,$sql);
 		$ver=mysqli_fetch_row($result);

 		$datos=array(
 			'id_videojuego' => $ver[0],
 			'Nombre' => $ver[1],
 			'Tipo' => $ver[2],
 			'Fecha_Lanzamiento' => $ver[3],
 			'Descripcion' => $ver[4]
 		);
 		return $datos;
 	}
 	public function actualizar($datos){
 		$obj= new conectar();
 		$conexion=$obj->conexion();

 		$sql="UPDATE t_videojuegos set nombre='$datos[0]',
 		tipo='$datos[1]',
 		fechaLanzamiento='$datos[2]',
 		descripcion='$datos[3]'
 		where id_videojuego='$datos[4]'";
 		return mysqli_query($conexion,$sql);
 	}

 	public function eliminar($idjuego){
 		$obj= new conectar();
 		$conexion=$obj->conexion();

 		$sql="DELETE from t_videojuegos where id_videojuego='$idjuego'";
 		return mysqli_query($conexion,$sql);
 	}

 }

?>