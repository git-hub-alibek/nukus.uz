<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	
	public function index()
	{
		//$data['info']=$this->db->where('id',$id)->get('news')->row_array();
		$this->load->helper('text');
		
		
		
		$data['news'] = $this->db->limit(4)->order_by('id', 'DESC')->get('news')->result(); 
		$data['news_old'] = $this->db->limit(4,5)->order_by('id', 'DESC')->get('news')->result();
		$this->load->view('/news', $data);   		
		
	}
	public function show($id)
	{
	$data['info']=$this->db->where('id',$id)->get('news')->row_array();
	$this->view_lib->render_news('/news',$data);	
	}
	}