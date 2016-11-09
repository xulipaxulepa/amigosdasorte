<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller {

    function __construct() {
        parent:: __construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('array');
        $this->load->library('table');
        $this->load->library('image_lib');
    }
    
    public function Regulamento() {
        $dados = array(
            'titulo' => 'Amigos Da Sorte',
            'tela' => 'paginasStaticas/Regulamento',
        );
        $this->load->view("exibirDados", $dados);
       
    }

}
