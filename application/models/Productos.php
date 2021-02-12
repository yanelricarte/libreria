<?php
class Productos extends CI_Model  {

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
        $this->db->select("nombre");
        $this->db->from("productos");
        $this->db->where("id",$id);
        $consulta = $this->db->get();
        $resultados = $consulta->result_array();
        return $resultados;
   }
   
   public function save(){
        $data["nombre"]="Antídotos asiáticos";
        $data["precio"]="1200";
        $this->db->insert("productos",$data);
    
    }
    public function update(){
        $data["denominacion"]="ddasdas";
        $data["precio"]="100";
        $this->db->where("id",1);
        $this->db->update("productos",$data);
    }
   
}
?>