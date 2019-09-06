<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function getBooks() {


    $query = $this->db->query("SELECT * FROM books");

    return $query->result();
  }

}
