<?php

class Formulario_model extends CI_Model {

    public function agregar($datos = array()) {
        $this->db->insert("alumno", $datos);
        return true;
    }

    public function mostrar() {
        $query = $this->db
                ->select("*")
                ->from('alumno')
                ->get();
        return $query->result();
    }

}
