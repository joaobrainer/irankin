<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('header'); ?>
</head>
<body>

	<div id="perguntas">
		<div class="container">

			<?php echo form_open("perguntas/resposta23", 'id="formprincipal"'); ?>

				<div id="primeira" class="fadein-animacao">
					<div class="row">
						<div class="col-md-12">
							<img src="<?php print_r(base_url('assets/images/87.png')); ?>" class="iconeperguntas">
							<?php switch ($this->session->userdata('lang')) {		

								case 'pt-br': ?>
									<h1>A <a href="#" class="tooltipwords" data-toggle="tooltip" title="Esta não é uma questão sobre ser capaz de pagar um táxi, mas sobre as tarefas envolvidas. Esta questão se refere se os pacientes podem ou não se locomover localmente por conta própria.">assistência</a> é essencial para viagens locais, chamar o táxi ou pegar o transporte público?</h1>				
								<?php break; ?>

								<?php case 'en-us': ?>
									<h1>Is <a href="#" class="tooltipwords" data-toggle="tooltip" title="This question is NOT about being able to afford a taxi, but about the tasks involved. The question refers to whether the patients can get around locally by themselves.">assistance</a> essential for local travel, calling a taxi or taking a public transport?</h1>		
								<?php break; ?>

								<?php case 'es-es': ?>
									<h1>¿Es imprescindible la <a href="#" class="tooltipwords" data-toggle="tooltip" title="No se trata de poder permitirse un taxi, sino de las tareas que implica. La cuestión es si los pacientes pueden desplazarse solos por la zona o no.">asistencia</a> para desplazamientos locales, tomar un taxi o utilizar el transporte público?</h1>		
								<?php break; ?>

								<?php case 'ch-sp': ?>
									<h1>病人安排本地出行、搭载出租车或坐公共交通工具必要他人帮助吗？<a href="#" class="tooltipwords" data-toggle="tooltip" title=""></a></h1>
								<?php break; ?>

								<?php case 'ch-tr': ?>
									<h1>病人是否必須在協助下乘搭的士或公共交通工具在附近出行？<a href="#" class="tooltipwords" data-toggle="tooltip" title=""></a></h1>
								<?php break; ?>

							<?php } ?>
							<?php if ($this->session->userdata('lang') == 'pt-br') { ?>
								
							<?php } elseif ($this->session->userdata('lang') == 'en-us') { ?>
								
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