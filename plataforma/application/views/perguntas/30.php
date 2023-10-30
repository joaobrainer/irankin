<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('header'); ?>
</head>
<body>

	<div id="perguntas">
		<div class="container">

			<?php echo form_open("perguntas/resposta30", 'id="formprincipal"'); ?>

				<div id="primeira" class="fadein-animacao">
					<div class="row">
						<div class="col-md-12">
							<img src="<?php print_r(base_url('assets/images/810.png')); ?>" class="iconeperguntas">
							<?php if ($this->session->userdata('lang') == 'pt-br') { ?>
								<h1>Sobre <a href="#" class="tooltipwords" data-toggle="tooltip" title="Eles incluem hobbies e interesses. Inclui atividades fora de casa ou em casa. Atividades fora de casa: ir a um pub/bar, restaurante, clube, igreja, cinema, visitar amigos, passear. Atividades em casa: envolvem participação “ativa” incluindo tricô, costura, pintura, jogos, leitura de livros, melhorias na casa">atividades sociais e de lazer</a>, o paciente participa menos da metade da frequência usual ou agora participa raramente? Ou o paciente está mais embotado ou tendo interação social reduzida em relação a antes do AVC?</h1>
							<?php } elseif ($this->session->userdata('lang') == 'en-us') { ?>
								<h1>About <a href="#" class="tooltipwords" data-toggle="tooltip" title="They include hobbies and interests. Includes activities outside the home or at home. Activities outside the home: going to the pub/bar, restaurant, club, church, cinema, visiting friends, going for walks. Activities at home: involving “active” participation, including knitting, sewing, painting, games, reading books, and home improvements.">social and leisure activities</a>, the patient participates less than half as often or rarely takes part? Or the patient is more ‘mellow’ or having reduced social interaction than before?</h1>
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