<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends MX_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('home_model');
	}

	public function index(){

		$data['view'] = 'home';
		$data['titulo'] = 'Home';
		$this->load->view('common/index', $data);
	}

}
