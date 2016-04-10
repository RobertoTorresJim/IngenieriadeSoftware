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
  function crearCarrito($data){
    $this->db->insert('carrito', array('costo' => $data['precio']*$data['cantidad']));
    $this->db->insert('venta', array('idProducto'=>$data['idProducto'], 'idCarrito'=>$data['idCarrito'],
                                     'costoTotal'=>$data['precio']*$data['cantidadArticulos'],$data['cantidad']));
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
  function obtenerProductos($id){
    $this->db->where('idLinea',$id);
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
  function obtenerCarrito(){
    $query = $this->db->get('carrito');
    if($query->num_rows() > 0) return $query;
    else return false;
  }
  function agregarCarrito($data){
    $query = $this->Tiendavirtual_model->obtenerCarrito();
    if($query->num_rows() > 0){
      $lastSesion = end($query);
      $this->db->insert('carrito',array('costo'=>$data['precio'],'sesion'=>$lastSesion['sesion']));
    }
	}
}
?>
