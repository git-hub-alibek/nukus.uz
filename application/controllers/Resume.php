<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resume extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('form');
	}

	public function index()
	{
		$this->load->helper('text');
		$data['resume'] = $this->db->order_by('id', 'DESC')->get('resume')->result(); 

	}
	
	public function show($id = '')
	{
		$data['vacancy'] = $this->db->where('id',intval($id))->get('vacancy')->result();
		$this->load->view('resume',$data);	
	}

	public function send()
	{
		$full_name = $this->input->post('from');
		$vacancy_id = $this->input->post('vacancy_id');
		$vacancy = $this->db->where('id', intval($vacancy_id))->get('vacancy')->result();
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		// $reference = $this->input->post('obiektiva');
		// $diploma = $this->input->post('diplom');
		// $work_record = $this->input->post('trudovoy');
		// $passport = $this->input->post('passport');	

		$insert = [
			'vacancy_id' => $this->input->post('vacancy_id'),
			'full_name' => $this->input->post('from'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'reference' => $this->input->post('obiektiva'),
			'diploma' => $this->input->post('diplom'),
			'work_record' => $this->input->post('trudovoy'),
			'passport' => $this->input->post('passport')
		];
		var_dump($insert);
		$this->db->insert('resume', $insert);
		$count_res = intval($vacancy[0]->count_res)+1;
		$this->db->where('id',intval($vacancy[0]->id))->update('vacancy', ['count_res' => $count_res] );

		$token = "1365514468:AAGUMD4AfUcsNaLc_7u-rHFV14H_mRjqYtA";
		$chat_id = "-1001199553849";
		$txt = urlencode("*Резюме:* \n`Lawazım: `*".$vacancy[0]->position."*\n`Atı: `*".$full_name."*\n`Email: `*".$email."*\n`Тел. номери: `*".$phone."*");
			
		$text = "";

		$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$txt}&parse_mode=markdown","r");				
	}

	public function zapas()
	{
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
				$this->db->insert('resume',$insert);
				
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
				$this->load->view('resume',$data);
			}
		}
		else
		{
			$data['title'] = 'Обратная связь';
			$this->load->view('resume',$data);
		}		
	}
}
		
	
	