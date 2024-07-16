<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('header'); ?>
</head>
<body>

	<div id="perguntas">
		<div class="container">

			<?php echo form_open("perguntas/resposta4", 'id="formprincipal"'); ?>

				<div id="primeira" class="fadein-animacao">
					<div class="row">
						<div class="col-md-12">
							<img src="<?php print_r(base_url('assets/images/4.png')); ?>" class="iconeperguntas">

							<?php switch ($this->session->userdata('lang')) {
								case 'pt-br': ?>
									<h1>No entanto, o paciente pode se sentar na cama sem qualquer ajuda OU, se estiver em cadeira de rodas, consegue impulsionar e se deslocar pelos cômodos com a cadeira de rodas sozinho</h1>
								<?php break; ?>
								
								<?php case 'en-us': ?>
									<h1>However, CAN the patient sit up in bed without any help OR, if restricted to a wheelchair, CAN propel a wheelchair independently?</h1>
								<?php break; ?>

								<?php case 'es-es': ?>
									<h1>Sin embargo, el paciente puede sentarse en la cama sin ayuda O, si está en silla de ruedas, puede impulsarse y moverse por las habitaciones solo con la silla de ruedas.</h1>
								<?php break; ?>	

								<?php case 'ch-sp': ?>
									<h1>但病人可以不需要帮助在床上坐起，或者，如果只能坐轮椅，可以自己独立操控/驱动轮椅？</h1>
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