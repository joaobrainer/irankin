<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {

		$dados['titulo'] = "iRankin | Início";

		$this->session->set_userdata('lang', 'pt-br');

		$this->session->set_userdata('pergunta', '');

		$this->load->view('home', $dados);
		
	}

	public function loadValidation() {
		
		$dados['titulo'] = "iRankin | Validation";

		$this->load->view('validation', $dados);

	}

	public function redirectValidation($language) {
		
		$number = rand(1,2);


		if ($language == 'pt-br') {
			redirect('https://www.cognitoforms.com/AmbulatorioNeurologiaVascular/irankinbrasilwith');
		// 	if ($number == 1) {
		// 		redirect('https://www.cognitoforms.com/AmbulatorioNeurologiaVascular/IRankinBrasilwithout');
		// 	} else {
		// 		redirect('https://www.cognitoforms.com/AmbulatorioNeurologiaVascular/irankinbrasilwith');
		// 	}
		} elseif ($language == 'en-us') {
			redirect('https://www.cognitoforms.com/AmbulatorioNeurologiaVascular/irankinglobalenglishwithstrokenet');
		// 	if ($number == 1) {
		// 		redirect('https://www.cognitoforms.com/AmbulatorioNeurologiaVascular/irankinglobalenglishwithstrokenet');
		// 	} else {
		// 		redirect('https://www.cognitoforms.com/AmbulatorioNeurologiaVascular/irankinglobalenglishwithoutstrokenet');
		// 	}
		} else {
			redirect('https://www.cognitoforms.com/AmbulatorioNeurologiaVascular/irankinglobalenglishwithstrokenet');
		// 	if ($number == 1) {
		// 		redirect('https://www.cognitoforms.com/AmbulatorioNeurologiaVascular/irankinglobalenglishwithstrokenet');
		// 	} else {
		// 		redirect('https://www.cognitoforms.com/AmbulatorioNeurologiaVascular/irankinglobalenglishwithoutstrokenet');
		// 	}
		}

	}

	public function loadPrivacyPolicy() {
		
		$dados['titulo'] = "iRankin | Privacy Policy";

		$this->load->view('privacy', $dados);

	}










}
