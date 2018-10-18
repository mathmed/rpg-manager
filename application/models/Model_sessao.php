<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* Model de sessões do sistema */
Class Model_sessao extends CI_Model{

    /* função para criar uma nova sessão */
    public function addSessao($data = NULL, $descricao = NULL, $nome = NULL){
        
        /* verifica se todos os dados foram passados */
        if($data && $descricao && $nome){

            /* criando array de inserção */
            $dados = [
                "nome_sessao" => $nome,
                "descricao_sessao" => $descricao,
                "data_sessao" => $data,
                "campanha_id_campanha" => $this->session->userdata("id_campanha")
            ];

            /* tentando cadastrar a campanha */
            if($this->db->insert("sessao", $dados))
                $this->session->set_flashdata('crud_sessao', "<div class = 'alert alert-success'>Sessão cadastrada com sucesso!</div>");
            else
                $this->session->set_flashdata('crud_sessao', "<div class = 'alert alert-danger'>Erro ao cadastrar sessão, verifique sua conexão com a internet.</div>");
        }else{
            $this->session->set_flashdata('crud_campanha', "<div class = 'alert alert-danger'>Erro ao cadastrar sessão, certifique-se que todos os campos foram preenchidos corretamente</div>");
        }
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
    public function getAllSessoes($id = NULL){

        if($id){

            /* fazendo requisição */
            $requisicao = $this->db->where("campanha_id_campanha", $id);
            $requisicao = $this->db->get("sessao");

            /* retornando resultado */
            $sessoes = $requisicao->result_array();

            foreach($sessoes as &$sessao)
                $sessao['data_sessao'] = formata_data($sessao['data_sessao']);
            
            return $sessoes;

        }
    }   

}


?>