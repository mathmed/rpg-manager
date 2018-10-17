<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sessoes extends CI_Controller {
	/* Controlador da página de sessões */

	public function __construct(){

		/* carregando o model de sessão */
		parent::__construct();
		$this->load->model("model_sessao", "sessao");
	}

	public function index($id = NULL){

		/* verificando se foi passado o parâmetro */
		if($id){

			/* carregando as sessões já cadastradas no banco de dados */
			$data['sessoes'] = $this->sessao->getAllSessoes();

			/* dados que serão passados como parâmetro */
			/* enviando como parâmetro a cor da ul */
			$data['cor_ul_sessao'] = 'ul-marcada';

			/* carregando a view de sessões e base */
			$this->load->view("base_campanha", $data);
			$this->load->view('sessoes', $data);
		}
	}
    
}
