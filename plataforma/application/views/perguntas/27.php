<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('header'); ?>
</head>
<body>

	<div id="perguntas">
		<div class="container">

			<?php echo form_open("perguntas/resposta27", 'id="formprincipal"'); ?>

				<div id="primeira" class="fadein-animacao">
					<div class="row">
						<div class="col-md-12">
							<img src="<?php print_r(base_url('assets/images/89.png')); ?>" class="iconeperguntas">
							<?php switch ($this->session->userdata('lang')) {		

								case 'pt-br': ?>
									<h1>O paciente estava acostumado a <a href="#" class="tooltipwords" data-toggle="tooltip" title="Como uma babá, cuidando de seu parceiro, seus pais, seu netos ou outros dependentes">cuidar de outros</a> em casa?</h1>		
								<?php break; ?>

								<?php case 'en-us': ?>
									<h1>The patient was used to <a href="#" class="tooltipwords" data-toggle="tooltip" title="Such as babysitting, looking after your partner, parents, grandchildren, or dependent others.">looking after others</a> at home?</h1>	
								<?php break; ?>

								<?php case 'es-es': ?>
									<h1>¿Estaba el paciente acostumbrado a <a href="#" class="tooltipwords" data-toggle="tooltip" title="Como niñera o cuidando de la pareja, de los padres, los nietos u otras personas dependientes.">cuidar a otras</a> personas en la casa?</h1>	
								<?php break; ?>

								<?php case 'ch-sp': ?>
									<h1><a href="#" class="tooltipwords" data-toggle="tooltip" title="例如照顾孩子、照顾伴侣、父母、孙子孙女或其他受抚养人">病人以往在家会照顾他人</a></h1>
								<?php break; ?>

								<?php case 'ch-tr': ?>
									<h1><a href="#" class="tooltipwords" data-toggle="tooltip" title="例如照顧孩子、照顧伴侶、父母、孫子孫女或其他受撫養人。">病人此前是否在家中照顧其他人</a>?</h1>
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