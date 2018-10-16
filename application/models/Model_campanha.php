<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* Model de campanhas do sistema */
Class Model_campanha extends CI_Model{

    /* função para criar uma nova campanha */
    public function addCampanha($nome = NULL, $descricao = NULL){
        
        /* verificando se os campos foram preenchidos */
        if($nome && $descricao){

            /* verificando se existe uma campanha com esse nome */
            if(!$this->getCampanha($nome)){

                /* criando array de inserção */
                $dados = [
                    "nome_campanha" => $nome,
                    "descricao_campanha" => $descricao,
                    "data_criacao" => date("Y-m-d"),
                    "usuario_id_usuario" => 1
                ];

                /* tentando cadastrar a campanha */
                if($this->db->insert("campanha", $dados))
                    $this->session->set_flashdata('crud_campanha', "<div class = 'alert alert-success'>Campanha cadastrada com sucesso!</div>");
                else
                    $this->session->set_flashdata('crud_campanha', "<div class = 'alert alert-danger'>Erro ao cadastrar campanha, certifique sua conexão com a internet.</div>");

            }else{
                $this->session->set_flashdata('crud_campanha', "<div class = 'alert alert-danger'>Erro ao cadastrar campanha, verifique sua conexão com a internet.</div>");
            }

        }else{
            $this->session->set_flashdata('crud_campanha', "<div class = 'alert alert-danger'>Erro ao cadastrar campanha, certifique que preencheu todos dados corretamente.</div>");
        }
    }

    /* função para deletar uma campanha */
    public function delCampanha(){
        echo "teste";
    }

    /* função para atualizar uma campanha */
    public function attCampanha(){
        echo "teste";
    }

    /* função para selecionar uma campanha específica do bd */
    public function getCampanha($nome = NULL){
        
        /* verifica se foi passado o parâmetro */
        if($nome){
            /* Definindo um limite da query */
            $this->db->limit(1);

            /* Condição do id */
            $this->db->where("nome_campanha", $nome);

            /* requisitando e retornando */
            $query = $this->db->get("campanha");
            return $query->row();
        }

    }

    /* função para recuperar todas as campanhas do bd */
    public function getAllCampanhas(){

        /* fazendo requisição */
        $campanhas = $this->db->get("campanha");

        /* retornando resultado */
        return $campanhas->result_array();
    }   

}


?>