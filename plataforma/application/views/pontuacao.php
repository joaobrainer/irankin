<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('header'); ?>
</head>
<body>

	<div id="perguntas">
		<div class="container">

			<div id="pontuacao" class="fadein-animacao">
				<div class="row">
					<div class="col-md-12">
					<?php switch ($this->session->userdata('lang')) {		

						case 'pt-br': ?>
							<h3 class="texticonesselecionaveis">Pontuação</h3>
						<?php break; ?>

						<?php case 'en-us': ?>
							<h3 class="texticonesselecionaveis">Grading Score</h3>
						<?php break; ?>

						<?php case 'es-es': ?>
							<h3 class="texticonesselecionaveis">Puntaje</h3>
						<?php break; ?>

					<?php } ?>
						<h2><?php print_r($this->session->userdata('pontuacao')); ?></h2>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<p>
							<?php 
								$frase = '';
								if ($this->session->userdata('lang') == 'pt-br') {
									switch ($this->session->userdata('pontuacao')) {
										case '0':
											$message = 'Nenhum sintoma. O paciente desconhece qualquer nova limitação ou sintoma causado pelo AVC, nem mesmo sintomas leves.';
											break;
										case '1':
											$message = 'Sem incapacidade significativa apesar dos sintomas; capaz de realizar todas as tarefas e atividades usuais';
											break;
										case '2':
											$message = 'Incapacidade leve; incapaz de realizar todas as atividades anteriores, mas capaz de cuidar dos próprios assuntos sem assistência';
											break;
										case '3':
											$message = 'Incapacidade moderada; necessitando de alguma ajuda, mas capaz de andar sem ajuda';
											break;
										case '4':
											$message = 'Incapacidade moderadamente grave: incapaz de andar sem assistência e incapaz de atender às próprias necessidades corporais sem assistência';
											break;
										case '5':
											$message = 'Incapacidade grave: acamado, incontinente e necessitando de cuidados e atenção constante de cuidador';
											break;
										default:
											$message = '';
											break;
									}
								} elseif ($this->session->userdata('lang') == 'en-us') {
									switch ($this->session->userdata('pontuacao')) {
										case '0':
											$message = 'No symptoms at all. The patient is unaware of any new limitation or symptom caused by the stroke, not even minor.';
											break;
										case '1':
											$message = 'No significant disability despite symptoms; able to carry out all usual duties and activities';
											break;
										case '2':
											$message = 'Slight disability; unable to carry out all previous activities but able to look after own affairs without assistance';
											break;
										case '3':
											$message = 'Moderate disability; requiring some help, but able to walk without assistance';
											break;
										case '4':
											$message = 'Moderately severe disability: unable to walk without assistance, and unable to attend to own bodily needs without assistance';
											break;
										case '5':
											$message = 'Severe disability: bedridden, incontinent, and requiring constant nursing care and attention';
											break;
										default:
											$message = '';
											break;
									}
								} elseif ($this->session->userdata('lang') == 'es-es') {
									switch ($this->session->userdata('pontuacao')) {
										case '0':
											$message = 'Níngun síntoma. El paciente no es consciente de nuevas limitaciones o síntomas causados ​​por el ACV, ni siquiera síntomas leves.';
											break;
										case '1':
											$message = 'Ninguna discapacidad significativa a pesar de los síntomas; capaz de realizar todas las tareas y actividades habituales';
											break;
										case '2':
											$message = 'Discapacidad leve; incapaz de realizar todas las actividades anteriores, pero puede valerse por sí mismo, sin necesidad de ayuda.';
											break;
										case '3':
											$message = 'Discapacidad moderada; Requiere algo de ayuda pero puede caminar solo.';
											break;
										case '4':
											$message = 'Discapacidad moderadamente grave: incapaz de caminar solo e incapaz de satisfacer sus propias necesidades corporales sin ayuda.';
											break;
										case '5':
											$message = 'Discapacidad grave: Necesita cuidados (profesionales o no) durante las 24 horas del día. Es totalmente dependiente, requiriendo de asistencia continuada.';
											break;
										default:
											$message = '';
											break;
									}
								}

								print_r($message);
							?>
						</p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<?php switch ($this->session->userdata('lang')) {		

							case 'pt-br': ?>
								<a href="<?php print_r(base_url('')) ?>" class="btn btnpt">Refazer</a>
							<?php break; ?>

							<?php case 'en-us': ?>
								<a href="<?php print_r(base_url('')) ?>" class="btn btneng">Reload</a>
							<?php break; ?>						

							<?php case 'es-es': ?>
								<a href="<?php print_r(base_url('')) ?>" class="btn btneng">Rehacer</a>
							<?php break; ?>

						<?php } ?>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<img src="<?php print_r(base_url('assets/images/logo2.png')); ?>">
					</div>
				</div>

			</div>

		</div>
	</div>

</body>
<footer>

	<?php $this->load->view('footer'); ?>

</footer>
</html>