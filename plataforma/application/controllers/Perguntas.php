<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perguntas extends CI_Controller {

        public function __construct() {
                parent::__construct();

                $this->load->model('Respostas_model');

                if ($this->session->userdata('respostas_usuario') === NULL) {
                        $this->session->set_userdata('respostas_usuario', array());
                }

                if ($this->session->userdata('respostas_salvas') === NULL) {
                        $this->session->set_userdata('respostas_salvas', false);
                }
        }

	public function loadPergunta3() {

		$dados['titulo'] = "iRankin";

                if (isset($_GET['lang'])) {
                        switch ($_GET['lang']) {
                                case 'pt-br':
					$this->session->set_userdata('lang', 'pt-br');
					break;
				case 'en-us':
					$this->session->set_userdata('lang', 'en-us');
					break;
				case 'es-es':
					$this->session->set_userdata('lang', 'es-es');
					break;
				case 'ch-sp':
					$this->session->set_userdata('lang', 'ch-sp');
					break;
				case 'ch-tr':
					$this->session->set_userdata('lang', 'ch-tr');
					break;				
				default:
					$this->session->set_userdata('lang', 'en-us');
					break;
                        }
                }

                $this->session->set_userdata('respostas_usuario', array());
                $this->session->set_userdata('respostas_salvas', false);

                $this->session->set_userdata('pergunta', '3');

		$this->load->view('perguntas/3', $dados);

	}

        public function resposta3() {

                $primeira = $this->input->post('primeira');

                $this->registrarRespostaAtual($primeira);

                if ($primeira == 'Sim') {
                        redirect('perguntas/4');
                } else {
			redirect('perguntas/5');
		}

	}

	public function loadPergunta4() {

		$dados['titulo'] = "iRankin";

		$this->session->set_userdata('pergunta', '4');

		$this->load->view('perguntas/4', $dados);

	}

        public function resposta4() {

                $primeira = $this->input->post('primeira');

                $this->registrarRespostaAtual($primeira);

                if ($primeira == 'Sim') {
                        $this->session->set_userdata('pontuacao', '4');
                        redirect('pontuacao');
		} else {
			$this->session->set_userdata('pontuacao', '5');
			redirect('pontuacao');
		}

	}

	public function loadPergunta5() {

		$lang = $this->session->userdata('lang');
		for ($i=0; $i < 20; $i++) { 
			$this->session->set_userdata('resposta5-'.$i, '');
		}
		
		$dados['titulo'] = "iRankin";

		$this->session->set_userdata('pergunta', '5');

		$this->load->view('perguntas/5', $dados);

	}

        public function resposta5() {

                $primeira = $this->input->post('sintomas');

                if ($primeira) {
                        $this->registrarRespostaAtual($primeira);

                        $qnt = count($primeira);
                        if ($qnt == 1) {
                                foreach ($primeira as $row) {
                                        if ($row == 'Motores') {
						redirect('perguntas/16');
					}
				}
			}
			foreach ($primeira as $row) {
				if ($row == 'Nenhum') {
					$this->session->set_userdata('pontuacao', '0');
					redirect('pontuacao');
				}
			}
			$i = 0;
			foreach ($primeira as $row) {
				$this->session->set_userdata('resposta5-'.$i, $row);
				$i++;
			}
			redirect('perguntas/6');
			// print_r($this->session->userdata());
		} else {
			$this->session->set_flashdata('error', 'error');
			redirect('perguntas/5');
		}

	}

	public function loadPergunta6() {

		$dados['titulo'] = "iRankin";

		$this->session->set_userdata('pergunta', '6');

		$this->load->view('perguntas/6', $dados);

	}

        public function resposta6() {

                $primeira = $this->input->post('primeira');

                $this->registrarRespostaAtual($primeira);

                if ($primeira == 'Sim') {
                        $this->session->set_userdata('pontuacao', '1');
                        redirect('pontuacao');
		} else {
			redirect('perguntas/8');
		}

	}

	public function loadPergunta8() {

		$dados['titulo'] = "iRankin";

		$this->session->set_userdata('pergunta', '8');

		$this->load->view('perguntas/8', $dados);

	}

	public function loadPergunta9() {

		$dados['titulo'] = "iRankin";
		$dados['walking'] = 'nao';
		$dados['routine_daily_hygiene'] = 'nao';
		$dados['using_the_toilet'] = 'nao';
		$dados['eating'] = 'nao';
		$dados['household_chores'] = 'nao';
		$dados['household_expenses'] = 'nao';
		$dados['local_traveling'] = 'nao';
		$dados['local_shopping'] = 'nao';
		$dados['looking_after_family'] = 'nao';
		$dados['social_activities'] = 'nao';
		$dados['relationships'] = 'nao';
		$dados['working'] = 'nao';
		$dados['studying'] = 'nao';
		$dados['home_activities'] = 'nao';

		foreach ($this->session->userdata() as $row) {
			if ($row == 'Motores' || $row == 'Desequilíbrio' || $row == 'Parestesia' || $row == 'Incontinencia' || $row == 'Visuais' || $row == 'Dor') {
				$dados['walking'] = 'sim';
			}
			if ($row == 'Motores' || $row == 'Higiene' || $row == 'Parestesia' || $row == 'Visuais' || $row == 'Cognitivos' || $row == 'Vestirse' || $row == 'Incontinencia') {
				$dados['routine_daily_hygiene'] = 'sim';
			}
			if ($row == 'Motores' || $row == 'Higiene' || $row == 'Vestirse' || $row == 'Visuais') {
				$dados['using_the_toilet'] = 'sim';
			}
			if ($row == 'Alimentacao' || $row == 'Sensibilidade' || $row == 'Parestesia' || $row == 'Visuais' || $row == 'Deglutição') {
				$dados['eating'] = 'sim';
			}
			if ($row == 'Fala' || $row == 'Motores' || $row == 'Parestesia' || $row == 'Sensibilidade' || $row == 'Depressão' || $row == 'Cognitivos' || $row == 'Dor' || $row == 'Visuais' ) {
				$dados['household_chores'] = 'sim';
			}
			if ($row == 'Leitura' || $row == 'Escrita' || $row == 'Cognitivos' || $row == 'Visuais') {
				$dados['household_expenses'] = 'sim';
			}
			if ($row == 'Motores' || $row == 'Fala' || $row == 'Visuais' || $row == 'Desequilíbrio' || $row == 'Cognitivos' || $row == 'Incontinencia') {
				$dados['local_traveling'] = 'sim';
			}
			if ($row == 'Motores' || $row == 'Fala' || $row == 'Desequilíbrio' || $row == 'Visuais' || $row == 'Cognitivos') {
				$dados['local_shopping'] = 'sim';
			}
			if ($row == 'Motores' || $row == 'Desequilíbrio' || $row == 'Cognitivos' || $row == 'Visuais') {
				$dados['looking_after_family'] = 'sim';
			}
			if ($row == 'Motores' || $row == 'Fala' || $row == 'Alimentacao' || $row == 'Sensibilidade' || $row == 'Cognitivos' || $row == 'Depressão' || $row == 'Incontinencia' || $row == 'Dor' || $row == 'Visuais' || $row == 'Fadiga') {
				$dados['social_activities'] = 'sim';
			}
			if ($row == 'Fala' || $row == 'Cognitivos' || $row == 'Depressão' || $row == 'Dor' || $row == 'Fadiga') {
				$dados['relationships'] = 'sim';
			}
			if ($row == 'Fala' || $row == 'Leitura' || $row == 'Motores' || $row == 'Parestesia' || $row == 'Depressão' || $row == 'Escrita' || $row == 'Sensibilidade' || $row == 'Cognitivos' || $row == 'Visuais' || $row == 'Fadiga') {
				$dados['working'] = 'sim';
			}
			if ($row == 'Fala' || $row == 'Leitura' || $row == 'Depressão' || $row == 'Motores' || $row == 'Escrita' || $row == 'Cognitivos' || $row == 'Visuais' || $row == 'Fadiga') {
				$dados['studying'] = 'sim';
			}
			if ($row == 'Fala' || $row == 'Motores' || $row == 'Parestesia' || $row == 'Sensibilidade' || $row == 'Depressão' || $row == 'Cognitivos' || $row == 'Dor' || $row == 'Visuais' ) {
				$dados['home_activities'] = 'sim';
			}
		}

		$this->session->set_userdata('respostas_historia_usuario', array());

		$this->session->set_userdata('pergunta', '9');

		$this->load->view('perguntas/9', $dados);

	}

	public function loadPergunta11() {

		$dados['titulo'] = "iRankin";

		$this->session->set_userdata('pergunta', '11');

		$this->load->view('perguntas/11', $dados);

	}

        public function resposta11() {

                $primeira = $this->input->post('primeira');

                $this->registrarRespostaAtual($primeira);

                if ($primeira == 'Sim') {
                        $this->adicionaPontuacao('4');
                        $this->validaRespostas();
		} elseif ($primeira == 'Não') {
			$this->adicionaResposta('12');
		} else {
			$this->session->set_flashdata('error', 'error');
			redirect('perguntas/9');
		}

	}

	public function loadPergunta12() {

		$dados['titulo'] = "iRankin";

		$this->session->set_userdata('pergunta', '12');

		$this->load->view('perguntas/12', $dados);

	}

        public function resposta12() {

                $primeira = $this->input->post('primeira');

                $this->registrarRespostaAtual($primeira);

                if ($primeira == 'Sim') {
                        $this->adicionaPontuacao('3');
                        $this->validaRespostas();
		} elseif ($primeira == 'Não') {
			$this->adicionaPontuacao('2');
			$this->validaRespostas();
		} else {
			$this->session->set_flashdata('error', 'error');
			redirect('perguntas/9');
		}

	}

	public function loadPergunta13() {

		$dados['titulo'] = "iRankin";

		$this->session->set_userdata('pergunta', '13');

		$this->load->view('perguntas/13', $dados);

	}

        public function resposta13() {

                $primeira = $this->input->post('primeira');

                $this->registrarRespostaAtual($primeira);

                if ($primeira == 'Sim') {
                        $this->adicionaPontuacao('4');
                        $this->validaRespostas();
		} elseif ($primeira == 'Não') {
			$this->adicionaPontuacao('2');
			$this->validaRespostas();
		} else {
			$this->session->set_flashdata('error', 'error');
			redirect('perguntas/9');
		}

	}

	public function loadPergunta14() {

		$dados['titulo'] = "iRankin";

		$this->session->set_userdata('pergunta', '14');

		$this->load->view('perguntas/14', $dados);

	}

        public function resposta14() {

                $primeira = $this->input->post('primeira');

                $this->registrarRespostaAtual($primeira);

                if ($primeira == 'Sim') {
                        $this->adicionaPontuacao('4');
                        $this->validaRespostas();
		} elseif ($primeira == 'Não') {
			$this->adicionaResposta('15');
		} else {
			$this->session->set_flashdata('error', 'error');
			redirect('perguntas/9');
		}

	}

	public function loadPergunta15() {

		$dados['titulo'] = "iRankin";

		$this->session->set_userdata('pergunta', '15');

		$this->load->view('perguntas/15', $dados);

	}

        public function resposta15() {

                $primeira = $this->input->post('primeira');

                $this->registrarRespostaAtual($primeira);

                if ($primeira == 'Sim') {
                        $this->adicionaPontuacao('3');
                        $this->validaRespostas();
		} elseif ($primeira == 'Não') {
			$this->adicionaPontuacao('2');
			$this->validaRespostas();
		} else {
			$this->session->set_flashdata('error', 'error');
			redirect('perguntas/9');
		}

	}

	public function loadPergunta16() {

		$dados['titulo'] = "iRankin";

		$this->session->set_userdata('pergunta', '16');

		$this->load->view('perguntas/16', $dados);

	}

        public function resposta16() {

                $primeira = $this->input->post('primeira');

                $this->registrarRespostaAtual($primeira);

                if ($primeira == 'Sim') {
                        $this->adicionaResposta('17');
                } elseif ($primeira == 'Não') {
			$this->adicionaResposta('18');
		} else {
			$this->session->set_flashdata('error', 'error');
			redirect('perguntas/9');
		}

	}

	public function loadPergunta17() {

		$dados['titulo'] = "iRankin";

		$this->session->set_userdata('pergunta', '17');

		$this->load->view('perguntas/17', $dados);

	}

        public function resposta17() {

                $primeira = $this->input->post('primeira');

                $this->registrarRespostaAtual($primeira);

                if ($primeira == 'Sim') {
                        $this->adicionaPontuacao('3');
                        $this->validaRespostas();
		} elseif ($primeira == 'Não') {
			$this->adicionaPontuacao('2');
			$this->validaRespostas();
		} else {
			$this->session->set_flashdata('error', 'error');
			redirect('perguntas/9');
		}

	}

	public function loadPergunta18() {

		$dados['titulo'] = "iRankin";

		$this->session->set_userdata('pergunta', '18');

		$this->load->view('perguntas/18', $dados);

	}

        public function resposta18() {

                $primeira = $this->input->post('primeira');

                $this->registrarRespostaAtual($primeira);

                if ($primeira == 'Sim') {
                        $this->adicionaPontuacao('4');
                        $this->validaRespostas();
		} elseif ($primeira == 'Não') {
			$this->adicionaResposta('17');
		} else {
			$this->session->set_flashdata('error', 'error');
			redirect('perguntas/9');
		}

	}

	public function loadPergunta19() {

		$dados['titulo'] = "iRankin";

		$this->session->set_userdata('pergunta', '19');

		$this->load->view('perguntas/19', $dados);

	}

        public function resposta19() {

                $primeira = $this->input->post('primeira');

                $this->registrarRespostaAtual($primeira);

                if ($primeira == 'Sim') {
                        $this->adicionaPontuacao('3');
                        $this->validaRespostas();
		} elseif ($primeira == 'Não') {
			$this->adicionaResposta('20');
		} else {
			$this->session->set_flashdata('error', 'error');
			redirect('perguntas/9');
		}

	}

	public function loadPergunta20() {

		$dados['titulo'] = "iRankin";

		$this->session->set_userdata('pergunta', '20');

		$this->load->view('perguntas/20', $dados);

	}

        public function resposta20() {

                $primeira = $this->input->post('primeira');

                $this->registrarRespostaAtual($primeira);

                if ($primeira == 'Sim') {
                        $this->adicionaPontuacao('2');
                        $this->validaRespostas();
		} elseif ($primeira == 'Não') {
			$this->validaRespostas();
		} else {
			$this->session->set_flashdata('error', 'error');
			redirect('perguntas/9');
		}

	}

	public function loadPergunta21() {

		$dados['titulo'] = "iRankin";

		$this->session->set_userdata('pergunta', '21');

		$this->load->view('perguntas/21', $dados);

	}

        public function resposta21() {

                $primeira = $this->input->post('primeira');

                $this->registrarRespostaAtual($primeira);

                if ($primeira == 'Sim') {
                        $this->adicionaResposta('22');
                } elseif ($primeira == 'Não') {
			$this->adicionaPontuacao('3');
			$this->validaRespostas();
		} else {
			$this->session->set_flashdata('error', 'error');
			redirect('perguntas/9');
		}

	}

	public function loadPergunta22() {

		$dados['titulo'] = "iRankin";

		$this->session->set_userdata('pergunta', '22');

		$this->load->view('perguntas/22', $dados);

	}

        public function resposta22() {

                $primeira = $this->input->post('primeira');

                $this->registrarRespostaAtual($primeira);

                if ($primeira == 'Sim') {
                        $this->adicionaPontuacao('2');
                        $this->validaRespostas();
		} elseif ($primeira == 'Não') {
			$this->validaRespostas();
		} else {
			$this->session->set_flashdata('error', 'error');
			redirect('perguntas/9');
		}

	}

	public function loadPergunta23() {

		$dados['titulo'] = "iRankin";

		$this->session->set_userdata('pergunta', '23');

		$this->load->view('perguntas/23', $dados);

	}

        public function resposta23() {

                $primeira = $this->input->post('primeira');

                $this->registrarRespostaAtual($primeira);

                if ($primeira == 'Sim') {
                        $this->adicionaPontuacao('3');
                        $this->validaRespostas();
		} elseif ($primeira == 'Não') {
			$this->adicionaResposta('24');
		} else {
			$this->session->set_flashdata('error', 'error');
			redirect('perguntas/9');
		}

	}

	public function loadPergunta24() {

		$dados['titulo'] = "iRankin";

		$this->session->set_userdata('pergunta', '24');

		$this->load->view('perguntas/24', $dados);

	}

        public function resposta24() {

                $primeira = $this->input->post('primeira');

                $this->registrarRespostaAtual($primeira);

                if ($primeira == 'Sim') {
                        $this->adicionaPontuacao('2');
                        $this->validaRespostas();
		} elseif ($primeira == 'Não') {
			$this->validaRespostas();
		} else {
			$this->session->set_flashdata('error', 'error');
			redirect('perguntas/9');
		}

	}

	public function loadPergunta25() {

		$dados['titulo'] = "iRankin";

		$this->session->set_userdata('pergunta', '25');

		$this->load->view('perguntas/25', $dados);

	}

        public function resposta25() {

                $primeira = $this->input->post('primeira');

                $this->registrarRespostaAtual($primeira);

                if ($primeira == 'Sim') {
                        $this->adicionaResposta('26');
                } elseif ($primeira == 'Não') {
			$this->adicionaPontuacao('3');
			$this->validaRespostas();
		} else {
			$this->session->set_flashdata('error', 'error');
			redirect('perguntas/9');
		}

	}

	public function loadPergunta26() {

		$dados['titulo'] = "iRankin";

		$this->session->set_userdata('pergunta', '26');

		$this->load->view('perguntas/26', $dados);

	}

        public function resposta26() {

                $primeira = $this->input->post('primeira');

                $this->registrarRespostaAtual($primeira);

                if ($primeira == 'Sim') {
                        $this->adicionaPontuacao('2');
                        $this->validaRespostas();
		} elseif ($primeira == 'Não') {
			$this->validaRespostas();
		} else {
			$this->session->set_flashdata('error', 'error');
			redirect('perguntas/9');
		}

	}

	public function loadPergunta27() {

		$dados['titulo'] = "iRankin";

		$this->session->set_userdata('pergunta', '27');

		$this->load->view('perguntas/27', $dados);

	}

        public function resposta27() {

                $primeira = $this->input->post('primeira');

                $this->registrarRespostaAtual($primeira);

                if ($primeira == 'Sim') {
                        $this->adicionaResposta('28');
                } elseif ($primeira == 'Não') {
			$this->validaRespostas();
		} else {
			$this->session->set_flashdata('error', 'error');
			redirect('perguntas/9');
		}

	}

	public function loadPergunta28() {

		$dados['titulo'] = "iRankin";

		$this->session->set_userdata('pergunta', '28');

		$this->load->view('perguntas/28', $dados);

	}

        public function resposta28() {

                $primeira = $this->input->post('primeira');

                $this->registrarRespostaAtual($primeira);

                if ($primeira == 'Sim') {
                        $this->adicionaPontuacao('2');
                        $this->validaRespostas();
		} elseif ($primeira == 'Não') {
			$this->adicionaPontuacao('3');
			$this->validaRespostas();
		} else {
			$this->session->set_flashdata('error', 'error');
			redirect('perguntas/9');
		}

	}

	public function loadPergunta29() {

		$dados['titulo'] = "iRankin";

		$this->session->set_userdata('pergunta', '29');

		$this->load->view('perguntas/29', $dados);

	}

        public function resposta29() {

                $primeira = $this->input->post('primeira');

                $this->registrarRespostaAtual($primeira);

                if ($primeira == 'Sim') {
                        $this->validaRespostas();
                } elseif ($primeira == 'Não') {
			$this->adicionaResposta('30');
		}

	}

	public function loadPergunta30() {

		$dados['titulo'] = "iRankin";

		$this->session->set_userdata('pergunta', '30');

		$this->load->view('perguntas/30', $dados);

	}

        public function resposta30() {

                $primeira = $this->input->post('primeira');

                $this->registrarRespostaAtual($primeira);

                if ($primeira == 'Sim') {
                        $this->adicionaPontuacao('2');
                        $this->validaRespostas();
		} elseif ($primeira == 'Não') {
			$this->validaRespostas();
		} else {
			$this->session->set_flashdata('error', 'error');
			redirect('perguntas/9');
		}

	}

	public function loadPergunta31() {

		$dados['titulo'] = "iRankin";

		// $this->session->set_userdata('pergunta', '31');

		// $this->load->view('perguntas/31', $dados);

		redirect('perguntas/32');

	}

        public function resposta31() {

                $primeira = $this->input->post('primeira');

                $this->registrarRespostaAtual($primeira);

                if ($primeira == 'Sim') {
                        redirect('perguntas/32');
                } elseif ($primeira == 'Não') {
			$this->session->set_flashdata('error', 'error');
			redirect('perguntas/9');
		} else {
			$this->session->set_flashdata('error', 'error');
			redirect('perguntas/9');
		}

	}

	public function loadPergunta32() {

		$dados['titulo'] = "iRankin";

		$this->session->set_userdata('pergunta', '32');

		$this->load->view('perguntas/32', $dados);

	}

        public function resposta32() {

                $primeira = $this->input->post('primeira');

                $this->registrarRespostaAtual($primeira);

                if ($primeira == 'Sim') {
                        $this->adicionaPontuacao('2');
                        $this->validaRespostas();
		} elseif ($primeira == 'Não') {
			$this->validaRespostas();
		} else {
			$this->session->set_flashdata('error', 'error');
			redirect('perguntas/9');
		}

	}

	public function loadPergunta33() {

		$dados['titulo'] = "iRankin";

		$this->session->set_userdata('pergunta', '33');

		$this->load->view('perguntas/33', $dados);

	}

        public function resposta33() {

                $primeira = $this->input->post('primeira');

                $this->registrarRespostaAtual($primeira);

                if ($primeira == 'Sim') {
                        $this->adicionaPontuacao('2');
                        $this->validaRespostas();
		} elseif ($primeira == 'Não') {
			$this->adicionaResposta('34');
		} else {
			$this->session->set_flashdata('error', 'error');
			redirect('perguntas/9');
		}

	}

	public function loadPergunta34() {

		$dados['titulo'] = "iRankin";

		$this->session->set_userdata('pergunta', '34');

		$this->load->view('perguntas/34', $dados);

	}

        public function resposta34() {

                $primeira = $this->input->post('primeira');

                $this->registrarRespostaAtual($primeira);

                if ($primeira == 'Sim') {
                        $this->adicionaPontuacao('2');
                        $this->validaRespostas();
		} elseif ($primeira == 'Não') {
			$this->validaRespostas();
		} else {
			$this->session->set_flashdata('error', 'error');
			redirect('perguntas/9');
		}

	}

	public function loadPergunta35() {

		$dados['titulo'] = "iRankin";

		$this->session->set_userdata('pergunta', '35');

		$this->load->view('perguntas/35', $dados);

	}

        public function resposta35() {

                $primeira = $this->input->post('primeira');

                $this->registrarRespostaAtual($primeira);

                if ($primeira == 'Sim') {
                        $this->adicionaResposta('36');
                } elseif ($primeira == 'Não') {
			$this->validaRespostas();
		} else {
			$this->session->set_flashdata('error', 'error');
			redirect('perguntas/9');
		}

	}

	public function loadPergunta36() {

		$dados['titulo'] = "iRankin";

		$this->session->set_userdata('pergunta', '36');

		$this->load->view('perguntas/36', $dados);

	}

        public function resposta36() {

                $primeira = $this->input->post('primeira');

                $this->registrarRespostaAtual($primeira);

                if ($primeira == 'Sim') {
                        $this->adicionaPontuacao('2');
                        $this->validaRespostas();
		} elseif ($primeira == 'Não') {
			$this->adicionaPontuacao('3');
			$this->validaRespostas();
		} else {
			$this->session->set_flashdata('error', 'error');
			redirect('perguntas/9');
		}

	}

	public function loadPergunta41() {

		$dados['titulo'] = "iRankin";

		$this->session->set_userdata('pergunta', '41');

		$this->load->view('perguntas/41', $dados);

	}

        public function resposta41() {

                $primeira = $this->input->post('primeira');

                $this->registrarRespostaAtual($primeira);

                if ($primeira == 'Sim') {
                        $this->session->set_userdata('pontuacao', '4');
                        redirect('pontuacao');
		} else {
			$this->session->set_userdata('pontuacao', '5');
			redirect('pontuacao');
		}

	}

	public function loadPergunta42() {

		$dados['titulo'] = "iRankin";

		$this->session->set_userdata('pergunta', '42');

		$this->load->view('perguntas/42', $dados);

	}

        public function resposta42() {

                $primeira = $this->input->post('primeira');

                $this->registrarRespostaAtual($primeira);

                if ($primeira == 'Sim') {
                        $this->adicionaPontuacao('2');
                        $this->validaRespostas();
                } else {
                        $this->adicionaPontuacao('3');
                        $this->validaRespostas();
                }

        }

        private function registrarRespostaAtual($resposta) {

                if ($resposta === NULL || $resposta === '') {
                        return;
                }

                $pergunta = $this->session->userdata('pergunta');
                $respostas = $this->session->userdata('respostas_usuario');

                if (!is_array($respostas)) {
                        $respostas = array();
                }

                $respostas[] = array(
                        'pergunta' => $pergunta,
                        'resposta' => $resposta,
                );

                $this->session->set_userdata('respostas_usuario', $respostas);
        }

        private function salvarResultado() {

                if ($this->session->userdata('respostas_salvas')) {
                        return;
                }

                $respostas = $this->session->userdata('respostas_usuario');

                if (!is_array($respostas)) {
                        $respostas = array();
                }

                $this->Respostas_model->registrar(
                        $this->session->userdata('lang'),
                        $this->session->userdata('pontuacao'),
                        $respostas
                );

                $this->session->set_userdata('respostas_salvas', true);
        }






        public function loadPontuacao() {

                if ($this->session->userdata('lang') == 'pt-br') {
                        $dados['titulo'] = "iRankin | Pontuação";
		} elseif ($this->session->userdata('lang') == 'en-us') {
			$dados['titulo'] = "iRankin | Grading Score";
		} elseif ($this->session->userdata('lang') == 'es-es'){
			$dados['titulo'] = "iRankin | Puntuación";
		}elseif ($this->session->userdata('lang') == 'ch-sp') {
			$dados['titulo'] = "iRankin | 评分";
		}elseif ($this->session->userdata('lang') == 'ch-tr') {
			$dados['titulo'] = "iRankin | 評估分數";
                }else{
                        $dados['titulo'] = "iRankin | Grading Score";
                }

                $this->salvarResultado();

                $this->session->set_userdata('pergunta', '');
                $this->session->set_userdata('array_pontuacao', array());
                $this->session->set_userdata('respostas_historia_usuario', array());
                $this->session->set_userdata('respostas_usuario', array());

                $this->load->view('pontuacao', $dados);

        }

	public function loadSobre() {
		
		if ($this->session->userdata('lang') == 'pt-br') {
			$dados['titulo'] = "iRankin | Sobre";
		} elseif ($this->session->userdata('lang') == 'en-us') {
			$dados['titulo'] = "iRankin | About";
		} else {
			$dados['titulo'] = "iRankin | About";
		}

		$this->session->set_userdata('pergunta', '');

		$this->load->view('sobre', $dados);

	}

	public function todasRespostas() { 
		
		$respostas = $this->input->post('historia');

		if (count($respostas) > 0) {
			$this->session->set_userdata('respostas_historia_usuario', $respostas);
			
			$this->validaRespostas();
		}else{
			$this->session->set_flashdata('error', 'error');
			redirect('perguntas/9');
		}
		
	}

	public function validaRespostas() { 

		$respostas = $this->session->userdata('respostas_historia_usuario');

		if (count($respostas) == 0) {
			redirect('pontuacao');
		}
		$removedItem = array_shift($respostas);
		$this->session->set_userdata('respostas_historia_usuario', $respostas);
		redirect('perguntas/'.$removedItem);

	}

	public function adicionaResposta($resposta) {

        $respostas = $this->session->userdata('respostas_historia_usuario');
        array_unshift($respostas, $resposta);
        $this->session->set_userdata('respostas_historia_usuario', $respostas);

		$this->validaRespostas();
    }

	public function adicionaPontuacao($pontuação) { 

		$pontuação_resp = (int) $pontuação;
		$pontuacao_session = (int) $this->session->userdata('pontuacao');

		if ($pontuação_resp > $pontuacao_session) {
			$this->session->set_userdata('pontuacao', $pontuação);
		}

	}









}
