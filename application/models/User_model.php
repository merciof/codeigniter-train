<?php

/*
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->output->enable_profiler(TRUE);
    }

    public function criar($user) {


        $sql = "INSERT INTO users (email, password) VALUES (?, ?)";

        $this->db->query($sql, $user);
    }

    public function recuperar() {

    }

    public function atualizar() {

    }

    public function deletar() {

    }

}
