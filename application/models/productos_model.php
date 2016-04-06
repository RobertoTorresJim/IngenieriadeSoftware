<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Productos_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();

	}

	function crearCurso($data){
		$this->db->insert('cursos',array('nombreCurso'=>$data['nombre'],'videosCurso'=>$data['videos']));
	}
	 function obtenerProductos(){
	 	$query = $this->db->get('productos');
	 	if($query->num_rows()>0) return $query;
	 	else return false;
	 }
	 function obtenerProducto($id){
	 	$this->db->where('idProducto',$id);
	 	$query = $this->db->get('productos');
	 	if($query->num_rows()>0) return $query;
	 	else return false;
	 }
	 function actualizarProducto($id,$data){
	 	$datos=array('nombreProducto'=>$data['nombre'],'videosCurso'=>$data['videos']);
	 	$this->db->where('idCurso',$id);
	 	$query = $this->db->update('cursos',$datos);

	 }
	 function eliminarProducto($id){
	 	$this->db->delete('productos',array('idProducto'=>$id));
	 }

}
?>
