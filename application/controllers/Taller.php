<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Taller extends CI_Controller {

	public function __construct(){
		//El constructor lleva 2_ _
		//hereda los metodos de la superclase CI_Controler 
	parent::__construct();	
	//Agregar helper y librerias adicionales al controlador
	$this->load->helper('url'); //Para ocupar una funcion que se llama url base 
	}

	public function index()
	{
		$this->load->view('Taller/index_view');
	}

	public function primer_vista(){
		$this->load->view('primer_vista_view');
	}

    public function agregar_taller(){
		$this->load->view('Taller/agregar_taller_view');
	}
	//vista blank page 
	
	public function black_view(){
		$this->load->view('Taller/blank');
	}
}