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
							<?php switch ($this->session->userdata('lang')) {		

								case 'pt-br': ?>
									<h1>O paciente é <a href="#" class="tooltipwords" data-toggle="tooltip" title="Procure por uma mudança com relação ao nível de responsabilidade anterior. A questão não é financeira. Refere-se a se os pacientes são ou não capazes de assumir a responsabilidade pelo dinheiro que tem">capaz</a> de gerenciar seu/sua própria pensão/renda e pagar as contas, mas com alguma/pouca dificuldade?</h1>		
								<?php break; ?>

								<?php case 'en-us': ?>
									<h1>The patient is <a href="#" class="tooltipwords" data-toggle="tooltip" title="Look for a change from the previous level of responsibility. The question is not about finances. It refers to whether or not patients can take responsibility for the money that they have.">able</a> to do manage his/her own pension/income and arrange to pay bills, but with some/mild difficulty?</h1>	
								<?php break; ?>

								<?php case 'es-es': ?>
									<h1>¿<a href="#" class="tooltipwords" data-toggle="tooltip" title="Busque por un cambio con relación al nivel de responsabilidad anterior. La cuestión no es financiera. Se refiere a si los pacientes son capaces o no de responsabilizarse del dinero que tienen.">Puede</a> el paciente administrar su propia pensión/ingresos y pagar facturas, pero con alguna o poca dificultad?</h1>		
								<?php break; ?>

								<?php case 'ch-sp': ?>
									<h1>病人能够管理他/她自己的养老金/收入，以及安排支付账单，但存在些许困难？<a href="#" class="tooltipwords" data-toggle="tooltip" title=""></a></h1>
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