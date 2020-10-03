<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

	<script src="librerias/datatable/jquery.dataTables.min.js"></script>

 	<script src="librerias/datatable/dataTables.bootstrap4.min.js"></script>

 	<link rel="stylesheet" type="text/css" href="librerias/datatable/bootstrap.css">



<link rel="stylesheet" type="text/css" href="librerias/datatable/dataTables.bootstrap4.min.css">

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="librerias/fontawesome/css/all.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Curso de php Unidad 1</h1>
				<div id="TablaCrudLoad"> </div>
			</div>
		</div>
	</div>
	<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="modalInsertar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">	Agregar nueva Persona</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <label>Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control">
        <label>Apellidos</label>
        <input type="text" name="apellidos" id="apellidos" class="form-control">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
</body>
	<script type="text/javascript">
		$(document).ready(function(){
			//funcion load jquery
			//primero agregamos el id de la seccion se cargara el archivo
			$('#TablaCrudLoad').load("Vista/TablaCrud.php")
		});
	</script>
</html>