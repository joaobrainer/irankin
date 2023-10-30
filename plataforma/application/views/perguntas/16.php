<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('header'); ?>
</head>
<body>

	<div id="perguntas">
		<div class="container">

			<?php echo form_open("perguntas/resposta16", 'id="formprincipal"'); ?>

				<div id="primeira" class="fadein-animacao">
					<div class="row">
						<div class="col-md-12">
							<img src="<?php print_r(base_url('assets/images/84.png')); ?>" class="iconeperguntas">
							<?php if ($this->session->userdata('lang') == 'pt-br') { ?>
								<h1>O paciente é capaz de se movimentar dentro de casa ou ao redor dela <span style="color: red;">sem</span> necessitar de ajuda física de outra pessoa ou instrução verbal ou supervisão de outros?</h1>
							<?php } elseif ($this->session->userdata('lang') == 'en-us') { ?>
								<h1>The patient is able to walk/move indoors around house or ward <span style="color: red;">without</span> requering physical help from another person OR verbal instruction OR supervision also from others</h1>
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