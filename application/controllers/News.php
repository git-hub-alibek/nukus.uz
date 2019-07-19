<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	
	public function index()
	{
		$this->load->helper('text');
		//$data['info']=$this->db->where('id',$id)->get('news')->row_array();
		$data['news'] = $this->db->limit(5)->order_by('id', 'DESC')->get('news')->result();
		$this->load->view('/news/list', $data);
	}
	public function show($id)
	{
	$data['info']=$this->db->where('id',$id)->get('news')->row_array();
	$this->view_lib->render('news/show',$data);
	}
	}