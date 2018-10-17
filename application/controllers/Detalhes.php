<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detalhes extends CI_Controller {

	/* Controlador da página detalhes sistema */

	public function index(){
		
		/* dados que serão passados como parâmetro */
        /* enviando como parâmetro a cor da ul */
		$data['cor_ul_inicio'] = 'ul-marcada';
		
		/* carregando a view da home */
		$this->load->view("base", $data);
		$this->load->view("home");

	}
}
