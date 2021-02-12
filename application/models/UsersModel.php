<?php
class UsersModel extends CI_Model  {
   
    public function save($datos){
        $data["Id"]='';
        $data["email"]=$datos["email"];
        $data["nombre"]=$datos["nombre"];
        $data["apellido"]=$datos["apellido"];     
        $data["clave"]=$datos["clave"];
        $this->db->insert("usuarios",$data);
    
    }
}
?>