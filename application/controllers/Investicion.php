<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Investicion extends CI_Controller {

	
	public function index()
	{
		$this->load->helper('text');
		$data['investicion'] = $this->db->limit(7)->order_by('id', 'DESC')->get('investicion')->result(); 
		// $data['investicion_old'] = $this->db->limit(5,5)->order_by('id', 'DESC')->get('investicion')->result();
		$this->load->view('investicion',$data);   		
		
	}
	public function show($id)
	{
	$data['info']=$this->db->where('id',$id)->get('investicion')->row_array();
	$this->view_lib->render_investicion('investicion/show',$data);	
	}
	}

