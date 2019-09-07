<?php

/*
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->output->enable_profiler(TRUE);
        $this->load->model("user_model");
        $this->load->helper("form");
    }

    public function index() {
        $this->load->view('header.html');
        $this->load->view('forms/user_form');
    }

    public function criar() {

        echo "no controlador da entidade User!";

        $user = array(
            "user_email" => $this->input->post("user_email"),
            "user_password" => $this->input->post("user_password")
        );

        $this->user_model->criar($user);

        $this->load->view("view_teste");
    }

}
