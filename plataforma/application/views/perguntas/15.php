<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('header'); ?>
</head>
<body>

	<div id="perguntas">
		<div class="container">

			<?php echo form_open("perguntas/resposta15", 'id="formprincipal"'); ?>

				<div id="primeira" class="fadein-animacao">
					<div class="row">
						<div class="col-md-12">
							<img src="<?php print_r(base_url('assets/images/15.png')); ?>" class="iconeperguntas">
							<?php switch ($this->session->userdata('lang')) {		

								case 'pt-br': ?>
									<h1>O paciente requer <a href="#" class="tooltipwords" data-toggle="tooltip" title="Considerar NÃO, se o paciente pode tomar banho, se lavar ou se barbear gastando mais tempo do que o usual">assistência</a> leve para banho, se lavar ou se barbear?</h1>
									<p>Instrução: se você está considerando que o paciente não precisa da assistência, ele/ela deve despender mais tempo que o usual</p>			
								<?php break; ?>

								<?php case 'en-us': ?>
									<h1>The patient requires mild <a href="#" class="tooltipwords" data-toggle="tooltip" title="Consider NO, if the patient can bath, shower, or shave on their spending even more time than usual.">assistance</a> for bath, shower or shave?</h1>
									<p>Instrunction: If you are considereing that the patient does not need that assistance, he/she should spend more time than usual</p>
								<?php break; ?>

								<?php case 'es-es': ?>
									<h1>¿Necesita el paciente <a href="#" class="tooltipwords" data-toggle="tooltip" title="Considerar NO si el paciente puede ducharse, lavarse o afeitarse tardando más tiempo del habitual">ayuda</a> ligera para bañarse, lavarse o afeitarse?</h1>		
									<p>Instrucción: si se considera que el paciente no necesita asistencia, deberá dedicar más tiempo del habitual</p>
								<?php break; ?>

								<?php case 'ch-sp': ?>
									<h1>病人泡澡、冲澡或刮胡子需要少量的帮助吗？<a href="#" class="tooltipwords" data-toggle="tooltip" title=""></a></h1>
									<p>说明：如果你认为病人不需要这种帮助，他/她应该比平时花更多的时间</p>
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