<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Formulario extends CI_Controller {

    public function index() {

        $query = $this->Formulario_model->mostrar();
        $this->load->view('formulariohtml', compact("query"));
    }

    public function form() {
        if ($this->input->post()) {
            if ($this->form_validation->run('formualario')) {

                $formulario = array(
                    'nombre' => $this->input->post('nombre', true),
                    'apellido' => $this->input->post('apellido', true),
                    'correo' => $this->input->post('email', true),
                );
                $test = $this->Formulario_model->agregar($formulario);
            }
        }
        $this->load->view('formulariophp');
    }

    public function editar($id = null) {
        if ($this->input->post()) {
            if ($this->form_validation->run('formualario')) {

                $formulario = array(
                    'nombre' => $this->input->post('nombre', true),
                    'apellido' => $this->input->post('apellido', true),
                    'correo' => $this->input->post('email', true),
                );
                $guardar = $this->Formulario_model->editar($formulario, $id);
                if ($guardar) {

                    echo "si";
                } else {

                    echo 'no';
                }
            }
        }
        $query = $this->Formulario_model->getalumno($id);
        $this->load->view('editar', compact("query", "id"));
    }
    
     public function eliminar($id = null)
    {
        if (! $id) {
            show_404();
        }
        $eliminar = $this->Formulario_model->delete($id);
        if ($eliminar == true) {
            echo 'eliminado';
        } else {
            echo 'no eliminado';
        }
    }

}
