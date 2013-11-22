<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Formulario extends CI_Controller {

	public function index(){
		$this->load->view('formulariohtml');
	}

	public function form(){
		if($this->input->post()){

			$formulario = array(
				'nombre' => $this->input->post('nombre',true),
				'apellido' => $this->input->post('apellido',true),
				'correo' => $this->input->post('email',true),
				);
			$test = $this->Formulario_model->agregar($formulario);
		}
		$this->load->view('formulariophp');
	}

	
}
