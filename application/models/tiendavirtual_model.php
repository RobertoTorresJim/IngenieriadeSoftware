<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');

class Tiendavirtual_model extends CI_Model{
  function __construct(){
      parent::__construct();
      $this->load->database();
  }
  function crearLinea($data){
    $this->db->insert('lineas', array('nombreLinea'=> $data['nombreLinea'], 'cantidadArticulos'=> $data['cantidadArticulos']));
  }
  function obtenerLineas(){
    $query = $this->db->get('lineas');
    if($query->num_rows() > 0) return $query;
    else return false;
  }
  function obtenerLinea($id){
    $this->db->where('idLineas',$id);
    $query = $this->db->get('lineas');
    if($query->num_rows() > 0) return $query;
    else return false;
  }
}
?>
