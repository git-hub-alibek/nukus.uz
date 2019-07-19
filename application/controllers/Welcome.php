<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
$data['news']=$this->db->order_by('id','desc')->get('news')->result_array();		
$this->load->view('homepage');

	       
		
	}
}
