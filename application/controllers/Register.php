<?php
defined('BASEPATH') OR exit('No direct script access allowed') ;

Class Register extends CI_Controller {

	public function index()
	{
		$this->load->view('Registration');
	}
}
