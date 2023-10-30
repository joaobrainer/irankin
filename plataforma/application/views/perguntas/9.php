<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('header'); ?>
</head>
<body>

	<div id="perguntas">
		<div class="container">

			<div id="primeira" class="fadein-animacao" style="padding-top: 4rem;">
				<div class="row">
					<div class="col-md-12">
						<?php if ($this->session->userdata('lang') == 'pt-br') { ?>
							<h1>
								Escolha um botão de acordo com os dados disponíveis e mais confiáveis da história do paciente
							</h1>
						<?php } elseif ($this->session->userdata('lang') == 'en-us') { ?>
							<h1>
								Choice one button according to the most confidente available data from your patient.
							</h1>
						<?php } ?>
					</div>
				</div>

				<?php if ($this->session->flashdata('error') == 'error') { ?>
					<div class="row" style="margin-top: 2rem;">
						<div class="col-md-12">
							<div class="alert alert-danger" role="alert">
								<?php if ($this->session->userdata('lang') == 'pt-br') { ?>
									FALHA. Tente com mais dados.
								<?php } elseif ($this->session->userdata('lang') == 'en-us') { ?>
									FAIL. Try with more data.
								<?php } ?>
							</div>
						</div>
					</div>
				<?php } ?>

				<div class="row">
					<?php if ($walking == 'sim') { ?>
						<div class="col-md-6 colmd6mobile50wd" style='cursor: pointer;' onclick="location.href = '16';">
							<img src="<?php print_r(base_url('assets/images/84.png')); ?>" class="iconeperguntas">
							<?php if ($this->session->userdata('lang') == 'pt-br') { ?>
								<h3 class="texticones">Caminhando</h3>
							<?php } elseif ($this->session->userdata('lang') == 'en-us') { ?>
								<h3 class="texticones">Walking</h3>
							<?php } ?>
						</div>
					<?php } ?>

					<?php if ($using_the_toilet == 'sim') { ?>
						<div class="col-md-6 colmd6mobile50wd" style='cursor: pointer;' onclick="location.href = '13';">
							<img src="<?php print_r(base_url('assets/images/82.png')); ?>" class="iconeperguntas">
							<?php if ($this->session->userdata('lang') == 'pt-br') { ?>
								<h3 class="texticones">Usando o banheiro</h3>
							<?php } elseif ($this->session->userdata('lang') == 'en-us') { ?>
								<h3 class="texticones">Using the toilet</h3>
							<?php } ?>
						</div>
					<?php } ?>

					<?php if ($routine_daily_hygiene == 'sim') { ?>
						<div class="col-md-6 colmd6mobile50wd" style='cursor: pointer;' onclick="location.href = '14';">
							<img src="<?php print_r(base_url('assets/images/83.png')); ?>" class="iconeperguntas">
							<?php if ($this->session->userdata('lang') == 'pt-br') { ?>
								<h3 class="texticones">Rotina de higiene pessoal</h3>
							<?php } elseif ($this->session->userdata('lang') == 'en-us') { ?>
								<h3 class="texticones">Routine daily hygiene</h3>
							<?php } ?>
						</div>
					<?php } ?>

					<?php if ($eating == 'sim') { ?>
						<div class="col-md-6 colmd6mobile50wd" style='cursor: pointer;' onclick="location.href = '11';">
							<img src="<?php print_r(base_url('assets/images/81.png')); ?>" class="iconeperguntas">
							<?php if ($this->session->userdata('lang') == 'pt-br') { ?>
								<h3 class="texticones">Comendo</h3>
							<?php } elseif ($this->session->userdata('lang') == 'en-us') { ?>
								<h3 class="texticones">Eating</h3>
							<?php } ?>
						</div>
					<?php } ?>

					<?php if ($household_chores == 'sim') { ?>
						<div class="col-md-6 colmd6mobile50wd" style='cursor: pointer;' onclick="location.href = '19';">
							<img src="<?php print_r(base_url('assets/images/85.png')); ?>" class="iconeperguntas">
							<?php if ($this->session->userdata('lang') == 'pt-br') { ?>
								<h3 class="texticones">Tarefas domésticas</h3>
							<?php } elseif ($this->session->userdata('lang') == 'en-us') { ?>
								<h3 class="texticones">Household chores</h3>
							<?php } ?>
						</div>
					<?php } ?>

					<?php if ($household_expenses == 'sim') { ?>
						<div class="col-md-6 colmd6mobile50wd" style='cursor: pointer;' onclick="location.href = '21';">
							<img src="<?php print_r(base_url('assets/images/86.png')); ?>" class="iconeperguntas">
							<?php if ($this->session->userdata('lang') == 'pt-br') { ?>
								<h3 class="texticones">Despesas domésticas</h3>
							<?php } elseif ($this->session->userdata('lang') == 'en-us') { ?>
								<h3 class="texticones">Household expenses</h3>
							<?php } ?>
						</div>
					<?php } ?>

					<?php if ($local_traveling == 'sim') { ?>
						<div class="col-md-6 colmd6mobile50wd" style='cursor: pointer;' onclick="location.href = '23';">
							<img src="<?php print_r(base_url('assets/images/87.png')); ?>" class="iconeperguntas">
							<?php if ($this->session->userdata('lang') == 'pt-br') { ?>
								<h3 class="texticones">Mobilidade na cidade</h3>
							<?php } elseif ($this->session->userdata('lang') == 'en-us') { ?>
								<h3 class="texticones">Local traveling</h3>
							<?php } ?>
						</div>
					<?php } ?>

					<?php if ($local_shopping == 'sim') { ?>
						<div class="col-md-6 colmd6mobile50wd" style='cursor: pointer;' onclick="location.href = '25';">
							<img src="<?php print_r(base_url('assets/images/88.png')); ?>" class="iconeperguntas">
							<?php if ($this->session->userdata('lang') == 'pt-br') { ?>
								<h3 class="texticones">Compras locais</h3>
							<?php } elseif ($this->session->userdata('lang') == 'en-us') { ?>
								<h3 class="texticones">Local shopping</h3>
							<?php } ?>
						</div>
					<?php } ?>
				
					<?php if ($looking_after_family == 'sim') { ?>
						<div class="col-md-6 colmd6mobile50wd" style='cursor: pointer;' onclick="location.href = '27';">
							<img src="<?php print_r(base_url('assets/images/89.png')); ?>" class="iconeperguntas">
							<?php if ($this->session->userdata('lang') == 'pt-br') { ?>
								<h3 class="texticones">Cuidar da família em casa</h3>
							<?php } elseif ($this->session->userdata('lang') == 'en-us') { ?>
								<h3 class="texticones">Looking after family at home</h3>
							<?php } ?>
						</div>
					<?php } ?>

					<?php if ($social_activities == 'sim') { ?>
						<div class="col-md-6 colmd6mobile50wd" style='cursor: pointer;' onclick="location.href = '29';">
							<img src="<?php print_r(base_url('assets/images/810.png')); ?>" class="iconeperguntas">
							<?php if ($this->session->userdata('lang') == 'pt-br') { ?>
								<h3 class="texticones">Atividades sociais e de lazer</h3>
							<?php } elseif ($this->session->userdata('lang') == 'en-us') { ?>
								<h3 class="texticones">Social and free-time activities</h3>
							<?php } ?>
						</div>
					<?php } ?>
				

					<?php if ($relationships == 'sim') { ?>
						<div class="col-md-6 colmd6mobile50wd" style='cursor: pointer;' onclick="location.href = '31';">
							<img src="<?php print_r(base_url('assets/images/811.png')); ?>" class="iconeperguntas">
							<?php if ($this->session->userdata('lang') == 'pt-br') { ?>
								<h3 class="texticones">Relações</h3>
							<?php } elseif ($this->session->userdata('lang') == 'en-us') { ?>
								<h3 class="texticones">Relationships</h3>
							<?php } ?>
						</div>
					<?php } ?>

					<?php if ($working == 'sim') { ?>
						<div class="col-md-6 colmd6mobile50wd" style='cursor: pointer;' onclick="location.href = '33';">
							<img src="<?php print_r(base_url('assets/images/812.png')); ?>" class="iconeperguntas">
							<?php if ($this->session->userdata('lang') == 'pt-br') { ?>
								<h3 class="texticones">Trabalhando</h3>
							<?php } elseif ($this->session->userdata('lang') == 'en-us') { ?>
								<h3 class="texticones">Working</h3>
							<?php } ?>
						</div>
					<?php } ?>

					<?php if ($studying == 'sim') { ?>
						<div class="col-md-6 colmd6mobile50wd" style='cursor: pointer;' onclick="location.href = '35';">
							<img src="<?php print_r(base_url('assets/images/813.png')); ?>" class="iconeperguntas">
							<?php if ($this->session->userdata('lang') == 'pt-br') { ?>
								<h3 class="texticones">Estudando</h3>
							<?php } elseif ($this->session->userdata('lang') == 'en-us') { ?>
								<h3 class="texticones">Studying</h3>
							<?php } ?>
						</div>
					<?php } ?>

					<?php if ($home_activities == 'sim') { ?>
						<div class="col-md-6 colmd6mobile50wd" style='cursor: pointer;' onclick="location.href = '42';">
							<img src="<?php print_r(base_url('assets/images/42.png')); ?>" class="iconeperguntas">
							<?php if ($this->session->userdata('lang') == 'pt-br') { ?>
								<h3 class="texticones">Atividades em casa</h3>
							<?php } elseif ($this->session->userdata('lang') == 'en-us') { ?>
								<h3 class="texticones">Home activities</h3>
							<?php } ?>
						</div>
					<?php } ?>

				</div>

			</div>

		</div>
	</div>

</body>
<footer>

	<?php $this->load->view('footer'); ?>
<?php $this->load->view('footerperguntas'); ?>

</footer>
</html>