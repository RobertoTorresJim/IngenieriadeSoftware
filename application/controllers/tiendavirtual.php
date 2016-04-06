<!--comentario fuera de etiqueta php-->


<?php
//comentario dentro de etiqueta php
defined('BASEPATH') OR exit('No direct script access allowed');

class TiendaVirtual extends CI_COntroller{
  function __construct(){
    parent::__construct();
    $this->load->helper('form');
    $this->load->model('tiendavirtual_model');
  }
  function index(){
    $data['segmento3'] = $this->uri->segment(3);
    $this->load->view('tiendavirtual/headers');
    if(!$data['segmento3']){
      $data['lineas'] = $this->tiendavirtual_model->obtenerLineas();
      $this->load->view('lineas/lineas', $data);
    }
    else{

      $this->productos($data['segmento3']);

    }
  }

  function productos($segmento){
    $this->load->view('tiendavirtual/headers');
    $data['segmento4'] = $this->uri->segment(4);

    if($segmento == $this->uri->segment(3) && !$data['segmento4'] ){
      $data['productos'] = $this->tiendavirtual_model->obtenerProductos($segmento);
    //  $segmento = $this->uri->segment(4);
      $this->load->view('productos/producto',$data);
    }

      else {

      //$data['segmento'] = $this->uri->segment(4);
      $data['productos'] = $this->tiendavirtual_model->obtenerProducto($data['segmento4']);

      $this->load->view('productos/detalleproducto',$data);
    }
  }





  function nuevoCarrito(){
    $this->load->view('tiendavirtual/headers');
    $this->load->view('lineas/formulario');
  }
  function recibirLineas(){
    $data = array(
      'nombreLinea' => $this->input->post('nombreLinea'),
      'cantidadArticulos' => $this->input->post('cantidadArticulos')
    );
    $this->tiendavirtual_model->crearLinea($data);
    $this->load->view('tiendavirtual/headers');
    $this->load->view('lineas/formulario');
  }
}
