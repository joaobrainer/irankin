<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('header'); ?>
</head>
<body>

	<div id="perguntas">
		<div class="container">

			<?php echo form_open("perguntas/resposta33", 'id="formprincipal"'); ?>

				<div id="primeira" class="fadein-animacao">
					<div class="row">
						<div class="col-md-12">
							<img src="<?php print_r(base_url('assets/images/812.png')); ?>" class="iconeperguntas">
							<?php switch ($this->session->userdata('lang')) {		

								case 'pt-br': ?>
									<h1>Considerando que o paciente estava <a href="#" class="tooltipwords" data-toggle="tooltip" title="Trabalho refere-se a emprego remunerado e não inclui trabalho voluntário (que pode ser incluso em atividades sociais e de lazer'). Pacientes aposentados não são elegíveis para esta seção">empregado</a> antes do AVC, o paciente é capaz de realizar todas as atividades pré-AVC, mas apenas reduzindo o nível de trabalho (por exemplo, de período integral para meio período OU mudança de nível de responsabilidade OU perda de emprego)?</h1>		
								<?php break; ?>

								<?php case 'en-us': ?>
									<h1>Considering the patient was <a href="#" class="tooltipwords" data-toggle="tooltip" title="Work refers to paid employment and does not include voluntary work (which can be included under ‘social and leisure activities’). Retired patients are not eligible for this section.">employed</a> before stroke, the patient is able to carry out all pre-stroke activities , but only reducing the level of work (e.g. from full-time to partial-time OR change in level of responsibility OR loss of employment)?</h1>	
								<?php break; ?>

								<?php case 'es-es': ?>
									<h1>Suponiendo que el paciente estaba <a href="#" class="tooltipwords" data-toggle="tooltip" title="Trabajo se refiere al empleo remunerado y no incluye el trabajo voluntario (que puede incluirse en actividades sociales y de ocio). Los pacientes jubilados no son elegibles para esta sección">empleado</a> antes del accidente cerebrovascular, ¿el paciente puede realizar todas las actividades previas al accidente cerebrovascular, pero solo reduciendo el nivel de trabajo (p. ej., de tiempo completo a tiempo parcial O cambio en el nivel de responsabilidad O pérdida de empleo)?</h1>			
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