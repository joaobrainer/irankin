<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('header'); ?>
</head>
<body>

	<div id="perguntas">
		<div class="container">

			<?php echo form_open("perguntas/resposta12", 'id="formprincipal"'); ?>

				<div id="primeira" class="fadein-animacao">
					<div class="row">
						<div class="col-md-12">
							<img src="<?php print_r(base_url('assets/images/81.png')); ?>" class="iconeperguntas">
							<?php switch ($this->session->userdata('lang')) {		

								case 'pt-br': ?>
									<h1>O paciente necessita de ajuda para preparar uma <a href="#" class="tooltipwords" data-toggle="tooltip" title="Por exemplo. café-da-manhã ou lanche. O paciente pode correr o risco de incendiar a casa caso tente cozinhar">refeição simples</a>?</h1>	
								<?php break; ?>

								<?php case 'en-us': ?>
									<h1>The patient needs assistance for preparing a <a href="#" class="tooltipwords" data-toggle="tooltip" title="For example, breakfast or a snack. The patient might risk burning the house down if trying to cook.">simple meal</a>?</h1>		
								<?php break; ?>

								<?php case 'es-es': ?>
									<h1>¿Necesita el paciente ayuda para preparar una <a href="#" class="tooltipwords" data-toggle="tooltip" title="Por ejemplo. desayuno o merienda. El paciente puede correr el riesgo de quemar la casa si intenta cocinar.">comida sencilla</a>?</h1>		
								<?php break; ?>

								<?php case 'ch-sp': ?>
									<h1>病人做一顿简单的饭是否需要帮助?	<a href="#" class="tooltipwords" data-toggle="tooltip" title=""></a></h1>
								<?php break; ?>

								<?php case 'ch-tr': ?>
									<h1>病人是否需要在協助下準備簡易的餐點？<a href="#" class="tooltipwords" data-toggle="tooltip" title=""></a></h1>
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