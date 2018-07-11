<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index() {
		$dados['titulo'] = 'Tela de início';
		$dados['obj'] = array('name' => "Usuário padrão",
							  'email' => "default@default.com");
		$dados['msg'] = "Mensagem padrão";
		$this->load->view('fix/header3', $dados);
		$this->load->view('fix/home');
		$this->load->view('fix/footer3');
	}
}
