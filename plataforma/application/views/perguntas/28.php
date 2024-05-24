<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('header'); ?>
</head>
<body>

	<div id="perguntas">
		<div class="container">

			<?php echo form_open("perguntas/resposta28", 'id="formprincipal"'); ?>

				<div id="primeira" class="fadein-animacao">
					<div class="row">
						<div class="col-md-12">
							<img src="<?php print_r(base_url('assets/images/89.png')); ?>" class="iconeperguntas">
							<?php switch ($this->session->userdata('lang')) {		

								case 'pt-br': ?>
									<h1>O paciente está apto a <a href="#" class="tooltipwords" data-toggle="tooltip" title="Como uma babá, cuidando de seu parceiro, seus pais, seu netos ou outros dependentes">cuidar de outros</a> em casa, mesmo que sob responsabilidades reduzidas?</h1>			
								<?php break; ?>

								<?php case 'en-us': ?>
									<h1>The patient is able to <a href="#" class="tooltipwords" data-toggle="tooltip" title="Such as babysitting, looking after your partner, parents, grandchildren, or dependent others.">looking after others</a> at home, even with reduced responsibility?</h1>		
								<?php break; ?>

								<?php case 'es-es': ?>
									<h1>¿Puede el paciente cuidar de <a href="#" class="tooltipwords" data-toggle="tooltip" title="Como niñera o cuidando de la pareja, de los padres, los nietos u otras personas dependientes.">otras personas</a> en la casa, incluso con responsabilidades reducidas?</h1>			
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