<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Book_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }

    public function criar() {

    }

    public function atualizar() {

    }

    public function deletar() {

    }

    public function recuperar() {

        $query = $this->db->query("SELECT * FROM books");

        return $query->result();
    }

}
