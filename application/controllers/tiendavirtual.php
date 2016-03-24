<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tiendavirtual extends CI_Controller {
  #constructor de la clase Tiendavirtual
  function __construct(){
    parent:: __construct();
    $this->load->helper('form');
    $this->load->model('tiendavirtual_model');
  }
  #funcion index de la clase tienda virtual
  function index(){
    $this->load->library('menu', array('Inicio','Contacto','Cursos'));
    $data['mi_menu'] = $this->menu->construirMenu();
    $this->load->view('tiendavirtual/headers');
    $this->load->view('tiendavirtual/bienvenido',$data);
  }
  #Función hola mundo solo con motivos de ejemplo
  function holaMundo(){
    $this->load->view('tiendavirtual/headers');
    $this->load->view('tiendavirtual/bienvenido');
  }
}
?>
