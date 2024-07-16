<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('header'); ?>
</head>
<body>

	<div id="perguntas">
		<div class="container">

			<?php echo form_open("perguntas/resposta11", 'id="formprincipal"'); ?>

				<div id="primeira" class="fadein-animacao">
					<div class="row">
						<div class="col-md-12">
							<img src="<?php print_r(base_url('assets/images/81.png')); ?>" class="iconeperguntas">
							<?php switch ($this->session->userdata('lang')) {		

								case 'pt-br': ?>
									<h1>O paciente necessita de <a href="#" class="tooltipwords" data-toggle="tooltip" title="O paciente consegue comer alimentos preparados por ele mesmo. Este não é um tipo de assistência. Comida e suplementos podem ser fornecidos por outros">assistência essencial</a> para comer?</h1>			
								<?php break; ?>

								<?php case 'en-us': ?>
									<h1>The patient needs essential <a href="#" class="tooltipwords" data-toggle="tooltip" title="Patients may eat a modified diet on their own. This is not a kind of assistance. Others may provide food and implements.">assistance for eating</a></h1>		
								<?php break; ?>

								<?php case 'es-es': ?>
									<h1>¿El paciente requiere <a href="#" class="tooltipwords" data-toggle="tooltip" title="El paciente puede ingerir alimentos preparados por él mismo. Este no es un tipo de asistencia. Otros pueden proporcionar alimentos y suplementos.">asistencia esencial</a> para comer?</h1>			
								<?php break; ?>

								<?php case 'ch-sp': ?>
									<h1>病人进食需要帮助吗？<a href="#" class="tooltipwords" data-toggle="tooltip" title=""></a></h1>
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