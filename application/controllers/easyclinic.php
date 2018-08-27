<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Easyclinic extends CI_Controller {


 public function __construct()
 	{
 		parent::__construct();
 		$this->load->helper('url');
		
 	}




	public function index()
	{
	     
	    
	    $this->load->view('add_patient');
	}




	public function mydata()
	{
		$this->load->view('mydata');
	}



	public function addpatient()
	{
		$this->load->view('add_patient');
	}	




	}