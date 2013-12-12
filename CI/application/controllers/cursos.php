<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cursos extends CI_Controller {

    public function index() {
        
        $query = $this->Cursos_model->getCursos();
        $this->load->view('cursos/index',  compact("query"));
    }

    public function agregar() {
        /*if ($this->input->post()) {
            if ($this->form_validation->run('formualario')) {

                $formulario = array(
                    'nombre' => $this->input->post('nombre', true),
                    'apellido' => $this->input->post('apellido', true),
                    'correo' => $this->input->post('email', true),
                );
                $test = $this->Formulario_model->agregar($formulario);
            }
        }*/
        $query = $this->Formulario_model->mostrar();
        $this->load->view('cursos/agregar',  compact("query"));
    }

}
