<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

    function __construct() {
        parent:: __construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('array');
        $this->load->library('table');
        $this->load->model('Bolao_model', "BolaoDAO");
    }
    
    public function index() {
        
        $bolao = $this->BolaoDAO->get_all();
        $dados = array(
            'titulo' => 'Amigos da Sorte',
            'tela' => 'paginasStaticas/inicio',
            'bolao'=> $bolao
        );
        $this->load->view("exibirDados", $dados);
    }

}
