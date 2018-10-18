<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* Model de login do sistema */
Class Model_login extends CI_Model{

    /* função para realizar login no sistema */
    public function auth($apelido = NULL, $senha = NULL){

        /* verifica se os parâmetros foram passados */
        if($apelido && $senha){

            /* iniciando a query */
            $this->db->where("apelido_usuario", $apelido);
            $this->db->where("senha_usuario", $senha);
            $this->db->limit(1);

            /* requisitando */
            $user = $this->db->get("usuario");

            /* verificando se algo foi retornado */
            if($user->result_array()){

                /* salvando dados na sessão */
                $this->session->set_userdata("user", $user->result_array());
                
                /* redirecinando */
                redirect("/home");

            }else{
                $this->session->set_flashdata('crud_auth', "<div class = 'alert alert-danger'>Usuário e/ou senha inválidos!</div>");
                redirect("/login");
            }

        }else{
            $this->session->set_flashdata('crud_auth', "<div class = 'alert alert-danger'>Erro ao efetuar login, certifique-se que preencheu todos os campos</div>");
            redirect("/login");
        }

    }

}


?>