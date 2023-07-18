<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

	public function construct()
    {
        parent::construct();
    }

	public function index()
	{
		$this->load->view('cad');
	}

    public function cadastrar(){
        
		$usuario = array(
			'nome' => $this->input->post('nome'),
			'email' => $this->input->post('email'),
			'senha' => $this->input->post('senha'),
			'telefone' => $this->input->post('telefone')
		);	
		$this->load->model('usuario_model');
		$this->Usuario_model->salvar($usuario);
    }
}
