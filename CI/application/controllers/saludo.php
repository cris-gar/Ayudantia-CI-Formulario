<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Saludo extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout('template1');
    }
	
	public function index()
	{
		$this->layout->view('Saludo');
	}

	public function pero($id=null){
		$saludo = "hola";
		$nombre = "juan";
		$this->load->view('pero',compact("saludo","nombre","id"));
	}
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */