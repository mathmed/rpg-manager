<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/* Controlador padrão de loguin do sistema */

	public function index(){
		/* carregando a view de login */
		$this->load->view('login');
	}
}
