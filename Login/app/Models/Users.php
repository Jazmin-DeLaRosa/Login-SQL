<?php

namespace App\Models;

use CodeIgniter\Model;

class Users extends Model
{
    public function obtenerUsuario($data)
    {
        $User = $this->db->table('usuario');
        $User->where($data);
        return $User->get()->getResultArray();
    }
    public function listarNombres() {
        $Nombres = $this->db->query("SELECT * FROM personajes");
        return $Nombres->getResult();
    }
    public function insertar($datos) {
        $Nombres = $this->db->table('personajes');
        $Nombres->insert($datos);

        return $this->db->insertID(); 
    }

    public function obtenerNombre($data) {
        $Nombres =  $this->db->table('personajes');
        $Nombres->where($data);
        return $Nombres->get()->getResultArray();
    }

    public function actualizar($data, $id) {
        $Nombres = $this->db->table('personajes');
        $Nombres->set($data);
        $Nombres->where('id', $id);
        return $Nombres->update();
    }

    public function eliminar($data) {
        $Nombres = $this->db->table('personajes');
        $Nombres->where($data);
        return $Nombres->delete();
    }
}
