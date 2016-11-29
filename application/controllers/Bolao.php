<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bolao extends CI_Controller {

    function __construct() {
        parent:: __construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('array');
        $this->load->library('table');
        $this->load->library('session');
        $this->load->model('Bolao_model', "BolaoDAO");
        $this->load->model('Compra_Model', "CompraDAO");
        
        $this->load->library('upload');
    }

    public function cadastrar() {
        $this->form_validation->set_rules('jogo', 'Jogo', 'trim|required');
        $this->form_validation->set_rules('grupo', 'Grupo', 'trim|required|max_length[100]');
        $this->form_validation->set_rules('valorcota', 'Valor da cota', 'required');
        $this->form_validation->set_rules('totalcota', 'Total de cotas', 'required');
        $this->form_validation->set_rules('link', 'Link', 'trim|required');
        
        if ($this->form_validation->run()):
            $dados = elements(array('jogo', 'grupo', 'valorcota', 'totalcota','link'), $this->input->post());
            $dados['cotadisponivel'] = $dados['totalcota'];
            $this->BolaoDAO->do_insert($dados);
            
        endif;       

        $dados = array(
            'titulo' => 'Amigos Da Sorte',
            'tela' => 'bolao/cadastrar',
        );
        $this->load->view("exibirDados", $dados);
    }
    
    public function comprar($idbolao){
        $dados1 = array('idbolao' => $idbolao, 'emailusuario' => $this->session->email);
        $this->CompraDAO->do_insert($dados1);
        $bolao = $this->BolaoDAO->get_all();        
        $id = $idbolao;
        $dados2 = array(
            'titulo' => 'Amigos Da Sorte',
            'tela' => 'bolao/comprar',
            'idbolao' => $id,
            'bolao'=> $bolao
            
        );
        $this->load->view("exibirDados", $dados2);            
        }

    public function consultar() {
        $bolao = $this->BolaoDAO->get_all();
        $dados = array(
            'titulo' => 'Amigos Da Sorte',
            'tela' => 'bolao/consultar',
            'bolao' => $bolao
        );
        $this->load->view("exibirDados", $dados);
    }

    public function ganhador($id)
    {
            $dados = array('ganhador' => true);
            $condicao = array('id' => $id);
            $this->BolaoDAO->do_update($dados, $condicao);
            redirect('inicio/');
        
    }

}
