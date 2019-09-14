<?php

defined('BASEPATH') or exit('No direct script access allowed');
/*
 */

/**
 * Description of Book
 *
 * @author merciof
 */
class Book extends CI_Controller
{

    /** 
     *  Atributos: titulo e autor
     */

    public function __construct()
    {
        parent::__construct();
        $this->output->enable_profiler(TRUE);
        $this->load->model('book_model');
        $this->load->helper('form');
    }

    public function index()
    {
        $query = $this->db->get('books');

        $books = array();


        foreach ($query->result() as $row) {
            var_dump($row);
            echo "<br>";
            array_push($books, $row);
            
        }

        echo "<br>";

        foreach ($books as $book) {
            var_dump($book);
            echo "<br>";
         
            
        }



         $data['books'] = $books;

        $this->load->view('header.html');
        $this->load->view('forms/book_form');
        $this->load->view('forms/book_details', $data);

        

        //echo SELECT ALL
    }

    public function criar()
    {

        // $sql = "INSERT INTO books (titulo, autor) VALUES(?, ?)";

        $data = array(
            'titulo' => $this->input->post('book_titulo'),
            'autor' => $this->input->post('book_autor')
        );

        // $this->db->query($sql, $data);

        $this->db->insert('books', $data);
    }

    public function recuperar()
    {

        $sql = "SELECT * FROM books WHERE id = ?";

        $query = $this->db->query($sql, [7]);

        foreach ($query->result() as $row) {
            echo $row->titulo;
            echo "<br>";
        }
    }

    public function recuperar_todos()
    {

        $sql = "SELECT * FROM books";

        $query = $this->db->query($sql);

        // $query = $this->db->get('books');

        foreach ($query->result() as $row) {
            echo $row->titulo;
            echo "<br>";
        }
    }

    public function atualizar()
    {

        $sql = "UPDATE books SET titulo = ?, autor = ? WHERE id = ?";


        $data = array(
            'titulo' => $this->input->post('titulo'),
            'autor' => $this->input->post('autor'),
            'id' => $this->input->post('id')
        );

        $this->db->query($sql, $data);


        // UPDATE table_name
        // SET column1 = value1, column2 = value2, ...
        // WHERE condition;

        //$this->db->update('books', $data);
    }

    public function deletar()
    {

        $id = $this->input->post('id');

        $sql = "DELETE FROM books WHERE id = ?";

        $this->db->query($sql, $id);

        // $this->db->where('id', $id);
        // $this->db->delete('books');
    }
}
