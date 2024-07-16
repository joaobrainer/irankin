<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('header'); ?>
</head>
<body>

	<div id="perguntas">
		<div class="container">

			<?php echo form_open("perguntas/resposta24", 'id="formprincipal"'); ?>

				<div id="primeira" class="fadein-animacao">
					<div class="row">
						<div class="col-md-12">
							<img src="<?php print_r(base_url('assets/images/87.png')); ?>" class="iconeperguntas">
							<?php switch ($this->session->userdata('lang')) {		

								case 'pt-br': ?>
									<h1>Portanto o paciente é apto para fazer viagens locais, chamar um táxi (instruindo o motorista) ou pegar o transporte público, mas com alguma/pouca dificuldade?</h1>			
								<?php break; ?>

								<?php case 'en-us': ?>
									<h1>Thus the patient is able to local traveling, calling a taxi (instructing the driver) or taking a public transport, but with some/mild difficulty?</h1>		
								<?php break; ?>

								<?php case 'es-es': ?>
									<h1>Por lo tanto, ¿el paciente puede realizar desplazamientos locales, llamar a un taxi (instruyendo al conductor) o utilizar el transporte público, pero con alguna/poca dificultad?</h1>		
								<?php break; ?>

								<?php case 'ch-sp': ?>
									<h1>病人能够安排本地出行、叫出租车（或给出租车司机指路）或坐公共交通工具，但存在些许困难？</h1>
								<?php break; ?>

								<?php case 'ch-tr': ?>
									<h1>因此，病人能夠在附近自行出行、叫計程車（指導司機）或乘搭公共交通工具，但有一些/輕微的困難？</h1>
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