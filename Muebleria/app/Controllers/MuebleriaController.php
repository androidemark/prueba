<?php namespace App\Controllers;
	
	use App\Models\MuebleriaModel;

class MuebleriaController extends BaseController
{
	public function agregarMuebles() {

		$data = array("nombre" => $_POST['mueble'],
					  "tipo" => $_POST['tipo'],
					  "costov" => $_POST['costov'],
					  "costoc" => $_POST['costoc']
					);
		$model =  new MuebleriaModel();
		echo $exito = $model->agregarMueble($data);
	}

	public function obtenerTodosLosMuebles(){
		$model =  new MuebleriaModel();
		$datos = $model->obtenerTodosLosMueblesModel();

		echo json_encode($datos);
	}

	public function eliminaMueble(){
		$model =  new MuebleriaModel();
		$datos = array("id_mueble" => $_POST['idMueble']);
		echo $model->eliminaMueble($datos);

	}

	public function obtenerDatosUpdate() {
		$model =  new MuebleriaModel();
		$data = array('id_mueble' => $_POST['idMueble']);
		echo $model->obtenerDatosUpdate($data);
	}

	public function actualizarMueble() {
		$model =  new MuebleriaModel();
		$data = array('id_mueble' => $_POST['idMueble'],
					  'nombre' => $_POST['muebleu'],
					  'tipo' => $_POST['tipou'],
					  'costov' => $_POST['costovu'],
					  'costoc' => $_POST['costocu']
					);
		echo $model->actualizarMueble($data);
	}	
	//--------------------------------------------------------------------

}
