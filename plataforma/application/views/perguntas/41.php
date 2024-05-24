<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('header'); ?>
</head>
<body>

	<div id="perguntas">
		<div class="container">

			<?php echo form_open("perguntas/resposta41", 'id="formprincipal"'); ?>

				<div id="primeira" class="fadein-animacao">
					<div class="row">
						<div class="col-md-12">
							<img src="<?php print_r(base_url('assets/images/41.png')); ?>" class="iconeperguntas">
							<?php switch ($this->session->userdata('lang')) {		

								case 'pt-br': ?>
									<h1>No entanto, o paciente pode se sentar na cama sem qualquer ajuda?</h1>
									<h1 style="margin-top: 2rem;">Diga NÃO se o paciente for completamente dependente de outra pessoa para se sentar na cama E impulsionar uma cadeira de rodas, por exemplo</h1>		
								<?php break; ?>

								<?php case 'en-us': ?>
									<h1>However, the patient can sit up in bed without any help?</h1>
									<h1 style="margin-top: 2rem;">Say NO if the patient is completely dependent of another to sit up in bed AND propel a wheelchair</h1>		
								<?php break; ?>

								<?php case 'es-es': ?>
									<h1>Sin embargo, ¿puede el paciente sentarse en la cama sin ayuda?</h1>	
									<h1 style="margin-top: 2rem;">Conteste NO si el paciente depende completamente de otra persona para sentarse en la cama Y empujar una silla de ruedas, por ejemplo.</h1>	
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