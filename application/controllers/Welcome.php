<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('form_model');  
	}

	public function index()
	{
		$this->load->view('formulario');
	}
	function validar()
	{
		$name=$this->input->post("nombre1");
		$lastname=$this->input->post("apellido1");
		$email=$this->input->post("correo1");
		echo "nombre1:".$name."apellido1:".$lastname."correo1:".$email;
		$data=array('nombre'=>$this->input->post('nombre'),'apellido'=>$this->input->post('apellido'),'correo'=> $this->input->post('correo'));
		$this->form_model->guardar($data);
	}


}
?>