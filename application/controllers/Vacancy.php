<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vacancy extends CI_Controller {

	
	public function index()
	{
		$this->load->helper('text');
		$data['vacancy'] = $this->db->order_by('id', 'DESC')->get('vacancy')->result(); 
		// $data['investicion_old'] = $this->db->limit(5,5)->order_by('id', 'DESC')->get('investicion')->result();
		$this->load->view('list_vacancy',$data);   		
		
	}
	public function show($id)
	{
		$this->load->helper('text');
		$data['vacancy']=$this->db->where('id',intval($id))->get('vacancy')->result();
		$this->load->view('vacancy',$data);	
	}
}

