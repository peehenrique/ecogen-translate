<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {

  public function __construct(){
    parent::__construct();

    if (!$this->ion_auth->logged_in())
    {
      redirect('admin/login');
    }

    $this->load->model('dashboard_model');

  }

  public function index()
  {

    $data['titulo'] = "Dashboard";
    $data['view'] = 'admin/dashboard/home';

    $this->load->view('admin/template/index', $data);
  }

}
