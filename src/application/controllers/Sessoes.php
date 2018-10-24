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
	public function index(){
		/* redirecionando para a página 1 */
		redirect("/sessoes/pag/1");
	}

	/* função para mostrar a página de uma sessão */
	public function show($id = NULL){
		
		/* verificando se o usuário está logado */
		if(!$this->session->has_userdata("user")) redirect("/login");
		
		/* verificando se foi passado um id */
		if(!$id) redirect("/sessoes");

		/* recuperando a sessão */
		$data['sessao'] = $this->sessao->getSessaoByID($id)[0];
		$data['cor_ul_sessao'] = 'ul-marcada';

		/* carregando a view de sessões e base */
		$this->load->view("base_campanha", $data);
		$this->load->view('sessao', $data);
	}

	/* função para adicionar uma nova sessão no sistema ou att uma existente */
	public function add(){
		
		/* verificando se o usuário está logado */
		if(!$this->session->has_userdata("user"))
			redirect("/login");

		/* verifica se a requisição é para adicionar ou atualizar uma sessão */
		if($this->input->post("tipo") == "add"){
			/* chamando a função para adicionar uma nova sessão */
			$this->sessao->addSessao(
				$this->input->post("data_sessao"),
				$this->input->post("descricao_sessao"),
				$this->input->post("nome_sessao")
			);

			redirect("/sessoes");
		}

		else{
			/* chamando a função para atualizar uma sessão */
			$this->sessao->attSessao(
				$this->input->post("id_sessao"),
				$this->input->post("data_sessao"),
				$this->input->post("descricao_sessao"),
				$this->input->post("nome_sessao")
			);

			redirect("/sessoes/".$this->input->post('id_sessao'));

		}

	}

	/* função para deletar uma sessão do sistema */
	public function del(){

		/* verificando se o usuário está logado */
		if(!$this->session->has_userdata("user")) redirect("/login");

		/* chamando a função para deletar */
		$this->sessao->delSessao(
			$this->input->post("id_sessao")
		);

		/* redirecinando */
		redirect("/sessoes");

	}

	/* função para controlar a paginação */
	public function pag($pagina = NULL){

		/* verificando se o usuário está logado */
		if(!$this->session->has_userdata("user"))
		redirect("/login");

		if(!$pagina) $pagina = 0;

		/* definindo o número de registros em cada página */
		$total_reg = 3;
		$items_pagina = $pagina * $total_reg;
		
		/* não permitindo que volte à página anterior a 1 */
		if($pagina <= $total_reg) $data['btnA'] = 'disabled';
		else $data['btnA'] = "";


		/* verificando se foi passado o parâmetro */
		if($this->session->has_userdata("id_campanha")){

			/* verificando quantidade de registros */
			$tr = count($this->sessao->getAllSessoes($this->session->has_userdata("id_campanha"), 1, 1000000));

			/* carregando as sessões já cadastradas no banco de dados */
			$data['sessoes'] = $this->sessao->getAllSessoes($this->session->has_userdata("id_campanha"), $items_pagina, $total_reg);

			$data['cor_ul_sessao'] = 'ul-marcada';
			$data['pagina'] = $pagina;
			$data['reg_por_pag'] = $total_reg;
			$data['tr'] = $tr;

			if($tr < $total_reg) $data['btnA'] = 'disabled';
			else $data['btnA'] = '';
			
			/* carregando a view de sessões e base */
			$this->load->view("base_campanha", $data);
			$this->load->view('sessoes', $data);
		}


	}
    
}
