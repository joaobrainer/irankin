<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('header'); ?>
</head>
<body>

	<div id="perguntas">
		<div class="container">

			<?php echo form_open("perguntas/resposta26", 'id="formprincipal"'); ?>

				<div id="primeira" class="fadein-animacao">
					<div class="row">
						<div class="col-md-12">
							<img src="<?php print_r(base_url('assets/images/88.png')); ?>" class="iconeperguntas">
							<?php switch ($this->session->userdata('lang')) {		

								case 'pt-br': ?>
									<h1>O paciente é <a href="#" class="tooltipwords" data-toggle="tooltip" title="Pelo menos é capaz de comprar um único item">capaz</a> de sair e comprar mesmo que um único item em uma loja local? Ou o paciente poderia ir a um pub/bar, e pedir e pagar por uma bebida por si mesmo? - mas com alguma dificuldade</h1>			
								<?php break; ?>

								<?php case 'en-us': ?>
									<h1>The patient is <a href="#" class="tooltipwords" data-toggle="tooltip" title="At least able to buy a single item.">able</a> to get out and buy even single items in a local shop? Or the patient could go to a pub/bar, ordering and paying for a drink by himself/herself? - but with some/mild difficulty</h1>	
								<?php break; ?>

								<?php case 'es-es': ?>
									<h1>¿<a href="#" class="tooltipwords" data-toggle="tooltip" title="Al menos puede comprar un artículo solamente.">Puede</a> el paciente salir y comprar aunque sea un solo artículo en una tienda local? ¿O podría el paciente ir a un pub/bar y pedir y pagar una bebida él mismo? - pero con cierta dificultad</h1>		
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