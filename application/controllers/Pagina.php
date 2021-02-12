<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller {
    
    public function index()
    {
        $head = $this->load->view("head", array(), true);
        $this->load->view('pagina', array("title"=>"Mayor", "nombre"=>"Alejandro Araldi", "head"=>$head));
    }
}


?>