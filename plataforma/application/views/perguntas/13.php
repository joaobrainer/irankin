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
									<h1>病人使用厕所需要帮助吗？<a href="#" class="tooltipwords" data-toggle="tooltip" title=""></a></h1>
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