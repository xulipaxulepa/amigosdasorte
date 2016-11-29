<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Compra_model extends CI_Model
{

    public function do_insert($dados = NULL)
    {

        if ($dados != NULL):
            $this->db->insert('compra', $dados);
            endif;
    }
}