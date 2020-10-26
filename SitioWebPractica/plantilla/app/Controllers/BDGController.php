<?php namespace App\Controllers;

class BDGController extends BaseController
{
	public function index()
	{
		$vistas = view('Plantilla2/header').
				  view('Plantilla2/menu').
				  view('BDG/Index').
				  view('Plantilla2/footer');

		return $vistas;
	}

	public function historia()
	{
		$vistas = view('Plantilla2/header').
				  view('Plantilla2/menu').
				  view('BDG/Historia').
				  view('Plantilla2/footer');

		return $vistas;
    }
    
    public function registro()
	{
		$vistas = view('Plantilla2/header').
				  view('Plantilla2/menu').
				  view('BDG/Registro').
				  view('Plantilla2/footer');

		return $vistas;
    }
    
    public function CopaOro()
	{
		$vistas = view('Plantilla2/header').
				  view('Plantilla2/menu').
				  view('BDG/CopaOro').
				  view('Plantilla2/footer');

		return $vistas;
    }
    
    public function BDGLeones()
	{
		$vistas = view('Plantilla2/header').
				  view('Plantilla2/menu').
				  view('BDG/BDGL').
				  view('Plantilla2/footer');

		return $vistas;
	}
    
    public function LinajeAzteca()
	{
		$vistas = view('Plantilla2/header').
				  view('Plantilla2/menu').
				  view('BDG/LinajeAzteca').
				  view('Plantilla2/footer');

		return $vistas;
	}
	//--------------------------------------------------------------------

}