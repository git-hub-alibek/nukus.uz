<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vacancy extends CI_Controller {

	
	public function index()
	{
		$this->load->helper('text');
		$data['vacancy'] = $this->db->limit(7)->order_by('id', 'DESC')->get('vacancy')->result(); 
		// $data['investicion_old'] = $this->db->limit(5,5)->order_by('id', 'DESC')->get('investicion')->result();
		$this->load->view('vacancy',$data);   		
		
	}
	public function show($id)
	{
	$data['info']=$this->db->where('id',$id)->get('vacancy')->row_array();
	$this->view_lib->render_investicion('vacancy/show',$data);	
	}
	}

