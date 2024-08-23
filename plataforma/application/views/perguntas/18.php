<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('header'); ?>
</head>
<body>

	<div id="perguntas">
		<div class="container">

			<?php echo form_open("perguntas/resposta18", 'id="formprincipal"'); ?>

				<div id="primeira" class="fadein-animacao">
					<div class="row">
						<div class="col-md-12">
							<img src="<?php print_r(base_url('assets/images/18.png')); ?>" class="iconeperguntas">
							<?php switch ($this->session->userdata('lang')) {		

								case 'pt-br': ?>
									<h1>Então o paciente é incapaz de passar de um cômodo a outro sem assistência física ou instrução verbal ou supervisão de outra pessoa ou está restrito a uma <a href="#" class="tooltipwords" data-toggle="tooltip" title="Para paciente que estão em cadeira de rodas, o paciente pode precisar de ajuda para transferências (entrar ou sair da cadeira, por exemplo), mas seria capaz de se deslocar sozinho eficientemente sem assistência e de forma segura">cadeira de rodas</a> (e ele então é capaz de se deslocar com a cadeira sozinho)</h1>	
								<?php break; ?>

								<?php case 'en-us': ?>
									<h1>Therefore the patient is unable to cross the room without physical help OR verbal instruction OR supervision from another person OR is restricted to a <a href="#" class="tooltipwords" data-toggle="tooltip" title="For wheelchairs, the patient needs another person’s assistance to transfer into and out of the chair but can self-propel effectively without assistance.">wheelchair</a> (even if the patient is able to self-propel)</h1>			
								<?php break; ?>

								<?php case 'es-es': ?>
									<h1>Por lo tanto, el paciente no puede moverse de una habitación a otra sin asistencia física, instrucción verbal o supervisión de otra persona o está restringido a una <a href="#" class="tooltipwords" data-toggle="tooltip" title="Para los pacientes que están en silla de ruedas, es posible que necesiten ayuda con los traslados (para subir o bajar de la silla, por ejemplo), pero podrían moverse de forma independiente, segura y eficiente sin ayuda.">silla de ruedas</a> (y luego puede moverse solo con la silla).</h1>		
								<?php break; ?>

								<?php case 'ch-sp': ?>
									<h1>也就是说，病人在没有他人身体帮助、言语指导或监督的情况下无法步行穿过房间，或者只能坐轮椅（<a href="#" class="tooltipwords" data-toggle="tooltip" title="对于使用轮椅，病人需要他人的帮助才能进出轮椅，但无需帮助就能自行推进。">即使病人能够自行推进轮椅</a>)</h1>
								<?php break; ?>

								<?php case 'ch-tr': ?>
									<h1>因此，病人在沒有他人的肢體幫助或口頭指導或監督的情況下無法進出房間，或者只能坐在輪椅上（<a href="#" class="tooltipwords" data-toggle="tooltip" title="有關使用輪椅，病人需要他人協助下才能上落輪椅，但能在沒有協助下自行推進。">即使病人能夠自行推動</a>）。</h1>
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