<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('header'); ?>
</head>
<body>

	<div id="perguntas">
		<div class="container">

			<?php echo form_open("perguntas/resposta17", 'id="formprincipal"'); ?>

				<div id="primeira" class="fadein-animacao">
					<div class="row">
						<div class="col-md-12">
							<img src="<?php print_r(base_url('assets/images/17.png')); ?>" class="iconeperguntas">
							<?php if ($this->session->userdata('lang') == 'pt-br') { ?>
								<h1>O paciente é capaz de caminhar e se deslocar <a href="#" class="tooltipwords" data-toggle="tooltip" title="Mesmo usando uma bengala, muleta ou andador, o paciente é capaz de realizar transferências sem ajuda de outra pessoa">independentemente</a>, mas usando bengala ou andador? <br> Responda NÃO se o paciente não precisa de nenhum tipo dessa ajuda (bengala, muleta, andador...)</h1>
							<?php } elseif ($this->session->userdata('lang') == 'en-us') { ?>
								<h1>The patient is able to walk/move <a href="#" class="tooltipwords" data-toggle="tooltip" title="Even patients using stick, cane or walker patient should be able to transfer independently and use the aid without the assistance of another person">independetly</a>, but using stick/cane or walking frame/walker? <br> Mark NO if the patient does not need any aid (stick/cane/walker)</h1>
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