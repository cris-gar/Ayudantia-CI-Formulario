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

    public function getalumno($id) {

        $where = array(
            "idalumno" => $id
        );
        $query = $this->db
                ->select("*")
                ->from('alumno')
                ->where($where)
                ->get();
        return $query->row();
    }

    public function editar($datos = array(), $id) {
        $this->db->where('idalumno', $id);
        $this->db->update('alumno', $datos);
        return true;
    }

    public function delete($id) {
        $this->db->delete('alumno', array(
            'idalumno' => $id
        ));
        return true;
    }

}
