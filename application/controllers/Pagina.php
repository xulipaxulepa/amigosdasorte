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
    
    public function Atendimento() {
        $dados = array(
            'titulo' => 'Amigos Da Sorte',
            'tela' => 'paginasStaticas/Atendimento',
        );
        $this->load->view("exibirDados", $dados);
       
    }
    
public function QuemSomos() {
        $dados = array(
            'titulo' => 'Amigos Da Sorte',
            'tela' => 'paginasStaticas/QuemSomos',
        );
        $this->load->view("exibirDados", $dados);
       
    }
    public function Premiacoes() {
        $dados = array(
            'titulo' => 'Amigos Da Sorte',
            'tela' => 'paginasStaticas/Premiacoes',
        );
        $this->load->view("exibirDados", $dados);
       
    }
    
    public function ComoJogar() {
        $dados = array(
            'titulo' => 'Amigos Da Sorte',
            'tela' => 'paginasStaticas/ComoJogar',
        );
        $this->load->view("exibirDados", $dados);
       
    }
    public function BilhetesPremiados() {
        $dados = array(
            'titulo' => 'Amigos Da Sorte',
            'tela' => 'paginasStaticas/BilhetesPremiados',
        );
        $this->load->view("exibirDados", $dados);
       
    }
    public function Jogarboloes() {
        $dados = array(
            'titulo' => 'Amigos Da Sorte',
            'tela' => 'paginasStaticas/Jogarboloes',
        );
        $this->load->view("exibirDados", $dados);
       
    }
    public function FaleConosco() {
        $dados = array(
            'titulo' => 'Amigos Da Sorte',
            'tela' => 'paginasStaticas/FaleConosco',
        );
        $this->load->view("exibirDados", $dados);
       
    }
}
