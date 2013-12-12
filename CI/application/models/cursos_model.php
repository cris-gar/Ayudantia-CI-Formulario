<?php

class Cursos_model extends CI_Model {

    function __construct()
	{
		parent::__construct();
	}

	public function getCursos()
	{
		$query=$this->db
		->select("c.curso,a.nombre,a.apellido")
		->from("cursos as c")
		->join('alumno as a', 'a.idalumno = c.alumno_idalumno','inner')
		->group_by(array("a.idalumno", "c.idcurso"))
		->order_by("c.curso","asc")
		->get();
		return $query->result();
	}
        
        public function agregar($datos = array()) {
        $this->db->insert("cursos", $datos);
        return true;
    }

}
