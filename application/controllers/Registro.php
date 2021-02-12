<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {


	public function index(){
                $this->formulario();
        }
        
        public function save(){
                $this->form_validation->set_rules('email','Email','required',      //   Configuramos las validaciones ayudandonos con la librería form_validation del Framework Codeigniter
                        array('required' => 'El campo %s es obligatorio'));
                $this->form_validation->set_rules('nombre','Nombre','required|min_length[3]',
                        array('required' => 'El campo %s es obligatorio','min_length' => 'El campo %s debe tener al menos 3 caracteres'));
                $this->form_validation->set_rules('apellido','Apellido','required',
                        array('required' => 'El campo %s es obligatorio'));
                $this->form_validation->set_rules('clave','Contraseña','required',
                        array('required' => 'El campo %s es obligatorio'));
                $this->form_validation->set_rules('clave2','verificación','required',
                        array('required' => 'El campo %s es obligatorio'));


                if(($this->form_validation->run()==FALSE)){            //   Verificamos si el usuario superó la validación
                        $this->formulario();
                }else{
                        //Enviar email
                        //$this->enviarEmail();

                        $this->load->model("usersModel");
                        $this->usersModel->save($this->input->post());
                        $html = $this->load->view('registroExitoso',array("title"=>"Gracias por registrarse"),true);
                        $param["titulo"]="Registro";
                        $param["contenido"]=$html;
                        $this->load->view("Layout/Layout",$param);
                }
                
                
                
        
        }
        private function formulario(){
                $html = $this->load->view('registro', array("title"=>"Registro"),true);
		$param["titulo"]="Registro";
		$param["contenido"]=$html;
		$this->load->view("Layout/Layout",$param);
        }
        private function enviarEmail(){
                $this->load->config('email');
                $this->load->library('email');
                $from = $this->config->item('smtp_user');
                $to = $this->input->post('email');
                $subject = 'subject'+$this->input->post('nombre');
                $message = 'message';
                //$message = $this->load->view("sdasd",array(),true);
                $this->email->set_newline("\r\n");
                $this->email->from($from);
                $this->email->to($to);
                $this->email->subject($subject);
                $this->email->message($message);

                if ($this->email->send()) {
                        echo 'Your Email has successfully been sent.';
                } else {
                        show_error($this->email->print_debugger());
                }
        }
}