<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fibonacci extends CI_Controller {

	public function index()
	{ 
			$this->load->model("m_fibonacci");	 
		$this->load->view('fibonacci');
	}
	public function content()
	{
		$page=$_GET['page'];
		$vars=array();
			$this->load->model("m_fibonacci");	
			$data=$this->m_fibonacci->generate($page);	
		$vars['data']=$data;
		$this->load->view('content_fibonacci',$vars);
	}
}
