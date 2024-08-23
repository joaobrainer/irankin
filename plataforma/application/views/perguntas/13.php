<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('header'); ?>
</head>
<body>

	<div id="perguntas">
		<div class="container">

			<?php echo form_open("perguntas/resposta13", 'id="formprincipal"'); ?>

				<div id="primeira" class="fadein-animacao">
					<div class="row">
						<div class="col-md-12">
							<img src="<?php print_r(base_url('assets/images/82.png')); ?>" class="iconeperguntas">
							<?php switch ($this->session->userdata('lang')) {		

								case 'pt-br': ?>
									<h1>A <a href="#" class="tooltipwords" data-toggle="tooltip" title="Utilizar o banheiro sem assistência significa: chegar ao banheiro; despir-se suficientemente, se limpar por conta própria; se vestir e deixar o cômodo">assistência</a> é essencial para utilizar o banheiro?</h1>			
								<?php break; ?>

								<?php case 'en-us': ?>
									<h1>Is <a href="#" class="tooltipwords" data-toggle="tooltip" title="Using the toilet without assistance means reaching the toilet; undressing sufficiently; cleaning yourself; dressing, and leaving the commode.">assistance</a> for using the toilet?</h1>	
								<?php break; ?>

								<?php case 'es-es': ?>
									<h1>¿Es imprescindible<a href="#" class="tooltipwords" data-toggle="tooltip" title="Usar el baño sin ayuda significa: llegar al baño; desnudarse lo suficiente, límpiarse; vestirse y salir de la habitación."> la asistencia</a> para utilizar el baño?</h1>			
								<?php break; ?>

								<?php case 'ch-sp': ?>
									<h1><a href="#" class="tooltipwords" data-toggle="tooltip" title="可以在没有帮助的情况下使用厕所是指：到达厕所、脱好裤子、清洁、系裤子、以及盥洗均自己完成">病人使用厕所需要帮助吗</a>?</h1>
								<?php break; ?>

								<?php case 'ch-tr': ?>
									<h1><a href="#" class="tooltipwords" data-toggle="tooltip" title="可以在沒有他人協助下使用廁所是指：到達廁所、脱好褲子、清潔自己、穿好褲子、以及離開馬桶均自行完成。">病人是否需要在協助下如廁</a>?</h1>
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