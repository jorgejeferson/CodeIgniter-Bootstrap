<?php if (!defined('BASEPATH')) die();
class Esporte extends Main_Controller {

   public function index() {
      $this->load->view('include/header');
		$this->load->view('esporte');
      $this->load->view('include/footer');
	}
   public function detalhes() {
      $this->load->view('include/header');
      $this->load->view('detalhes-baba');
      $this->load->view('include/footer');
   }

   public function acessar() {
      $this->load->view('include/header');
      $this->load->view('templates/login');
      $this->load->view('include/footer');
   }

   public function rodada() {
      $this->load->view('include/header');
      $this->load->view('dados-da-rodada');
      $this->load->view('include/footer');
   }

}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
