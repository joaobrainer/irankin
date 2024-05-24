<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('header'); ?>
</head>
<body>

	<div id="perguntas">
		<div class="container">

			<?php echo form_open("perguntas/resposta14", 'id="formprincipal"'); ?>

				<div id="primeira" class="fadein-animacao">
					<div class="row">
						<div class="col-md-12">
							<img src="<?php print_r(base_url('assets/images/83.png')); ?>" class="iconeperguntas">
							<?php switch ($this->session->userdata('lang')) {		

								case 'pt-br': ?>
									<h1>O paciente precisa de <a href="#" class="tooltipwords" data-toggle="tooltip" title="Implementos podem ser fornecidos por outros e isto não deve ser considerado assistência">assistência</a> para lavar o rosto, pentear o cabelo e limpar os dentes/colocar dentes falsos?</h1>	
								<?php break; ?>

								<?php case 'en-us': ?>
									<h1>The patient requires <a href="#" class="tooltipwords" data-toggle="tooltip" title="Others may provide implements, and this should not be considered assistance.">assistance</a> for washing face, doing hair and cleaning teeth/fitting false teeth?</h1>		
								<?php break; ?>

								<?php case 'es-es': ?>
									<h1>¿Necesita el paciente <a href="#" class="tooltipwords" data-toggle="tooltip" title="Otros pueden proporcionar los implementos y esto no debe considerarse asistencia.">ayuda</a> para lavarse la cara, peinarse y limpiarse los dientes o colocarse dientes postizos?</h1>	
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