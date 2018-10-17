<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Campanha extends CI_Controller {

	public function __construct(){

		parent::__construct();

		/* carregando o model campanha */
		$this->load->model("model_campanha", "campanha");
	}

	/* Controlador padrão de loguin do sistema */
	public function index(){
		
		/* verifica se o usuário está logado */
		//if(!$this->session->has_userdata("adm")) redirect("/");

		/* carregando as campanhas cadastradas */
		$dados["campanhas"] = $this->campanha->getAllCampanhas();

		/* dados que serão passados como parâmetro */
        /* enviando como parâmetro a cor da ul */
		$data['cor_ul_campanhas'] = 'ul-marcada';

		/* carregando a view da home */
		$this->load->view("base", $data);
		$this->load->view("campanhas", $dados);

	}

	/* função para adicionar uma nova campanha no sistema ou att uma existente */
	public function add(){
		
		/* verifica se o usuário está logado */
		//if(!$this->session->has_userdata("adm")) redirect("/");

		/* verifica se a requisição é para adicionar ou atualizar uma campanha */
		
		if($this->input->post("tipo") == "add")
			/* chamando a função para adicionar uma nova campanha */
			$this->campanha->addCampanha(
				$this->input->post("nome_campanha"),
				$this->input->post("descricao_campanha")
			);

		else
			/* chamando a função para atualizar uma nova campanha */
			$this->campanha->attCampanha();

		redirect("/campanha");
	}

}
