<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paginas extends MX_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function index()
  {
    redirect('', 'refresh');
  }

  public function quemsomos()
  {
    $data['view'] = 'quemSomos';
    $data['titulo'] = 'Quem Somos';
    $this->load->view('common/index', $data);
  }

  public function datacenter()
  {
    $data['view'] = 'datacenter';
    $data['titulo'] = 'Data Center';
    $this->load->view('common/index', $data);
  }

  public function edificioscomerciais()
  {
    $data['view'] = 'edificioscomerciais';
    $data['titulo'] = 'Edifícios Comerciais';
    $this->load->view('common/index', $data);
  }

  public function galpoeslogisticos()
  {
    $data['view'] = 'galpoeslogisticos';
    $data['titulo'] = 'Galpões Logísticos';
    $this->load->view('common/index', $data);
  }

  public function hospitais()
  {
    $data['view'] = 'hospitais';
    $data['titulo'] = 'Hospitais';
    $this->load->view('common/index', $data);
  }

  public function industrias()
  {
    $data['view'] = 'industrias';
    $data['titulo'] = 'Indústrias';
    $this->load->view('common/index', $data);
  }

  public function operacaomanutencao()
  {
    $data['view'] = 'operacaomanutencao';
    $data['titulo'] = 'Operação e Manutenção';
    $this->load->view('common/index', $data);
  }

  public function parceiros()
  {
    $data['view'] = 'parceiros';
    $data['titulo'] = 'Parceiros';
    $this->load->view('common/index', $data);
  }

  public function shoppingcenters()
  {
    $data['view'] = 'shoppingcenters';
    $data['titulo'] = 'Shopping Centers';
    $this->load->view('common/index', $data);
  }

  public function solucoes()
  {
    $data['view'] = 'solucoes';
    $data['titulo'] = 'Soluções';
    $this->load->view('common/index', $data);
  }

  public function sustentabilidade()
  {
    $data['view'] = 'sustentabilidade';
    $data['titulo'] = 'Sustentabilidade';
    $this->load->view('common/index', $data);
  }

}
