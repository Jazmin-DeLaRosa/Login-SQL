<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class User extends Seeder
{
	public function run()
	{
		$usuario = "Jazmin";
		$password = password_hash("123", PASSWORD_DEFAULT);
		

		$data = [
                        'email' => $usuario,
                        'password' => $password
                ];

                // Using Query Builder
        $this->db->table('usuario')->insert($data);
	}
}
