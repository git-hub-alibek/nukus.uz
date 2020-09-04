<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_vacancy extends CI_Controller {

	
	public function index()
	{
		$this->load->helper('text');
		$data['vacancy'] = $this->db->limit(7)->order_by('id', 'DESC')->get('vacancy')->result(); 
		$this->data['all_categories'] = $this->db->get('vacancy')->result();
		$this->load->view('list_vacancy',$data);   		
		
	}
	public function show($id)
	{
	$data['info']=$this->db->where('id',$id)->get('vacancy')->row_array();
	$this->view_lib->render_investicion('vacancy/show',$data);	
	}
	}

