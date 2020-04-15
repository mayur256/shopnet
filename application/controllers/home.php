<?php

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('Home/index');
	}
	public function mElectronicMenu()
	{
		$this->load->view('Home/mElectronicProductMenu');
	}
}
?>