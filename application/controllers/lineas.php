<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lineas extends CI_COntroller{
  function __construct(){
    parent::__construct();
    $this->load->helper('form');
    $this->load->model('tiendavirtual_model');
  }
  function index(){
    $data['segmento'] = $this->uri->segment(3);
    $this->load->view('tiendavirtual/headers');
    if(!$data['segmento']){
      $data['lineas'] = $this->tiendavirtual_model->obtenerLineas();
    }
    else{
      $data['lineas'] = $this->tiendavirtual_model->obtenerLinea($data['segmento']);
    }
    $this->load->view('lineas/lineas', $data);
  }
  function nuevo(){
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
