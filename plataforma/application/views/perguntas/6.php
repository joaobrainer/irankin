<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('header'); ?>
</head>
<body>

	<div id="perguntas">
		<div class="container">

			<?php echo form_open("perguntas/resposta6", 'id="formprincipal"'); ?>

				<div id="primeira" class="fadein-animacao">
					<div class="row">
						<div class="col-md-12">
							<img src="<?php print_r(base_url('assets/images/6.png')); ?>" class="iconeperguntas">

							<?php switch ($this->session->userdata('lang')) {		

								case 'pt-br': ?>
									<h1>O paciente é completamente <a href="#" class="tooltipwords" data-toggle="tooltip" title="Não dirigir por motivos legais em um paciente fisicamente capaz não é considerado como deficiência">independente</a> e capaz de realizar todas as <a href="#" class="tooltipwords" data-toggle="tooltip" title="Algo realizado pelo menos uma vez por mês antes do AVC">atividades</a> pré-AVC com a <a href="#" class="tooltipwords" data-toggle="tooltip" title="A mesma capacidade que tinha de realizar tarefas e atividades habituais pré-AVC">performance</a> de antes?</h1>
								<?php break; ?>

								<?php case 'en-us': ?>
									<h1>The patient is completely <a href="#" class="tooltipwords" data-toggle="tooltip" title="Not driving because of legal reasons in an otherwise physically able patient is not counted as disability">independent</a> and able to carry out all pre-stroke <a href="#" class="tooltipwords" data-toggle="tooltip" title="Something performed at least once per month before the stroke.">activities</a> with the last <a href="#" class="tooltipwords" data-toggle="tooltip" title="The same ability to carry out pre-Stroke usual duties and activities">performance</a>?</h1>
								<?php break; ?>

								<?php case 'es-es': ?>
									<h1>¿Es el paciente completamente <a href="#" class="tooltipwords" data-toggle="tooltip" title="Un paciente físicamente capacitado, pero que no puede conducir, por motivos legales , no se considera discapacidad">independiente</a> y capaz de realizar todas las <a href="#" class="tooltipwords" data-toggle="tooltip" title="Algo hecho al menos una vez al mes antes del derrame cerebral.">actividades</a> previas al ictus <a href="#" class="tooltipwords" data-toggle="tooltip" title="La misma capacidad que tenía para realizar sus tareas y actividades habituales antes del ictus.">tan bien como antes</a>?</h1>
								<?php break; ?>

								<?php case 'ch-sp': ?>
									<h1><a href="#" class="tooltipwords" data-toggle="tooltip" title="身体情况允许，但由于法规的原因不能驾驶，不应算做“残疾”">病人生活</a>完全自理，<a href="#" class="tooltipwords" data-toggle="tooltip" title="卒中(中风)发生前每个月最少会做一次的事情">并且完成所有</a>工作和任务的能力跟卒中（中风）<a href="#" class="tooltipwords" data-toggle="tooltip" title="执行日常职责和活动的能力和卒中(中风) 前一样">前没有什么不同</a></h1>
								<?php break; ?>

								<?php case 'ch-tr': ?>
									<h1><a href="#" class="tooltipwords" data-toggle="tooltip" title="在身體狀況允許下，但因法律原因而不能駕馭，該病人不應被視為殘疾。">病人是</a>完全獨立自理，能夠<a href="#" class="tooltipwords" data-toggle="tooltip" title="中風前每個月最少會做一次的事情">進行所有活動</a>與中風<a href="#" class="tooltipwords" data-toggle="tooltip" title="執行日常職責和活動能力和中風前一樣">前無異。</a></h1>
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