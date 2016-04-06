
<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Carrito_model extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();

	}
	function agregarCarrito($data){
		//$this->db->insert('carrito',array('costo'=>$data['precio']));
		$this->db->get('carrito');

	}
	}
?>
