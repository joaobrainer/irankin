<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Respostas extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('Respostas_model');
        }

        public function index()
        {
                $dados['titulo'] = 'Responses overview';
                $dados['submissions'] = $this->Respostas_model->listarTodas();

                $this->load->view('respostas/lista', $dados);
        }
}
