<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('header'); ?>
</head>
<body>

	<div id="perguntas">
		<div class="container">

			<?php echo form_open("perguntas/resposta32", 'id="formprincipal"'); ?>

				<div id="primeira" class="fadein-animacao">
					<div class="row">
						<div class="col-md-12">
							<img src="<?php print_r(base_url('assets/images/811.png')); ?>" class="iconeperguntas">
							<?php switch ($this->session->userdata('lang')) {		

								case 'pt-br': ?>
									<h1>O paciente é independente, mas tem problemas de relacionamento OU fica isolado uma vez por semana ou mais (ou diariamente)?</h1>		
								<?php break; ?>

								<?php case 'en-us': ?>
									<h1>The patient is independent, but has problems with relationships OR becomes isolated once a week or more (or daily)</h1>	
								<?php break; ?>

								<?php case 'es-es': ?>
									<h1>¿El paciente es independiente pero tiene problemas de relación O se aísla una vez por semana o más (o diariamente)?</h1>		
								<?php break; ?>

								<?php case 'ch-sp': ?>
									<h1>病人能自理，但人际关系存在问题，或者具体说是每周一次或以上(甚至每天)跟周围人闹僵</h1>
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