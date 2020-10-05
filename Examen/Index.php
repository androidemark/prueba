<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <script src="Librerias/Data Tables/jquery.dataTables.min.js"></script>
  <script src="Librerias/Data Tables/dataTables.bootstrap4.min.js"></script>
  <link rel="stylesheet" type="text/css" href="Librerias/Data Tables/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="Librerias/Data Tables/dataTables.bootstrap4.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="Librerias/fontawesome-free-5.14.0-web/css/all.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="Librerias/alertify/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="Librerias/alertify/css/themes/bootstrap.css">
  <script src="Librerias/alertify/alertify.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Examen</h1>
				<div class="card text-left">
          <div class="card-header">
            Tabla de juegos
          </div>
          <div class="card-body">
            <div id="TablaCrudLoad"> </div>
          </div>
          <div class="card-footer text-muted">
            By Mario Medina Garcia
          </div>
        </div>
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
          <form id="frmnuevo">
            <label>Nombre</label>
            <input type="text" name="nom" id="nom" class="form-control">
            <label>Tipo</label>
            <input type="text" name="tip" id="tip" class="form-control">
            <label>Fecha de lanzamiento</label>
            <input type="date" name="fecha" id="fecha" class="form-control">
            <label>Descripcion</label>
            <input type="text" name="desc" id="desc" class="form-control">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" id="btnGuardar">Guardar</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Actualizar juego</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="frmnuevoU">
            <input type="text" hidden="" id="idjuego" name="idjuego">
            <label> Nombre </label>
            <input type="text" name="nombre1" id="nombre1" class="form-control input-sm">
            <label> Tipo </label>
            <input type="text" name="tipo1" id="tipo1" class="form-control input-sm">
            <label> Fecha </label>
            <input type="date" name="fecha2" id="fecha2" class="form-control input-sm" value="2018-07-22"
            min="2018-01-01" max="2018-12-31">
            <label> Descripción </label>
            <input type="text" name="descrip1" id="descrip1" class="form-control input-sm">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">
            <span class="fas fa-times-circle"></span> Cerrar
          </button>
          <button type="button" class="btn btn-warning" id="btnActualizar">
            <span class="fas fa-edit"></span> Actualizar
          </button>
        </div>
      </div>
    </div>
  </div>
</body>
<script type="text/Javascript">
  $(document).ready(function(){
    $('#btnGuardar').click(function(){
      datos=$('#frmnuevo').serialize();
      $.ajax({
        type:"POST",
        data:datos,
        url:"procesos/agregar.php",
        success:function(r){
          if(r==1){
            $('#frmnuevo')[0].reset();
            $('#TablaCrudLoad').load('Vista/TablaCrud.php');
            alertify.success("Agregado con exito ");
          }else{
            alertify.error("Fallo al agregar");
          }
        }
      });
    });
    $('#btnActualizar').click(function(){
      datos=$('#frmnuevoU').serialize();
      $.ajax({
        type:"POST",
        data:datos,
        url:"procesos/actualizar.php",
        success:function(r){
          if(r==1){
            $('#tablaCrudLoad').load('Vistas/tablaCrud.php');
            alertify.success("Actualizado con exito ");
          }else{
            alertify.error("Fallo al actualizar");
          }
        }
      });
    });
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
			$('#TablaCrudLoad').load("Vista/TablaCrud.php")
		});
  </script>
  <script type="text/javascript">
  function agregaFrmActualizar(idjuego){
    $.ajax({
      type:"POST",
      data:"idjuego=" + idjuego,
      url:"procesos/obtenDatos.php",
      success:function(r){
        console.log(r);
        datos=jQuery.parseJSON(r);
        $('#idjuego').val(datos['id_videojuego']);
        $('#nombre1').val(datos['Nombre']);
        $('#tipo1').val(datos['Tipo']);
        $('#fecha2').val(datos['Fecha_Lanzamiento']);
        $('#descrip1').val(datos['Descripcion']);
      }
    });
  }
  function eliminarDatos(idjuego){
    alertify.confirm('Eliminar un juego', '¿Seguro que desea eliminar?', function(){ 
      $.ajax({
        type:"POST",
        data:"idjuego=" + idjuego,
        url:"procesos/eliminar.php",
        success:function(r){
          if(r==1){
            $('#tablaCrudLoad').load('Vistas/tablaCrud.php');
            alertify.success("Eliminado con exito !");
          }else{
            alertify.error("No se pudo eliminar...");
          }
        }
      });
    }
    , function(){
    });
  }
</script>
  </html>