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
    public function delSessao($id = NULL){
        
        /* verifica se foi passado um id */
        if($id){

            /* iniciando a query */
            $this->db->where("id_sessao = $id");
            if($this->db->delete("sessao"))
                $this->session->set_flashdata('crud_sessao', "<div class = 'alert alert-success'>Sessão deletada com sucesso!</div>");
            else
                $this->session->set_flashdata('crud_sessao', "<div class = 'alert alert-danger'>Erro ao deletar a sessão, verifique sua conexão com a internet</div>");
        }
        else{
            $this->session->set_flashdata('crud_sessao', "<div class = 'alert alert-danger'>Erro ao deletar a sessão, certifique que a sessão existe</div>");
        }
    }

    /* função para atualizar uma sessão */
    public function attSessao($id = NULL, $data = NULL, $descricao = NULL, $nome = NULL){
        
        /* verificando se os parâmetros foram enviados */
        if($id && $data && $descricao && $nome){

            /* gerando array de update */
            $update = [
                "data_sessao" => $data,
                "descricao_sessao" => $descricao,
                "nome_sessao" => $nome
            ];

            /* iniciando requisição para atualizar */
            if($this->db->update("sessao", $update, "id_sessao = $id"))
                $this->session->set_flashdata('crud_sessao', "<div class = 'alert alert-success'>Sessão atualizada com sucesso!</div>");
            else
                $this->session->set_flashdata('crud_sessao', "<div class = 'alert alert-danger'>Erro ao atualizar sessão, verifique sua conexão com a internet!</div>");
            
        }else{
            $this->session->set_flashdata('crud_sessao', "<div class = 'alert alert-danger'>Erro ao atualizar sessão, certifique que todos os dados foram preenchidos corretamente!</div>");
        }
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

    /* função para recuperar uma sessão pelo ID */
    public function getSessaoByID($id = NULL){

        /* verificando se foi passado um parâmetro */
        if($id){

            /* definindo um limite */
            $this->db->limit(1);

            /* requisitando */
            $this->db->where("id_sessao", $id);
            return $this->db->get("sessao")->result_array();

        }

    }

}


?>