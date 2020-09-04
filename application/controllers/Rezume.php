<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rezume extends CI_Controller {

	function __construct()
		{
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->helper('form');
		}
	
		public function index()
		{
			$this->load->helper('text');
		$data['rezume'] = $this->db->order_by('id', 'DESC')->get('rezume')->result(); 
			if ($this->input->post('send'))
			{
				$this->form_validation->set_rules('from','Ваше имя','required|trim');
				$this->form_validation->set_rules('email','Email','valid_email|required');
				$this->form_validation->set_rules('phone','Телефон','required|trim');
				$this->form_validation->set_rules('obiektivka','Обьевтивка','required|trim');
				$this->form_validation->set_rules('diplom','Диплом копия','required|trim');
				$this->form_validation->set_rules('trudovoy','Трудовой копия','required|trim');
				$this->form_validation->set_rules('passport','Паспорт копия','required|trim');
				
				if ($this->form_validation->run()==TRUE)
				{
					$from = htmlspecialchars($this->input->post('from'));
					$email = htmlspecialchars($this->input->post('email'));
					$phone = htmlspecialchars($this->input->post('title'));
					$obiektivka = htmlspecialchars($this->input->post('text'));
					$diplom = htmlspecialchars($this->input->post('text'));
					$trudovoy = htmlspecialchars($this->input->post('text'));
					$passport = htmlspecialchars($this->input->post('text'));
					$date = date('Y-m-d H:i:s');
					$insert = array(
						'passport' => $passport,
						'diplom' => $diplom,
						'trudovoy' => $trudovoy,
						'obiektivka' => $obektivka,
						'phone' => $phone,
						'date' => $date,
						'email' => $email,
						'from' => $from,
					);
					$this->db->insert('rezume',$insert);
					
					$this->load->library('email');
					$this->email->initialize(array('mailtype'=>'html'));
					$this->email->from("admin@nukus.uz", $from);
					$this->email->to('alibek9.6@mail.ru');
					
					$this->email->subject('nukus.uz: '.$obektivka);
					$this->email->message('Здравствуйте! Сегодня, '.$date.' поступило сообщение от '.$from.' следующего содержания:<br /><br /><strong>'.$phone.'</strong>'.$diplom.' <br> '.$passport.' <br> '.$trudovoy.' <br>'.$obiektivka.'');
					
					$this->email->send();
					
					$this->session->set_flashdata('message','<div class="alert alert-success">Сообщение успешно отправлено!</div>');
					redirect('rezume','location');
				}
				else
				{
					$data['title'] = 'Обратная связь';
					$this->view_lib->render('rezume/rezume',$data);
				}
			}
			else
			{
				$data['title'] = 'Обратная связь';
				$this->view_lib->render('rezume/rezume',$data);
			}
		}
		public function show($id)
	{
	$data['info']=$this->db->where('id',$id)->get('rezume')->row_array();
	$this->view_lib->render_investicion('rezume/show',$data);	
	}
}
		
	
	