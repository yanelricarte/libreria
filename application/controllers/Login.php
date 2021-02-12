<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		//Mostrar el formulario
		$html = $this->load->view('login', array("title"=>"Login"),true);
		$param["titulo"]="Login";
		$param["contenido"]=$html;
		$this->load->view("Layout/Layout",$param);
	}
	public function save(){
		//GUardado en base de datos
		//var_dump($_POST);
		if(!$_POST["email"] || $_POST["clave"]){
			$html = $this->load->view('login', array("title"=>"Login","error"=>"Usuario y/o clave incorrectos"),true);
		}
		
		$this->load->model("usuarioModel");
		$usuario = $this->usuarioModel->login($_POST["email"],$_POST["clave"]);
		//var_dump($usuario); exit;
		if(!$usuario){

			$html = $this->load->view('login', array("title"=>"Login","error"=>"Usuario y/o clave incorrectos"),true);
			$param["titulo"]="Login";
			$param["contenido"]=$html;
			$this->load->view("Layout/Layout",$param);
		}else{
			header("Location:/tpfinal/index.php/home");
		}
	}
	public function saveAjax(){
		$this->load->model("usuarioModel");
		$usuario = $this->usuarioModel->login($_POST["email"],$_POST["clave"]);
		if($usuario){
			echo "Usuario correcto";
		}else{
			$html = $this->load->view('login', array("title"=>"Login","error"=>"Usuario y/o clave incorrectos"),true);
			echo $html;
		}

	}
	public function saveAjaxJson(){
		$this->load->model("usuarioModel");
		$usuario = $this->usuarioModel->login($_POST["email"],$_POST["clave"]);
		if($usuario){
			echo json_encode(array("status"=>"ok","mensaje"=>""));
		}else{
			echo json_encode(array("status"=>"error","mensaje"=>"Usuario y/o Contraseña incorrectos"));
		}

	}

	public function saveJs(){
		echo "Hola Mundo";
	}
}
