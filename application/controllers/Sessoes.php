<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sessoes extends CI_Controller {
	/* Controlador da página de sessões */
	
	public function __construct(){

		/* carregando o model de sessão */
		parent::__construct();
		$this->load->model("model_sessao", "sessao");
	}

	/* função padrão da página sessão */
	public function index($id = NULL){

		/* verificando se o usuário está logado */
		if(!$this->session->has_userdata("user"))
			redirect("/login");

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

	/* função para adicionar uma nova sessão no sistema ou att uma existente */
	public function add(){
		
		/* verificando se o usuário está logado */
		if(!$this->session->has_userdata("user"))
			redirect("/login");

		/* verifica se a requisição é para adicionar ou atualizar uma sessão */
		if($this->input->post("tipo") == "add")
			/* chamando a função para adicionar uma nova sessão */
			$this->sessao->addSessao(
				$this->input->post("data_sessao"),
				$this->input->post("descricao_sessao"),
				$this->input->post("nome_sessao")
			);

		else
			/* chamando a função para atualizar uma sessão */
			$this->sessao->attSessao();

		//redirect("/sessao");
	}
    
}
