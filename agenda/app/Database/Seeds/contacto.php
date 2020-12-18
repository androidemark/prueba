<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Contacto extends Seeder
{
	public function run()
	{
		$nombre = "Mario";
		$paterno ="Medina";
		$materno ="Garcia";
		$telefono ="5537143059";
		$email ="ing.mmg.itt@gmail.com";
		$id_categoria = 1;

		$data = [
						'nombre' => $nombre,
						'paterno' => $paterno,
						'materno' => $materno,
						'telefono' => $telefono,
						'email' => $email,
						'id_categoria' => $id_categoria
                ];

		$this->db->table('t_contactos')->insert($data);
		
		$nombre2 = "Marco";
		$paterno2 ="Perez";
		$materno2 ="Madrigal";
		$telefono2 ="5511736554";
		$email2 ="Marco.18.itt@gmail.com";
		$id_categoria2 = 2;

		$data2 = [
						'nombre' => $nombre2,
						'paterno' => $paterno2,
						'materno' => $materno2,
						'telefono' => $telefono2,
						'email' => $email2,
						'id_categoria' => $id_categoria2
                ];

		$this->db->table('t_contactos')->insert($data2);
	}
}
