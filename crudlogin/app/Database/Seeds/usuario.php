<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Usuario extends Seeder
{
	public function run()
	{
		$nombre = "Mario";
		$ape_pat ="Medina";
		$correo = "ing.mmg.itt@gmail.com";
		$tipo = "admin";
		$usuario = "GibsonVDC";
		$password = password_hash("MuroSolido", PASSWORD_DEFAULT);

		$data = [
						'nombre' => $nombre,
						'apellido_paterno' => $ape_pat,
						'email' => $correo,
						'tipo' => $tipo,
                        'usuario' => $usuario,
                        'password'  => $password
                ];

        $this->db->table('t_usuarios')->insert($data);
	}
}
