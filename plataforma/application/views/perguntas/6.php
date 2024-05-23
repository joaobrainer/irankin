<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('header'); ?>
</head>
<body>

	<div id="perguntas">
		<div class="container">

			<?php echo form_open("perguntas/resposta6", 'id="formprincipal"'); ?>

				<div id="primeira" class="fadein-animacao">
					<div class="row">
						<div class="col-md-12">
							<img src="<?php print_r(base_url('assets/images/6.png')); ?>" class="iconeperguntas">

							<?php switch ($this->session->userdata('lang')) {		

								case 'pt-br': ?>
									<h1>O paciente é completamente <a href="#" class="tooltipwords" data-toggle="tooltip" title="Não dirigir por motivos legais em um paciente fisicamente capaz não é considerado como deficiência">independente</a> e capaz de realizar todas as <a href="#" class="tooltipwords" data-toggle="tooltip" title="Algo realizado pelo menos uma vez por mês antes do AVC">atividades</a> pré-AVC com a <a href="#" class="tooltipwords" data-toggle="tooltip" title="A mesma capacidade que tinha de realizar tarefas e atividades habituais pré-AVC">performance</a> de antes?</h1>
								<?php break; ?>

								<?php case 'en-us': ?>
									<h1>The patient is completely <a href="#" class="tooltipwords" data-toggle="tooltip" title="Not driving because of legal reasons in an otherwise physically able patient is not counted as disability">independent</a> and able to carry out all pre-stroke <a href="#" class="tooltipwords" data-toggle="tooltip" title="Something performed at least once per month before the stroke.">activities</a> with the last <a href="#" class="tooltipwords" data-toggle="tooltip" title="The same ability to carry out pre-Stroke usual duties and activities">performance</a>?</h1>
								<?php break; ?>

								<?php case 'es-es': ?>
									<h1>¿Es el paciente completamente <a href="#" class="tooltipwords" data-toggle="tooltip" title="No conducir por motivos legales en un paciente sano no se considera una discapacidad">independiente</a> y capaz de realizar todas las actividades previas al ictus tan bien como antes?</h1>
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