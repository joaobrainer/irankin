<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('header'); ?>
</head>
<body>

	<div id="perguntas">
		<div class="container">

			<?php echo form_open("perguntas/resposta31", 'id="formprincipal"'); ?>

				<div id="primeira" class="fadein-animacao">
					<div class="row">
						<div class="col-md-12">
							<img src="<?php print_r(base_url('assets/images/811.png')); ?>" class="iconeperguntas">
							<?php switch ($this->session->userdata('lang')) {		

								case 'pt-br': ?>
									<h1>O paciente tem tido alterações no temperamento, comunicação, alteração de humor, irritabilidade, depressão ou comportamento embotado?</h1>			
								<?php break; ?>

								<?php case 'en-us': ?>
									<h1>The patient has had changes in the temper, communication,  mood swings, irratability, depression or unreasonable behaviour?</h1>		
								<?php break; ?>

								<?php case 'es-es': ?>
									<h1>¿Ha tenido el paciente cambios de temperamento, comunicación, cambios de humor, irritabilidad, depresión o comportamiento embotado?</h1>			
								<?php break; ?>

								<?php case 'ch-sp': ?>
									<h1>病人的脾气、沟通、情绪波动、不耐烦烦躁、抑郁或不合理行为的情况发生了变化？</h1>
								<?php break; ?>

								<?php case 'ch-tr': ?>
									<h1>病人在脾氣、溝通、情緒波動、煩躁、抑鬱或不合理的行為方面發生了變化嗎？</h1>
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