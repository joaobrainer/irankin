<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {

		$dados['titulo'] = "iRankin | Início";

		$this->session->set_userdata('lang', 'en-us');

		if (isset($_GET['lang'])) {
			$this->session->set_userdata('lang', $_GET['lang']);
		}

                $this->session->set_userdata('pergunta', '');
                $this->session->set_userdata('respostas_historia_usuario', array());
                $this->session->set_userdata('pontuacao', '0');
                $this->session->set_userdata('respostas_usuario', array());
                $this->session->set_userdata('respostas_salvas', false);
                $this->session->set_userdata('respostas_identificacao', array());

                $this->load->view('home', $dados);

        }

        public function loadIdentificacao()
        {
                $dados['titulo'] = "iRankin | Identificação";

                if (isset($_GET['lang'])) {
                        $this->session->set_userdata('lang', $_GET['lang']);
                }

                if ($this->session->userdata('lang') === NULL) {
                        $this->session->set_userdata('lang', 'en-us');
                }

                if ($this->session->userdata('respostas_identificacao') === NULL) {
                        $this->session->set_userdata('respostas_identificacao', array());
                }

                $this->session->set_userdata('respostas_salvas', false);
                $this->session->set_userdata('pergunta', '');
                $this->session->set_userdata('respostas_usuario', $this->session->userdata('respostas_identificacao'));

                $this->load->view('identificacao', $dados);
        }

        public function salvarIdentificacao()
        {
                $nomePaciente = trim((string) $this->input->post('nome_paciente'));
                $nomeRespondente = trim((string) $this->input->post('nome_respondente'));
                $parentesco = trim((string) $this->input->post('parentesco'));
                $hospital = trim((string) $this->input->post('hospital'));

                if ($nomePaciente === '' || $nomeRespondente === '' || $parentesco === '' || $hospital === '') {
                        $this->session->set_flashdata('error', 'Preencha todos os campos.');
                        redirect('identificacao');
                }

                $respostasIdentificacao = array(
                        array('pergunta' => 'Patient name', 'resposta' => $nomePaciente),
                        array('pergunta' => 'Respondent name', 'resposta' => $nomeRespondente),
                        array('pergunta' => 'Respondent relationship', 'resposta' => $parentesco),
                        array('pergunta' => 'Hospital name', 'resposta' => $hospital),
                );

                $this->session->set_userdata('respostas_identificacao', $respostasIdentificacao);
                $this->session->set_userdata('respostas_usuario', $respostasIdentificacao);
                $this->session->set_userdata('respostas_salvas', false);
                $this->session->set_userdata('pontuacao', '0');

                $lang = $this->session->userdata('lang');
                $langParam = $lang ? '?lang=' . $lang : '';

                redirect('perguntas/3' . $langParam);
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
