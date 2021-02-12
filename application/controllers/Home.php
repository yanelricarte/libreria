<?php
//echo phpinfo(); exit;
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		/*if(!$_SESSION[usuario])header("Location: /login)*/
		$this->load->model("productos_model");
		$productosModel = $this->productos_model->getAll();
		$parametros["titulo"]="Libreria";
		$parametros["productos"] = $productosModel;
		$html = $this->load->view("home",$parametros,true);
		$param["titulo"]="Home";
		$param["contenido"]=$html;
		$this->load->view("Layout/Layout",$param);
		
	}
	public function prueba($params,$param2){
		var_dump($params,$param2);
		echo "prueba";
		$html = $this->load->view("prueba",array("nombre"=>$param2),true);
		echo $html;
	}
	
}
