
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carrito extends CI_COntroller{
	function __construct(){
		parent::__construct();
		$this->load->helper('mihelper');
		$this->load->helper('form');
		$this->load->model('carrito_model');

	}
	function index(){
		$data['segmento'] = $this->uri->segment(3);
		$this->load->view('tiendavirtual/headers');
		if(!$data['segmento']){
			$data['carrito'] = $this->carrito_model->agregarCarrito($data['segmento']);
			$this->load->view('carrito/carrito',$data);
		}
		else{
			$data['carrito'] = $this->carrito_model->agregarCarrito($data['segmento']);

			$this->load->view('carrito/detalleCarrito',$data);
		}
	}
	function recibirArticulos(){
		$data= array(
			'nombreArticulo'=>$this->input->pos('nombreArticulo'),
			'cantidadArticulo'=>$this->input->pos('cantidadArticulo'),
			'precioArticulo'=>$this->input->pos('precioArticulo'),
			'total'=>$this->input->pos('total'),

			);
		$this->carrito_model->crearCarrito($ata);
	}

}
?>
