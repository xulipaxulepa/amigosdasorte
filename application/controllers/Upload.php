<?php

class Upload extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    public function index() {
        $this->load->view('upload_form', array('error' => ' '));
    }

    public function do_upload() {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';


        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            $dados = array(
                'titulo' => 'Amigos Da Sorte',
                'tela' => 'upload_form',
            );
            $this->load->view("exibirDados", $dados);
        } else {
            $dados = array(
                'titulo' => 'Amigos Da Sorte',
                'tela' => 'upload_success',
            );
            $this->load->view("exibirDados", $dados);
        }
    }

}

?>