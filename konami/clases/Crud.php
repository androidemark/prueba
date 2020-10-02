<?php
	require_once "Conexion.php";
	class Crud extends Conectar{
		public function mostrar() {
			$conexion = Conectar::conexion();
			$sql = "SELECT id_pesrsona,
							nombre,
							apellido
					FROM t_personas";
			$re
		}
	}

?>