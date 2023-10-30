<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('header'); ?>
</head>
<body>

	<div id="perguntas">
		<div class="container">

			<?php echo form_open("perguntas/resposta22", 'id="formprincipal"'); ?>

				<div id="primeira" class="fadein-animacao">
					<div class="row">
						<div class="col-md-12">
							<img src="<?php print_r(base_url('assets/images/86.png')); ?>" class="iconeperguntas">
							<?php if ($this->session->userdata('lang') == 'pt-br') { ?>
								<h1>O paciente é <a href="#" class="tooltipwords" data-toggle="tooltip" title="Procure por uma mudança com relação ao nível de responsabilidade anterior. A questão não é financeira. Refere-se a se os pacientes são ou não capazes de assumir a responsabilidade pelo dinheiro que tem">capaz</a> de gerenciar seu/sua própria pensão/renda e pagar as contas, mas com alguma/pouca dificuldade?</h1>
							<?php } elseif ($this->session->userdata('lang') == 'en-us') { ?>
								<h1>The patient is <a href="#" class="tooltipwords" data-toggle="tooltip" title="Look for a change from the previous level of responsibility. The question is not about finances. It refers to whether or not patients can take responsibility for the money that they have.">able</a> to do manage his/her own pension/income and arrange to pay bills, but with some/mild difficulty?</h1>
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