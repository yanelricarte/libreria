<?php
class UsuarioModel extends CI_Model  {

   function __construct(){
      parent::__construct();
   }
   public function login($email,$password){
       if(!$email) return false;
        $this->db->select("*");
        $this->db->from("usuarios");
        $this->db->where("email = '$email' and clave='$password'");
        $consulta = $this->db->get();
        return $consulta->result_array();
   }
   
   
}
?>