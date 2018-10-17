<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/* Controlador padrão da página home do sistema */

	public function index(){
		
		/* dados que serão passados como parâmetro */
        /* enviando como parâmetro a cor da ul */
		$data['cor_ul_inicio'] = 'ul-marcada';
		
		/* carregando a view da home */
		$this->load->view("base", $data);
		$this->load->view("home");

	}

}
