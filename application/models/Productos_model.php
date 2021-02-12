<?php
class Productos_model extends CI_Model  {

   function __construct(){
      parent::__construct();
   }
   
   public function getAll(){
       $this->db->select("*");
       $this->db->from("productos");
       $consulta = $this->db->get();
       $resultados = $consulta->result_array();
       return $resultados;
   }   
   public function getById($id){
        $this->db->select("nombre, descripcion, stock, precio, codigo");
        $this->db->from("productos");
        $this->db->where("id",$id);
        $consulta = $this->db->get();
        $resultados = $consulta->result_array();
        return $resultados;
   }
   public function save($nombre,$precio){
        $data["nombre"]=$nombre;
        $data["precio"]=$precio;
        $this->db->insert("productos",$data);
    
    }
    public function update(){
        $data["nombre"]="ddasdas";
        $data["precio"]="1100";
        $this->db->where("id",1);
        $this->db->update("productos",$data);
    }
   
}
?>