<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* Model de sessões do sistema */
Class Model_sessao extends CI_Model{

    /* função para criar uma nova sessão */
    public function addSessao($data = NULL, $descricao = NULL, $nome = NULL){
        
        echo $data;
        echo $descricao;
        echo $nome;
    }

    /* função para deletar uma sessão */
    public function delSessao(){
        echo "teste";
    }

    /* função para atualizar uma sessão */
    public function attSessao(){
        echo "teste";
    }

    /* função para selecionar uma sessão específica do bd */
    public function getSessao(){
        
    }

    /* função para recuperar todas as sessões do bd */
    public function getAllSessoes(){

        /* fazendo requisição */
        $sessoes = $this->db->get("sessao");

        /* retornando resultado */
        return $sessoes->result_array();
    }   

}


?>