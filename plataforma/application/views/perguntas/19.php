<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('header'); ?>
</head>
<body>

	<div id="perguntas">
		<div class="container">

			<?php echo form_open("perguntas/resposta19", 'id="formprincipal"'); ?>

				<div id="primeira" class="fadein-animacao">
					<div class="row">
						<div class="col-md-12">
							<img src="<?php print_r(base_url('assets/images/85.png')); ?>" class="iconeperguntas">
							<?php switch ($this->session->userdata('lang')) {		

								case 'pt-br': ?>
									<h1>A assistência é indispensável para as <a href="#" class="tooltipwords" data-toggle="tooltip" title="Por exemplo, encontrar e guardar roupas e limpar depois de uma refeição. Exclua tarefas que não precisam ser feitas todos os dias, como usar um aspirador de pó ou levantar móveis.">tarefas básicas</a>, mesmo que o paciente não as faça rotineiramente?</h1>				
								<?php break; ?>

								<?php case 'en-us': ?>
									<h1>Is assistance essential for <a href="#" class="tooltipwords" data-toggle="tooltip" title="For example, finding and putting away clothes and clearing up after a meal. Exclude chores that need not be done daily, such as using a vacuum cleaner.">basic chores</a>, even if the patient does not normally do them?</h1>		
								<?php break; ?>

								<?php case 'es-es': ?>
									<h1>¿Es esencial la asistencia para las <a href="#" class="tooltipwords" data-toggle="tooltip" title="Por ejemplo, buscar y guardar la ropa o limpiar después de una comida. Excluya tareas que no es necesario realizar todos los días, como usar una aspiradora o mover muebles.">tareas básicas</a>, incluso si el paciente no las realiza de forma rutinaria?</h1>		
								<?php break; ?>

								<?php case 'ch-sp': ?>
									<h1>病人做基本日常家务是否需要帮助？即使病人平常并不需要自己做家务。<a href="#" class="tooltipwords" data-toggle="tooltip" title=""></a></h1>
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