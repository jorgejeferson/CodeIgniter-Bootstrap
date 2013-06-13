<?php if (!defined('BASEPATH')) die();
class Frontpage extends Main_Controller {

   public function index() {
      	$this->load->view('include/header');
      	$this->load->view('templates/form');
      	$this->load->view('templates/login');
      	$this->load->view('frontpage');
      	$this->load->view('include/footer');
	}

	public function esporte(){
		$this->load->view('esporte');
	}
}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
