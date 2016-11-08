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
    }

    public function cadastrar() {
        $this->form_validation->set_rules('jogo', 'Jogo', 'trim|required');
        $this->form_validation->set_rules('grupo', 'Grupo', 'trim|required|max_length[100]');
        $this->form_validation->set_rules('valorcota', 'Valor da cota', 'required');
        $this->form_validation->set_rules('totalcota', 'Total de cotas', 'required');

        if ($this->form_validation->run()):
            $dados = elements(array('jogo', 'grupo', 'valorcota', 'totalcota'), $this->input->post());
            $totalcotas = elements(array('totalcotas'), $this->input->post());
            $dados['cotadisponivel'] = $totalcotas;
            $this->BolaoDAO->do_insert($dados);
        endif;

        $dados = array(
            'titulo' => 'Amigos Da Sorte',
            'tela' => 'bolao/cadastrar',
        );
        $this->load->view("exibirDados", $dados);
    }

    public function consultar() {
        if (isset($this->session->isAdministrador)):
            $bolao = $this->InstituicaoDAO->get_all();
            $dados = array(
                'titulo' => 'Amigos Da Sorte',
                'tela' => 'bolao/consultar',
                'bolao' => $bolao,
            );
            $this->load->view("exibirDados", $dados);
        else:
            redirect('inicio/');
        endif;
    }

}
