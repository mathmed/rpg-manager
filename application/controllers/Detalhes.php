<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detalhes extends CI_Controller {

	/* Controlador da página detalhes sistema */

	public function index($id = NULL){
		
		/* verifica se foi passado o parâmetro */
		if($id){

			/* salvando a ID da campanha na sessão */
			$this->session->set_userdata("id_campanha", $id);

			/* dados que serão passados como parâmetro */
			/* enviando como parâmetro a cor da ul */
			$data['cor_ul_inicio'] = 'ul-marcada';

			/* enviando id como parâmetro */
			$data['id'] = $id;
			
			/* carregando a view da home */
			$this->load->view("base_campanha", $data);
			$this->load->view("detalhes");
		}
	}
}