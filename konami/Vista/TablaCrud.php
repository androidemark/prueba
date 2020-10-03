
<?php
	require_once "../clases/Conexion.php";
	$con = new Conectar();
	$conexion = $con->conexion();
	$sql = "SELECT id_videojuego,
					nombre,
					tipo,
					fechaLanzamiento,
					descripcion
			FROM t_videojuegos";
	$result = mysqli_query($conexion, $sql);  
?>
<button class="btn btn-primary" data-toggle="modal" data-target="#modalInsertar">
	
	<span class="fas fa-user-plus">Agregar nuevo</span>
</button>
<hr>
<table class="table table-hover" id="tablaDatos">
	<thead>
		<tr>
			<td>Id persona</td>
			<td>Nombre</td>
			<td>Tipo</td>
			<td>Fecha de Lanzamiento</td>
			<td>Descripcion</td>
			<td>Editar</td>
			<td>Elimininar</td>
		</tr>
	</thead>
	<tbody>
		<?php
		while($ver = mysqli_fetch_array($result)):
	 ?>
		<tr>
			<td><?php echo $ver['id_videojuego'] ?></td>
			<td><?php echo $ver['nombre'] ?></td>
			<td><?php echo $ver['tipo'] ?></td>
			<td><?php echo $ver['fechaLanzamiento'] ?></td>
			<td><?php echo $ver['descripcion'] ?></td>
			<td>
				<button class="btn btn-warning">
					<span class="fas fa-user-edit"></span>
				</button>
			</td>
			<td>
				<button class="btn btn-danger">
					<span class="fas fa-user-times"></span>
				</button>
			</td>
		</tr>
		<?php
			endwhile; 
		 ?>
	</tbody>
</table>
<script type="text/javascript">
		$(document).ready(function(){
 			$('#tablaDatos').DataTable();
		});
		//function mostrarTabla(){
			//$.ajax({
				//type:"POST",
				//url:"procesos/mostrarDatos.php",
				//success:function(resultado) {

			//}
			//});
 		//}
</script>
