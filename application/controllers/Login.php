<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/* Controlador padrão de loguin do sistema */

	public function index(){
		/* carregando a view de login */
		$this->load->view('login');
	}

	/* função para chamar o model e tentar fazer login no sistema */
	public function logar(){
		
		/* carregando o model de login */
		$this->load->model("model_login", "login");

		/* chamando a função de autenticação */
		$this->login->auth(
			$this->input->post("apelido_usuario"),
			$this->input->post("senha_usuario")
		);
		
	}
}
