<?php

namespace App\Controllers;

use App\Models\Users;

class Home extends BaseController
{
    public function index()
    {
        $mensaje = session('mensaje');
        return view('login', ["mensaje" => $mensaje]);
    }

    public function inicio()
    {
        $User = new Users();
        $datos = $User->listarNombres();

        $mensaje = session('mensaje');

        $data = [
            "datos" => $datos,
            "mensaje" => $mensaje
        ];

        return view('inicio', $data);
    }

    public function login()
    {

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $User = new Users();

        $userData = $User->obtenerUsuario(['email' => $email]);

        if (
            count($userData) > 0 &&
            password_verify($password, $userData[0]['password'])
        ) {

            $data = [
                "usuario" => $userData[0]['email']
            ];

            $session = session();
            $session->set($data);

            return redirect()->to(base_url('/inicio'))->with('mensaje', '1');
        } else {
            return redirect()->to(base_url('/'))->with('mensaje', '0');
        }
    }

    public function list()
    {
        $User = new Users();
        $datos = $User->listarNombres();

        $mensaje = session('mensaje');

        $data = [
            "datos" => $datos,
            "mensaje" => $mensaje
        ];

        return view('list', $data);
    }



    public function crear() {
		$datos = [
					"nombre" => $_POST['nombre'],
					"especie" => $_POST['especie'],
					"alimentacion" => $_POST['alimentacion'],
                    "periodo" => $_POST['periodo']
				];
		$Crud = new Users();
		$respuesta = $Crud->insertar($datos);

		if ($respuesta > 0) {
			return redirect()->to(base_url().'/list')->with('mensaje','1');
		} else {
			return redirect()->to(base_url().'/list')->with('mensaje','0');
		}
        

	}

    public function actualizar()
    {
        $datos = [
            "nombre" => $_POST['nombre'],
            "especie" => $_POST['especie'],
            "alimentacion" => $_POST['alimentacion'],
            "periodo" => $_POST['periodo']
        ];
        $id = $_POST['id'];

        $User = new Users();

        $respuesta = $User->actualizar($datos, $id);

        if ($respuesta) {
            return redirect()->to(base_url() . '/list')->with('mensaje', '2');
        } else {
            return redirect()->to(base_url() . '/list')->with('mensaje', '3');
        }
    }

    public function obtenerNombre($id)
    {
        $data = ["id" => $id];
        $User = new Users();
        $respuesta = $User->obtenerNombre($data);

        $datos = ["datos" => $respuesta];

        return view('update', $datos);
    }

    public function eliminar($id)
    {
        $User = new Users();
        $data = ["id" => $id];

        $respuesta = $User->eliminar($data);

        if ($respuesta) {
            return redirect()->to(base_url() . '/list')->with('mensaje', '4');
        } else {
            return redirect()->to(base_url() . '/list')->with('mensaje', '5');
        }
    }

    public function salir()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/'));
    }
}
