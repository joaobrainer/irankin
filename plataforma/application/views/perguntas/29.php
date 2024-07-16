<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('header'); ?>
</head>
<body>

	<div id="perguntas">
		<div class="container">

			<?php echo form_open("perguntas/resposta29", 'id="formprincipal"'); ?>

				<div id="primeira" class="fadein-animacao">
					<div class="row">
						<div class="col-md-12">
							<img src="<?php print_r(base_url('assets/images/810.png')); ?>" class="iconeperguntas">
							<?php switch ($this->session->userdata('lang')) {		

								case 'pt-br': ?>
									<h1>O paciente tinha relações sociais ou atividades de lazer muito restritas antes do AVC?</h1>			
								<?php break; ?>

								<?php case 'en-us': ?>
									<h1>The patient had a very restricted social and leisure activities before stroke?</h1>	
								<?php break; ?>

								<?php case 'es-es': ?>
									<h1>¿Tenía el paciente relaciones sociales o actividades de ocio muy restringidas antes del ictus?</h1>		
								<?php break; ?>

								<?php case 'ch-sp': ?>
									<h1>在卒中（中风）前，病人社交和休闲活动是否就很有限？</h1>
								<?php break; ?>

								<?php case 'ch-tr': ?>
									<h1>中風前,病人在社交和日常消遣活動是否有限制？</h1>
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