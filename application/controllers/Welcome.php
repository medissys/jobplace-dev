<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('html');
		$this->layout->ajouter_css('template');
		$this->layout->ajouter_btsrp_css('bootstrap');
		$this->layout->ajouter_btsrp_css('bootstrap-theme');
		$this->layout->ajouter_btsrp_js('jquery.min');
		$this->layout->ajouter_btsrp_js('bootstrap');
		
	}
	public function index()
	{
		$this->layout->view('welcome/welcome');
	}
}
