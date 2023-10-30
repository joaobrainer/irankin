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
							<?php if ($this->session->userdata('lang') == 'pt-br') { ?>
								<h1>Então o paciente é incapaz de passar de um cômodo a outro sem assistência física ou instrução verbal ou supervisão de outra pessoa ou está restrito a uma <a href="#" class="tooltipwords" data-toggle="tooltip" title="Para paciente que estão em cadeira de rodas, o paciente pode precisar de ajuda para transferências (entrar ou sair da cadeira, por exemplo), mas seria capaz de se deslocar sozinho eficientemente sem assistência e de forma segura">cadeira de rodas</a> (e ele então é capaz de se deslocar com a cadeira sozinho)</h1>
							<?php } elseif ($this->session->userdata('lang') == 'en-us') { ?>
								<h1>Therefore the patient is unable to cross the room without physical help OR verbal instruction OR supervision from another person OR is restricted to a <a href="#" class="tooltipwords" data-toggle="tooltip" title="For wheelchairs, the patient needs another person’s assistance to transfer into and out of the chair but can self-propel effectively without assistance.">wheelchair</a> (even if the patient is able to self-propel)</h1>
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