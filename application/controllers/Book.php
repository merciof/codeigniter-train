<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 */

/**
 * Description of Book
 *
 * @author merciof
 */
class Book extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->output->enable_profiler(TRUE);
        $this->load->model('book_model');
        $this->load->helper('form');
    }

    public function index() {
        $this->load->view('header.html');
        $this->load->view('forms/book_form');
    }

    public function criar() {

    }

}
