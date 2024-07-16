<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('header'); ?>
</head>
<body>

	<div id="perguntas">
		<div class="container">

			<?php echo form_open("perguntas/resposta42", 'id="formprincipal"'); ?>

				<div id="primeira" class="fadein-animacao">
					<div class="row">
						<div class="col-md-12">
							<img src="<?php print_r(base_url('assets/images/42.png')); ?>" class="iconeperguntas">
							<?php switch ($this->session->userdata('lang')) {		

								case 'pt-br': ?>
									<h1>O AVC reduziu (levemente) as <a href="#" class="tooltipwords" data-toggle="tooltip" title="Participação ativa incluindo frazer tricô, costurar, pintar, jogos, leitura de livros, pequenos consertos em casa...">atividades</a> que o paciente desempenhava dentro de casa?</h1>			
								<?php break; ?>

								<?php case 'en-us': ?>
									<h1>Has the Stroke reduced (mild impact - compared to the previous status) the person's regular <a href="#" class="tooltipwords" data-toggle="tooltip" title="Active participation, including knitting, sewing, painting, games, reading books, home improvements...">home activities</a> (active participation)?</h1>	
								<?php break; ?>

								<?php case 'es-es': ?>
									<h1>¿El ictus redujo (ligeramente) las <a href="#" class="tooltipwords" data-toggle="tooltip" title="Participación activa que incluye tejer, coser, pintar, juegos, leer libros, pequeñas reparaciones en el hogar.">actividades</a> que realizaba el paciente en casa?</h1>		
								<?php break; ?>

								<?php case 'ch-sp': ?>
									<h1>卒中(中风) 是否减少了(与发病之前的状态相比，有轻度影响) 病人积极参与定期的 家庭活动？<a href="#" class="tooltipwords" data-toggle="tooltip" title=""></a></h1>
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