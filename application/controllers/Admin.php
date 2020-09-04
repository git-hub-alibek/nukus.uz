<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Admin extends CI_Controller {

	public function __construct()

	{

		parent::__construct();

		if(!$this->ion_auth->logged_in()) {
			redirect('auth/login');
		}

		$this->load->database();

		$this->load->helper('url');



		$this->load->library('grocery_CRUD');

	}

	public function news(){

		$crud=new grocery_CRUD();

		$crud->set_field_upload('img','uploads');

		$crud->set_field_upload('img1','uploads');

		$crud->set_field_upload('img2','uploads');

		$crud->set_field_upload('img3','uploads');

		$crud->set_field_upload('img4','uploads');

		$crud->set_field_upload('img5','uploads');

		$crud->set_field_upload('img6','uploads');

		$crud->set_field_upload('img7','uploads');

		$crud->set_field_upload('img8','uploads');

		$crud->set_field_upload('img9','uploads');

		$crud->set_field_upload('img10','uploads');

		$output=$crud->render();

		$this->_example_output($output);

	}

public function investicion(){

		$crud=new grocery_CRUD();

		$crud->set_field_upload('img','uploads');

		$output=$crud->render();

		$this->_example_output($output);

	}
	public function vacancy()
	{
		$crud=new grocery_CRUD();
		$crud->columns('id','position','organ','salary','extra_fee','structure','wage_rate','region','deadline','edu_level','obligation','working_days');
		$crud->display_as('id','#');
		$crud->display_as('position','Lawazım');
		$crud->display_as('organ','Mákeme');
		$crud->display_as('salary','Is haqı');
		$crud->display_as('extra_fee','Qosımsha haq');
		$crud->display_as('structure','Dúzilis');
		$crud->display_as('wage_rate','Jumıs dárejesi');
		$crud->display_as('region','Aymaq');
		$crud->display_as('deadline','Múddet');
		$crud->display_as('edu_level','Tálim dárejesi');
		$crud->display_as('obligation','Talaplar');
		$crud->display_as('working_days','Jumıs kúnleri');
		$output=$crud->render();
		$this->_example_output($output);
	}
	public function resume(){

		$crud=new grocery_CRUD();
		$crud->columns('id','vacancy_id','full_name','email','phone','reference','diploma','work_record','passport','img');
		$crud->display_as('id','#');
		$crud->display_as('vacancy_id','Vakansiya');
		$crud->display_as('full_name','F.A.Áa.');
		$crud->display_as('email','Email');
		$crud->display_as('phone','Telefon');
		$crud->display_as('reference','Maǵlıwmatnama');
		$crud->display_as('diploma','Diplom');
		$crud->display_as('work_record','Jumıs dáptershesi');
		$crud->display_as('passport','Passport');
		$crud->display_as('img','Súwret');
		$crud->set_relation('vacancy_id','vacancy','position');
		$crud->set_field_upload('img','uploads');
		$output=$crud->render();
		$this->_example_output($output);
	}
	
	public function images(){
		$crud=new grocery_CRUD();
		$crud->set_field_upload('img','uploads');
		$output=$crud->render();
		$this->_example_output($output);
	}

	public function _example_output($output = null)

	{

		$this->load->view('admin.php',(array)$output);

	}



	public function offices()

	{

		$output = $this->grocery_crud->render();



		$this->_example_output($output);

	}



	public function index()

	{

if(!$this->ion_auth->logged_in()){

            redirect('auth/login');

        }



		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));

	}



	public function offices_management()

	{

		try{

			$crud = new grocery_CRUD();



			$crud->set_theme('datatables');

			$crud->set_table('offices');

			$crud->set_subject('Office');

			$crud->required_fields('city');

			$crud->columns('city','country','phone','addressLine1','postalCode');



			$output = $crud->render();



			$this->_example_output($output);



		}catch(Exception $e){

			show_error($e->getMessage().' --- '.$e->getTraceAsString());

		}

	}



	public function employees_management()

	{

			$crud = new grocery_CRUD();



			$crud->set_theme('datatables');

			$crud->set_table('employees');

			$crud->set_relation('officeCode','offices','city');

			$crud->display_as('officeCode','Office City');

			$crud->set_subject('Employee');



			$crud->required_fields('lastName');



			$crud->set_field_upload('file_url','assets/uploads/files');



			$output = $crud->render();



			$this->_example_output($output);

	}



	public function customers_management()

	{

			$crud = new grocery_CRUD();



			$crud->set_table('customers');

			$crud->columns('customerName','contactLastName','phone','city','country','salesRepEmployeeNumber','creditLimit');

			$crud->display_as('salesRepEmployeeNumber','from Employeer')

				 ->display_as('customerName','Name')

				 ->display_as('contactLastName','Last Name');

			$crud->set_subject('Customer');

			$crud->set_relation('salesRepEmployeeNumber','employees','lastName');



			$output = $crud->render();



			$this->_example_output($output);

	}



	public function orders_management()

	{

			$crud = new grocery_CRUD();



			$crud->set_relation('customerNumber','customers','{contactLastName} {contactFirstName}');

			$crud->display_as('customerNumber','Customer');

			$crud->set_table('orders');

			$crud->set_subject('Order');

			$crud->unset_add();

			$crud->unset_delete();



			$output = $crud->render();



			$this->_example_output($output);

	}



	public function products_management()

	{

			$crud = new grocery_CRUD();



			$crud->set_table('products');

			$crud->set_subject('Product');

			$crud->unset_columns('productDescription');

			$crud->callback_column('buyPrice',array($this,'valueToEuro'));



			$output = $crud->render();



			$this->_example_output($output);

	}



	public function valueToEuro($value, $row)

	{

		return $value.' &euro;';

	}



	public function film_management()

	{

		$crud = new grocery_CRUD();



		$crud->set_table('film');

		$crud->set_relation_n_n('actors', 'film_actor', 'actor', 'film_id', 'actor_id', 'fullname','priority');

		$crud->set_relation_n_n('category', 'film_category', 'category', 'film_id', 'category_id', 'name');

		$crud->unset_columns('special_features','description','actors');



		$crud->fields('title', 'description', 'actors' ,  'category' ,'release_year', 'rental_duration', 'rental_rate', 'length', 'replacement_cost', 'rating', 'special_features');



		$output = $crud->render();



		$this->_example_output($output);

	}



	public function film_management_twitter_bootstrap()

	{

		try{

			$crud = new grocery_CRUD();



			$crud->set_theme('twitter-bootstrap');

			$crud->set_table('film');

			$crud->set_relation_n_n('actors', 'film_actor', 'actor', 'film_id', 'actor_id', 'fullname','priority');

			$crud->set_relation_n_n('category', 'film_category', 'category', 'film_id', 'category_id', 'name');

			$crud->unset_columns('special_features','description','actors');



			$crud->fields('title', 'description', 'actors' ,  'category' ,'release_year', 'rental_duration', 'rental_rate', 'length', 'replacement_cost', 'rating', 'special_features');



			$output = $crud->render();

			$this->_example_output($output);



		}catch(Exception $e){

			show_error($e->getMessage().' --- '.$e->getTraceAsString());

		}

	}



	function multigrids()

	{

		$this->config->load('grocery_crud');

		$this->config->set_item('grocery_crud_dialog_forms',true);

		$this->config->set_item('grocery_crud_default_per_page',10);



		$output1 = $this->offices_management2();



		$output2 = $this->employees_management2();



		$output3 = $this->customers_management2();



		$js_files = $output1->js_files + $output2->js_files + $output3->js_files;

		$css_files = $output1->css_files + $output2->css_files + $output3->css_files;

		$output = "<h1>List 1</h1>".$output1->output."<h1>List 2</h1>".$output2->output."<h1>List 3</h1>".$output3->output;



		$this->_example_output((object)array(

				'js_files' => $js_files,

				'css_files' => $css_files,

				'output'	=> $output

		));

	}



	public function offices_management2()

	{

		$crud = new grocery_CRUD();

		$crud->set_table('offices');

		$crud->set_subject('Office');



		$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));



		$output = $crud->render();



		if($crud->getState() != 'list') {

			$this->_example_output($output);

		} else {

			return $output;

		}

	}



	public function employees_management2()

	{

		$crud = new grocery_CRUD();



		$crud->set_theme('datatables');

		$crud->set_table('employees');

		$crud->set_relation('officeCode','offices','city');

		$crud->display_as('officeCode','Office City');

		$crud->set_subject('Employee');



		$crud->required_fields('lastName');



		$crud->set_field_upload('file_url','assets/uploads/files');



		$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));



		$output = $crud->render();



		if($crud->getState() != 'list') {

			$this->_example_output($output);

		} else {

			return $output;

		}

	}



	public function customers_management2()

	{

		$crud = new grocery_CRUD();



		$crud->set_table('customers');

		$crud->columns('customerName','contactLastName','phone','city','country','salesRepEmployeeNumber','creditLimit');

		$crud->display_as('salesRepEmployeeNumber','from Employeer')

			 ->display_as('customerName','Name')

			 ->display_as('contactLastName','Last Name');

		$crud->set_subject('Customer');

		$crud->set_relation('salesRepEmployeeNumber','employees','lastName');



		$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));



		$output = $crud->render();



		if($crud->getState() != 'list') {

			$this->_example_output($output);

		} else {

			return $output;

		}

	}



}

