<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('header'); ?>
</head>
<body>

	<div id="perguntas">
		<div class="container">

			<?php echo form_open("perguntas/resposta20", 'id="formprincipal"'); ?>

				<div id="primeira" class="fadein-animacao">
					<div class="row">
						<div class="col-md-12">
							<img src="<?php print_r(base_url('assets/images/85.png')); ?>" class="iconeperguntas">
							<?php switch ($this->session->userdata('lang')) {		

								case 'pt-br': ?>
									<h1>Portanto, o paciente é <a href="#" class="tooltipwords" data-toggle="tooltip" title="Tente esclarecer sondando sobre a capacidade da pessoa em realizar as tarefas">capaz</a> de <a href="#" class="tooltipwords" data-toggle="tooltip" title="Por exemplo, encontrar e guardar roupas, se limpar depois de uma refeição. Exclua tarefas que não precisam ser realizadas todos os dias, como utilizar o aspirador de pó">realizar tarefas básicas</a>, se necessário, mesmo que ele/ela não as faça normalmente, mas com alguma dificuldade</h1>		
								<?php break; ?>

								<?php case 'en-us': ?>
									<h1>Therefore, the patient is <a href="#" class="tooltipwords" data-toggle="tooltip" title="Try to clarify by probing about the person’s ability to perform the chores.">able</a> to do <a href="#" class="tooltipwords" data-toggle="tooltip" title="For example, finding and putting away clothes, clearing up after a meal. Exclude chores that do not need to be done every day, such as using a vacuum cleaner">basic chores</a>, if necessary, even if he/she does not normally do them, but with some/mild difficulty</h1>		
								<?php break; ?>

								<?php case 'es-es': ?>
									<h1>Por lo tanto, el paciente es <a href="#" class="tooltipwords" data-toggle="tooltip" title="Trate de aclarar, investigando, la capacidad de la persona para realizar las tareas.">capaz</a> de <a href="#" class="tooltipwords" data-toggle="tooltip" title="Por ejemplo, buscar y guardar la ropa, limpiar después de una comida. Excluye tareas que no es necesario hacer todos los días, como usar la aspiradora.">realizar tareas básicas</a> si es necesario, aunque no las haga con normalidad sino con cierta dificultad.</h1>		
								<?php break; ?>

								<?php case 'ch-sp': ?>
									<h1>也就是说，如果需要，病人能够自己完成基本日常家务，即使病人平常并不需要自己做家务, 但存在些许困难？<a href="#" class="tooltipwords" data-toggle="tooltip" title=""></a></h1>
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