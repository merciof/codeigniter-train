<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// require '../models/Book_model.php';

class Teste extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //Codeigniter : Write Less Do More
        $this->load->model('Book_model');
        $this->output->enable_profiler(TRUE);
        $this->load->helper('form');
    }

    function index() {





        $data['indice'] = $this->Book_model->getBooks();



        $this->load->view('view_teste', $data);

        $this->load->view('exemplo/navbar');

        $this->load->view('exemplo/footer');
    }

    function cadastro() {

        $this->load->view('exemplo/form');
    }

    function inserir() {

    }

}
