<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vacancy extends CI_Controller {

	
	public function index()
	{
		$this->load->helper('text');
		// removing old vacancies and resumes'
		$old_vacancy = $this->db->where('deadline<',date("Y-m-d H:i:s"))->get('vacancy')->result();
		foreach($old_vacancy as $old) {
			$this->db->where('vacancy_id',intval($old->id))->delete('resume');
		}
		$this->db->where('deadline<',date("Y-m-d H:i:s"))->delete('vacancy');
		
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

