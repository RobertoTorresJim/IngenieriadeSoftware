<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('mihelper');
		$this->load->helper('form');
		$this->load->model('productos_model');

	}
	function index(){
		$data['segmento'] = $this->uri->segment(3);
		$this->load->view('codigofacilito/headers');
		if(!$data['segmento']){
			$data['productos'] = $this->productos_model->obtenerProductos();
			$this->load->view('productos/producto',$data);
		}
		else{
			$data['productos'] = $this->productos_model->obtenerProducto($data['segmento']);

			$this->load->view('productos/detalleproducto',$data);
		}
		
		

	}

}
?>