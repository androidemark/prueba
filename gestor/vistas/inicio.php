<?php 
session_start();

if (isset($_SESSION['usuario'])) {
	include "header.php";
	?>

	<div class="container">
		<div class="row">
			<div class="col-sm-12" style="text-align: center;">
				<div class="jumbotron">
					<h1 class="display-4">Unidad 5</h1>
					<p class="lead">Desarrollado por: Mario Medina Garcia - 15106657</p>
					<hr class="my-4">
					<p><img src="../img/logo.png" class="img-thumbnail" width="300px" /></p>
				</div>


			</div>
		</div>
	</div>

	<?php
	include "footer.php"; 
} else {
	header("location:../index.php");
}
?>