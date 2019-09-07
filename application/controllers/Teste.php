<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// require '../models/Book_model.php';

class Teste extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //Codeigniter : Write Less Do More
        $this->output->enable_profiler(TRUE);
        $this->load->helper("form");
    }

    function index() {


        echo "Controlador Teste, método index!";
    }

    function cadastro() {

        $this->load->view('exemplo/form');
    }

    function inserir() {

    }

}
