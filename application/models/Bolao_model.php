<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bolao_model extends CI_Model
{

    public function do_insert($dados = NULL)
    {

        if ($dados != NULL):
            $this->db->insert('bolao', $dados);
            $this->session->set_flashdata('cadastrook', 'Cadastro efetuado com sucesso!');
            redirect('/index.php/bolao/cadastrar');
        endif;
    }

    public function get_all()
    {
        return $this->db->get('bolao');
    }

    public function do_update($dados = NULL, $condicao = NULL)
    {
        if ($dados != NULL):
            $this->db->update('bolao', $dados, $condicao);
            redirect('/bolao/consultar');
        endif;
    }

    
}
