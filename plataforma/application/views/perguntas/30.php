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
							<?php switch ($this->session->userdata('lang')) {		

								case 'pt-br': ?>
									<h1>Sobre <a href="#" class="tooltipwords" data-toggle="tooltip" title="Eles incluem hobbies e interesses. Inclui atividades fora de casa ou em casa. Atividades fora de casa: ir a um pub/bar, restaurante, clube, igreja, cinema, visitar amigos, passear. Atividades em casa: envolvem participação “ativa” incluindo tricô, costura, pintura, jogos, leitura de livros, melhorias na casa">atividades sociais e de lazer</a>, o paciente participa menos da metade da frequência usual ou agora participa raramente? Ou o paciente está mais embotado ou tendo interação social reduzida em relação a antes do AVC?</h1>		
								<?php break; ?>

								<?php case 'en-us': ?>
									<h1>About <a href="#" class="tooltipwords" data-toggle="tooltip" title="They include hobbies and interests. Includes activities outside the home or at home. Activities outside the home: going to the pub/bar, restaurant, club, church, cinema, visiting friends, going for walks. Activities at home: involving “active” participation, including knitting, sewing, painting, games, reading books, and home improvements.">social and leisure activities</a>, the patient participates less than half as often or rarely takes part? Or the patient is more ‘mellow’ or having reduced social interaction than before?</h1>	
								<?php break; ?>

								<?php case 'es-es': ?>
									<h1>En cuanto a <a href="#" class="tooltipwords" data-toggle="tooltip" title="Incluyen pasatiempos e intereses. Incluye actividades fuera del hogar o en casa. Actividades fuera de casa: ir a un pub/bar, restaurante, discoteca, iglesia, cine, visitar amigos, salir a caminar. Actividades en el hogar: involucran una participación “activa” que incluye tejer, coser, pintar, juegos, leer libros, hacer mejoras en el hogar.">las actividades sociales y de ocio</a>, ¿el paciente participa menos de la mitad de lo habitual o ahora participa raramente? ¿O el paciente está más aburrido o tiene una interacción social reducida en comparación con antes del accidente cerebrovascular?</h1>			
								<?php break; ?>

								<?php case 'ch-sp': ?>
									<h1>关于社交和休闲活动，病人参与的频率不到以前一半或很少参加？还是病人比以前更“宅”或社交互动减少？<a href="#" class="tooltipwords" data-toggle="tooltip" title=""></a></h1>
								<?php break; ?>

								<?php case 'ch-tr': ?>
									<h1>關於社交和日常消遣活動，病人參加的頻率減少一半以上或很少參加嗎？或者病人比以前更「宅」或更少社交互動嗎？<a href="#" class="tooltipwords" data-toggle="tooltip" title=""></a></h1>
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