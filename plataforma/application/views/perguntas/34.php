<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('header'); ?>
</head>
<body>

	<div id="perguntas">
		<div class="container">

			<?php echo form_open("perguntas/resposta34", 'id="formprincipal"'); ?>

				<div id="primeira" class="fadein-animacao">
					<div class="row">
						<div class="col-md-12">
							<img src="<?php print_r(base_url('assets/images/34.png')); ?>" class="iconeperguntas">
							<?php switch ($this->session->userdata('lang')) {		

								case 'pt-br': ?>
									<h1>Ou o paciente agora não consegue retornar ao trabalho, mas permanece independente para as atividades diárias E não precisa de auxílio para caminhar, por exemplo?</h1>	
								<?php break; ?>

								<?php case 'en-us': ?>
									<h1>Or the patient is now unable to return to work, but remains independent for daily activities AND does not need assistance for walking, for example?</h1>	
								<?php break; ?>

								<?php case 'es-es': ?>
									<h1>¿O el paciente ahora no puede volver a trabajar, pero sigue siendo independiente para las actividades diarias Y no necesita ayuda para caminar, por ejemplo?</h1>			
								<?php break; ?>

								<?php case 'ch-sp': ?>
									<h1>或者患现在无法返回工作，但仍然能在不需要帮助下进行日常生活活动，并且能够独立行走/移动 ？</h1>
								<?php break; ?>

								<?php case 'ch-tr': ?>
									<h1>或者病人仍然可以獨立進行日常活動，並且不需要輔助工具行走，但現時無法返回工作崗位？</h1>
								<?php break; ?>

							<?php } ?>

							<label for="yes1" class="yes"><input type="radio" name="primeira" id="yes1" value="Sim" onclick="document.getElementById('formprincipal').submit();">
								<img src="<?php print_r(base_url('assets/images/yes.png')); ?>">
							</label>
							<label for="no1" class="no"><input type="radio" name="primeira" id="no1" value="Não" onclick="document.getElementById('formprincipal').submit();">
								<img src="<?php print_r(base_url('assets/images/no.png')); ?>">
							</label>
							
						</div>
					</div>
				</div>

			<?php echo form_close(); ?>

		</div>
	</div>

</body>
<footer>

	<?php $this->load->view('footer'); ?>
<?php $this->load->view('footerperguntas'); ?>

</footer>
</html>