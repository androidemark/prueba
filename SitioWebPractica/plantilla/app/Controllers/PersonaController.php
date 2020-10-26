<?php namespace App\Controllers;

class PersonaController extends BaseController
{
	public function index()
	{
        $data = [
			"nombre" =>  "Mario Medina Garcia",
            "edad" => "23",
            "telefono" => "5537143059",
            "correo" => "ing.mmg.itt@gmail.com"
		];

		$vistas = view('Plantilla/header').
				  view('Plantilla/menu').
				  view('Persona/Index',$data).
				  view('Plantilla/footer');

		return $vistas;
	}

	public function prueba($dato)
	{
        echo $dato;
	}

	public function calculadora() {
		$vistas = view('Plantilla/header').
				  view('Plantilla/menu').
				  view('Funciones/Calculadora').
				  view('Plantilla/footer');
		return $vistas;
	}

	public function calcular() {
		$numero1=$_POST['valor1'];
		$numero2=$_POST['valor2'];
		$op=$_POST['op'];
		$R;

		if($op=="suma"){
			$R=$numero1+$numero2;
		}
		else if($op=="resta"){
			$R=$numero1-$numero2;
		}
		else if($op=="mult"){
			$R=$numero1*$numero2;
		}
		else if($op=="div"){
			if($numero2>0){
				$R=$numero1/$numero2;
			}
			else {
				$R="Error aritmético";
			}
		}
		$vistas = view('Plantilla/header').
				  view('Plantilla/menu').
				  view('Funciones/Calculadora').
				  '<tr>'.
					'Resultado = '.$R.
					'</tr>'.
				  view('Plantilla/footer');
		return $vistas;
	}
	
	//--------------------------------------------------------------------

}