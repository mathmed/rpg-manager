<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/* Controlador padrão de loguin do sistema */

	public function index(){
		
		/* Lógica de programação */

		/************************/

		/* carregando a view da home */
		$this->load->view("base");
		$this->load->view("home");

	}

}
