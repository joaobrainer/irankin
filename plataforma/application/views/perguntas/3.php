<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('header'); ?>
</head>
<body>

	<div id="perguntas">
		<div class="container">

			<?php echo form_open("perguntas/resposta3", 'id="formprincipal"'); ?>

				<div id="primeira" class="fadein-animacao">
					<div class="row">
						<div class="col-md-12">
							<img src="<?php print_r(base_url('assets/images/3.png')); ?>" class="iconeperguntas">

							<?php switch ($this->session->userdata('lang')) {
								case 'pt-br': ?>
									<h1>O paciente está <a href="#" class="tooltipwords" data-toggle="tooltip" title="O paciente não precisa obrigatoriamente estar todo o tempo na cama. Ele pode se sentar na cama, mas precisaria de grande ajuda de outra pessoa para isso">restrito</a> a cama, precisa de <a href="#" class="tooltipwords" data-toggle="tooltip" title="Necessidade geral de companhia e proteção não devem ser considerados assistência">assistência</a> (por pessoa treinada ou não) o tempo todo e não pode ser deixado sozinho mesmo que por poucas horas</h1>
								<?php break; ?>
																
								<?php case 'en-us': ?>
									<h1>The patient is <a href="#" class="tooltipwords" data-toggle="tooltip" title="The patient may not remain in the bed all the time. The patient may sit but will require significant assistance for that.">restricted</a> to the bed, needs <a href="#" class="tooltipwords" data-toggle="tooltip" title="A general need for companionship, care, or protection should not be considered assistance.">assistance</a> (by trained or untrained person) all the time AND can not be left alone even for few hours</h1>
								<?php break; ?>

								<?php case 'es-es': ?>
									<h1>El paciente está <a href="#" class="tootipwords" data-toggle="tooltip" title="No es necesario que el paciente esté en cama todo el tiempo. Puede sentarse en ella, pero necesitaría mucha ayuda de otra persona para hacerlo.">restringido</a> a la cama, necesita <a href="#" class="tooltipwords" data-toggle="tooltip" title="La necesidad general de compañía y protección no debe considerarse asistencia.">asistencia</a> (de una persona capacitada o no) en todo momento y no se le puede dejar solo ni siquiera por unas horas.</h1>
								<?php break; ?>

								<?php case 'ch-sp': ?>
									<h1>病人只能卧床，需<a href="#" class="tootipwords" data-toggle="tooltip" title="">要全时的</a>陪护（不管专业还是非专业<a href="#" class="tooltipwords" data-toggle="tooltip" title="">陪护</a>），陪护离开了数小时都不行	</h1>
								<?php break; ?>

							<?php } ?>

							<label for="yes1" class="yes"><input type="radio" name="primeira" id="yes1" onclick="document.getElementById('formprincipal').submit();" value="Sim">
								<img src="<?php print_r(base_url('assets/images/yes.png')); ?>">
							</label>
							<label for="no1" class="no"><input type="radio" name="primeira" id="no1" onclick="document.getElementById('formprincipal').submit();" value="Não">
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
	<script type="text/javascript">
		function mostraSegundaPergunta() {
			
			document.getElementById('segunda').style.display = 'block';

		}
	</script>

	<?php $this->load->view('footer'); ?>
	<?php $this->load->view('footerperguntas'); ?>

</footer>
</html>