<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller {

  public function __construct(){
    parent::__construct();

  }

  public function index()
  {
    $this->form_validation->set_rules('email', 'E-mail', 'required');
    $this->form_validation->set_rules('senha', 'Senha', 'required');

    if ($this->form_validation->run() == TRUE) {

      $identity = $this->input->post('email');
      $password = $this->input->post('senha');
      $remember = ($this->input->post('manter_conectado') != NULL ? TRUE : FALSE);

      if ($this->ion_auth->login($identity, $password, $remember)) {

        redirect('admin', 'refresh');

      } else{
        redirect('admin/login','refresh');

      }

    } else{
      $this->load->view('template/login');
    }
  }


  public function esqueceu()
  {
    $this->form_validation->set_rules('email', 'Email', 'required');

    if ($this->form_validation->run() == false) {
      //setup the input
      $data['email'] = array('name'    => 'email',
      'id'  => 'email',
    );
    //set any errors and display the form
    $data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
  }
  else {
    //run the forgotten password method to email an activation code to the user
    $forgotten = $this->ion_auth->forgotten_password($this->input->post('email'));

    if ($forgotten) { //if there were no errors
      $this->session->set_flashdata('message', $this->ion_auth->messages());


      $this->load->config('email');
      $this->load->library('email');

      $from = $this->config->item('smtp_user');
      $to = $this->input->post('email');
      $subject = "Recuperação de senha - Farma";
      $url_site = base_url('admin/login/codigo/'.$forgotten['forgotten_password_code']);
      $message = '
      <!DOCTYPE html>
      <html lang="en" dir="ltr">
      <head>
      <meta charset="utf-8">
      <title></title>
      </head>
      <body style="background:#F5F8FB;padding-top:20px;padding-bottom:20px">

      <div style="width: 500px;display: block;margin-left: auto;margin-right: auto;">

      <div style="background: #00A7BE;padding-top: 10px;padding-bottom: 10px;margin-top: 30px; box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
      <h1 style="font-size: 22px;color:#1E293B;font-weight: bold;text-align: center;color: #fff;">Redefinição de senha</h1>
      </div>

      <div style="background:#fff;padding:50px;text-align:center; box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
      <p style="color:#1E293B">Você solicitou a recuperação de senha. <br>
      Clique no link a seguir para alterar a senha. </p>

      <a href="'.$url_site.'" target="_blank" style="color:#00A7BE">Alterar senha</a>

      <p style="color:#1E293B">Por razões de segurança, após a redefinição da senha o link será bloqueado. </p>
      </div>

      <p style="text-align:center;margin-top:20px;display:block;color:#1E293B">Não responda a esta mensagem. <br>
      E-mails enviados para este endereço não serão respondidos. </p>

      </div>
      </body>
      </html>

      ';

      $this->email->set_newline("\r\n");
      $this->email->from('contato@farmaadrians.com.br', 'Recuperar senha');
      $this->email->to($to);
      $this->email->subject($subject);
      $this->email->message($message);

      if ($this->email->send()) {
      } else {
        show_error($this->email->print_debugger());
      }

      redirect('verificar-senha', 'refresh');

    }
    else {
      $this->session->set_flashdata('message', $this->ion_auth->errors());
      setMsg('recuperarSenha', "Email inválido", 'erro');
      redirect("esqueci-a-senha", 'refresh');
    }
  }

  $this->load->view('admin/template/esqueceu', $data);
}


public function verificar(){
  $this->load->view('admin/template/verificar_email');
}


public function codigo($codigo_senha = null)
{

	if ($codigo_senha) {

		$user = $this->ion_auth->forgotten_password_check($codigo_senha);
		if ($user)
		{
			$data['view'] = 'recuperar';
			$data['user'] = $user;
		}
	} else{
		redirect('', 'refresh');
	}

  $this->load->view('admin/template/recuperar', $data);

}


public function recuperar()
{
  if ($this->input->post('senha')) {
    $id = $this->input->post('id_usuario');
    $data = array(
      'password' => $this->input->post('senha')
    );

    $this->ion_auth->update($id, $data);
    redirect('', 'refresh');
  }
}

  public function sair(){
    $this->ion_auth->logout();
    redirect('','refresh');
  }


}
