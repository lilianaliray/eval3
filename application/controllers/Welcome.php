<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
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
		//echo "Hola<br>";
		//aqui estamos recibiendo los datos del formulario eval.php

		$name = $this->input->post('nombre1');
		$lastname = $this->input->post('apellido1');

		echo "Nombre: ".$name."  Apellido: ".$lastname;
		//aqui estamos creando el array

		$data = array('nombre' => $this->input->post('nombre1'),'apellido' => $this->input->post('apellido1'),'Direccion de email'=>$this->input->post('direccion1'),'next'=> $this->input->post('next1') );

//aqui se llama la funcion para guardar en la BD.
		$this->form_model->guardar($data);
	}
}


