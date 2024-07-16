<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('header'); ?>
</head>
<body>

	<div id="perguntas">
		<div class="container">

			<?php echo form_open("perguntas/resposta36", 'id="formprincipal"'); ?>

				<div id="primeira" class="fadein-animacao">
					<div class="row">
						<div class="col-md-12">
							<img src="<?php print_r(base_url('assets/images/36.png')); ?>" class="iconeperguntas">
							<?php switch ($this->session->userdata('lang')) {		

								case 'pt-br': ?>
									<h1>O paciente é capaz de realizar todas as atividades pré-AVC, mas com mudanças OU problemas com os estudos OU não consegue retornar aos estudos com o mesmo desempenho de antes? <br>Responda NÃO, se o paciente agora não puder realizar essas atividades e precisa de ajuda em outra atividade de rotina diária</h1>		
								<?php break; ?>

								<?php case 'en-us': ?>
									<h1>The patient is able to carry out all pre-stroke activities , but with changes in education OR problems with study OR unable to return to study with the last performance? <br>Answer NO if the patient is now unable to perform these activities and needs help with another daily routine activity</h1>
								<?php break; ?>

								<?php case 'es-es': ?>
									<h1>¿El paciente es capaz de realizar todas las actividades previas al ictus, pero con cambios O problemas con los estudios O no puede volver a los estudios con el mismo rendimiento que antes? <br>Responda NO si el paciente ahora no puede realizar estas actividades y necesita ayuda con otra actividad de rutina diaria.</h1>		
								<?php break; ?>

								<?php case 'ch-sp': ?>
									<h1>病人能够进行卒中（中风）前所有的活动，但是否接受教学的方式发生变化、学习出现问题或无法恢复到此前的学习状态？<br>如果病人目前已无法进行学习活动，并且其他日常活动也需要他人帮助，请回答“否”</h1>
								<?php break; ?>

								<?php case 'ch-tr': ?>
									<h1>病人是否能夠完全進行先前的活動，但需要改變接受教育的方式、或學習出現問題、或無法恢復到中風前的學習狀態？<br>如病人現在無法進行這些活動並需要在協助下進行其他日常活動，請回答"否"。</h1>
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