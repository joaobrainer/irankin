<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('header'); ?>
</head>
<body>

	<div id="perguntas">
		<div class="container">

			<div id="primeira" class="fadein-animacao" style="padding-top: 4rem;">
				<div class="row">
					<div class="col-md-12">
					<?php switch ($this->session->userdata('lang')) {		

						case 'pt-br': ?>
							<h1>Escolha os botões de acordo com os dados disponíveis e mais confiáveis da história do paciente</h1>
						<?php break; ?>

						<?php case 'en-us': ?>
							<h1>Choice the buttons according to the most confidente available data from your patient.</h1>	
						<?php break; ?>

						<?php case 'es-es': ?>
							<h1>Elija los botones según los datos disponibles y más fiables del historial del paciente</h1>	
						<?php break; ?>

						<?php case 'ch-sp': ?>
							<h1>根据病人提供的最可信的信息选择按钮</h1>
						<?php break; ?>

					<?php } ?>
					</div>
				</div>

				<?php if ($this->session->flashdata('error') == 'error') { ?>
					<div class="row" style="margin-top: 2rem;">
						<div class="col-md-12">
							<div class="alert alert-danger" role="alert">
							<?php switch ($this->session->userdata('lang')) {		

								case 'pt-br': ?>
									FALHA. Tente com mais dados.			
								<?php break; ?>

								<?php case 'en-us': ?>
									FAIL. Try with more data.		
								<?php break; ?>

								<?php case 'es-es': ?>
									ERROR. Pruebe con más datos.			
								<?php break; ?>

								<?php case 'ch-sp': ?>
									失败，请尝试更多的数据
								<?php break; ?>

							<?php } ?>
							</div>
						</div>
					</div>
				<?php } ?>

				<?php echo form_open("perguntas/todasRespostas", 'id="formprincipal"'); ?>

				<div class="row">
					<?php if ($walking == 'sim') { ?>						
						<div class="col-md-6 colmd6mobile50wd" style='cursor: pointer;' >
							<label for="16">
							<input type="checkbox" name="historia[]" id="16" value="16">
							<img src="<?php print_r(base_url('assets/images/84.png')); ?>" class="iconeperguntas">		
							<?php switch ($this->session->userdata('lang')) {		

								case 'pt-br': ?>
									<h3 class="texticonesselecionaveis2">Caminhando</h3>				
								<?php break; ?>

								<?php case 'en-us': ?>
									<h3 class="texticonesselecionaveis2">Walking</h3>		
								<?php break; ?>

								<?php case 'es-es': ?>
									<h3 class="texticonesselecionaveis2">Caminando</h3>			
								<?php break; ?>

								<?php case 'ch-sp': ?>
									<h3 class="texticonesselecionaveis2">行走</h3>
								<?php break; ?>

							<?php } ?>						
							</label>						
						</div>						
					<?php } ?>

					<?php if ($using_the_toilet == 'sim') { ?>
						<div class="col-md-6 colmd6mobile50wd" style='cursor: pointer;'>
							<label for="13">
							<input type="checkbox" name="historia[]" id="13" value="13">
							<img src="<?php print_r(base_url('assets/images/82.png')); ?>" class="iconeperguntas">
							<?php switch ($this->session->userdata('lang')) {		

								case 'pt-br': ?>
									<h3 class="texticonesselecionaveis2">Usando o banheiro</h3>		
								<?php break; ?>

								<?php case 'en-us': ?>
									<h3 class="texticonesselecionaveis2">Using the toilet</h3>	
								<?php break; ?>

								<?php case 'es-es': ?>
									<h3 class="texticonesselecionaveis2">Utilizando el baño</h3>			
								<?php break; ?>

								<?php case 'ch-sp': ?>
									<h3 class="texticonesselecionaveis2">使用厕所</h3>
								<?php break; ?>

							<?php } ?>
							</label>
						</div>
					<?php } ?>

					<?php if ($routine_daily_hygiene == 'sim') { ?>
						<div class="col-md-6 colmd6mobile50wd" style='cursor: pointer;'>
							<label for="14">
							<input type="checkbox" name="historia[]" id="14" value="14">
							<img src="<?php print_r(base_url('assets/images/83.png')); ?>" class="iconeperguntas">
							<?php switch ($this->session->userdata('lang')) {		

								case 'pt-br': ?>
									<h3 class="texticonesselecionaveis2">Rotina de higiene pessoal</h3>			
								<?php break; ?>

								<?php case 'en-us': ?>
									<h3 class="texticonesselecionaveis2">Routine daily hygiene</h3>		
								<?php break; ?>

								<?php case 'es-es': ?>
									<h3 class="texticonesselecionaveis2">Rutina de higiene personal</h3>			
								<?php break; ?>

								<?php case 'ch-sp': ?>
									<h3 class="texticonesselecionaveis2">常规的日常卫生</h3>
								<?php break; ?>

							<?php } ?>
							</label>
						</div>
					<?php } ?>

					<?php if ($eating == 'sim') { ?>
						<div class="col-md-6 colmd6mobile50wd" style='cursor: pointer;'>
							<label for="11">
							<input type="checkbox" name="historia[]" id="11" value="11">
								<img src="<?php print_r(base_url('assets/images/81.png')); ?>" class="iconeperguntas">
								<?php switch ($this->session->userdata('lang')) {		

									case 'pt-br': ?>
										<h3 class="texticonesselecionaveis2">Comendo</h3>				
									<?php break; ?>

									<?php case 'en-us': ?>
										<h3 class="texticonesselecionaveis2">Eating</h3>			
									<?php break; ?>

									<?php case 'es-es': ?>
										<h3 class="texticonesselecionaveis2">Comiendo</h3>			
									<?php break; ?>

									<?php case 'ch-sp': ?>
										<h3 class="texticonesselecionaveis2">进食</h3>
									<?php break; ?>

								<?php } ?>
							</label>
						</div>
					<?php } ?>

					<?php if ($household_chores == 'sim') { ?>
						<div class="col-md-6 colmd6mobile50wd" style='cursor: pointer;'>
							<label for="19">
								<input type="checkbox" name="historia[]" id="19" value="19">
								<img src="<?php print_r(base_url('assets/images/85.png')); ?>" class="iconeperguntas">
								<?php switch ($this->session->userdata('lang')) {		

									case 'pt-br': ?>
										<h3 class="texticonesselecionaveis2">Tarefas domésticas</h3>				
									<?php break; ?>

									<?php case 'en-us': ?>
										<h3 class="texticonesselecionaveis2">Household chores</h3>		
									<?php break; ?>

									<?php case 'es-es': ?>
										<h3 class="texticonesselecionaveis2">Tareas domésticas</h3>			
									<?php break; ?>

									<?php case 'ch-sp': ?>
										<h3 class="texticonesselecionaveis2">做家务</h3>
									<?php break; ?>

								<?php } ?>
							</label>
						</div>
					<?php } ?>

					<?php if ($household_expenses == 'sim') { ?>
						<div class="col-md-6 colmd6mobile50wd" style='cursor: pointer;'>
							<label for="21">
								<input type="checkbox" name="historia[]" id="21" value="21">
								<img src="<?php print_r(base_url('assets/images/86.png')); ?>" class="iconeperguntas">
								<?php switch ($this->session->userdata('lang')) {		

									case 'pt-br': ?>
										<h3 class="texticonesselecionaveis2">Despesas domésticas</h3>		
									<?php break; ?>

									<?php case 'en-us': ?>
										<h3 class="texticonesselecionaveis2">Household expenses</h3>			
									<?php break; ?>

									<?php case 'es-es': ?>
										<h3 class="texticonesselecionaveis2">Gastos del hogar</h3>				
									<?php break; ?>

									<?php case 'ch-sp': ?>
										<h3 class="texticonesselecionaveis2">家务理財</h3>
									<?php break; ?>

								<?php } ?>
							</label>
						</div>
					<?php } ?>

					<?php if ($local_traveling == 'sim') { ?>
						<div class="col-md-6 colmd6mobile50wd" style='cursor: pointer;'>
							<label for="23">
								<input type="checkbox" name="historia[]" id="23" value="23">
								<img src="<?php print_r(base_url('assets/images/87.png')); ?>" class="iconeperguntas">
								<?php switch ($this->session->userdata('lang')) {		

									case 'pt-br': ?>
										<h3 class="texticonesselecionaveis2">Mobilidade na cidade</h3>			
									<?php break; ?>

									<?php case 'en-us': ?>
										<h3 class="texticonesselecionaveis2">Local traveling</h3>			
									<?php break; ?>

									<?php case 'es-es': ?>
										<h3 class="texticonesselecionaveis2">Movilidad en la ciudad</h3>				
									<?php break; ?>

									<?php case 'ch-sp': ?>
										<h3 class="texticonesselecionaveis2">在本地出行</h3>
									<?php break; ?>

								<?php } ?>
							</label>
						</div>
					<?php } ?>

					<?php if ($local_shopping == 'sim') { ?>
						<div class="col-md-6 colmd6mobile50wd" style='cursor: pointer;'>
							<label for="25">
								<input type="checkbox" name="historia[]" id="25" value="25">
								<img src="<?php print_r(base_url('assets/images/88.png')); ?>" class="iconeperguntas">
								<?php switch ($this->session->userdata('lang')) {		

									case 'pt-br': ?>
										<h3 class="texticonesselecionaveis2">Compras locais</h3>			
									<?php break; ?>

									<?php case 'en-us': ?>
										<h3 class="texticonesselecionaveis2">Local shopping</h3>			
									<?php break; ?>

									<?php case 'es-es': ?>
										<h3 class="texticonesselecionaveis2">Compras locales</h3>				
									<?php break; ?>

									<?php case 'ch-sp': ?>
										<h3 class="texticonesselecionaveis2">在本地购物</h3>
									<?php break; ?>

								<?php } ?>
							</label>
						</div>
					<?php } ?>
				
					<?php if ($looking_after_family == 'sim') { ?>
						<div class="col-md-6 colmd6mobile50wd" style='cursor: pointer;'>
							<label for="27">
								<input type="checkbox" name="historia[]" id="27" value="27">
								<img src="<?php print_r(base_url('assets/images/89.png')); ?>" class="iconeperguntas">
								<?php switch ($this->session->userdata('lang')) {		

									case 'pt-br': ?>
										<h3 class="texticonesselecionaveis2">Cuidar da família em casa</h3>	
									<?php break; ?>

									<?php case 'en-us': ?>
										<h3 class="texticonesselecionaveis2">Looking after family at home</h3>		
									<?php break; ?>

									<?php case 'es-es': ?>
										<h3 class="texticonesselecionaveis2">Cuidar a la familia en casa</h3>			
									<?php break; ?>

									<?php case 'ch-sp': ?>
										<h3 class="texticonesselecionaveis2">在家中照顾家人</h3>
									<?php break; ?>

								<?php } ?>
							</label>
						</div>
					<?php } ?>

					<?php if ($social_activities == 'sim') { ?>
						<div class="col-md-6 colmd6mobile50wd" style='cursor: pointer;'>
							<label for="29">
								<input type="checkbox" name="historia[]" id="29" value="29">
								<img src="<?php print_r(base_url('assets/images/810.png')); ?>" class="iconeperguntas">
								<?php switch ($this->session->userdata('lang')) {		

									case 'pt-br': ?>
										<h3 class="texticonesselecionaveis2">Atividades sociais e de lazer</h3>		
									<?php break; ?>

									<?php case 'en-us': ?>
										<h3 class="texticonesselecionaveis2">Social and free-time activities</h3>
									<?php break; ?>

									<?php case 'es-es': ?>
										<h3 class="texticonesselecionaveis2">Actividades sociales y de entretenimiento</h3>			
									<?php break; ?>

									<?php case 'ch-sp': ?>
										<h3 class="texticonesselecionaveis2">社交和空余时间活动</h3>
									<?php break; ?>

								<?php } ?>
							</label>
						</div>
					<?php } ?>
				

					<?php if ($relationships == 'sim') { ?>
						<div class="col-md-6 colmd6mobile50wd" style='cursor: pointer;'>
							<label for="31">
								<input type="checkbox" name="historia[]" id="31" value="31">
								<img src="<?php print_r(base_url('assets/images/811.png')); ?>" class="iconeperguntas">
								<?php switch ($this->session->userdata('lang')) {		

									case 'pt-br': ?>
										<h3 class="texticonesselecionaveis2">Relações</h3>		
									<?php break; ?>

									<?php case 'en-us': ?>
										<h3 class="texticonesselecionaveis2">Relationships</h3>			
									<?php break; ?>

									<?php case 'es-es': ?>
										<h3 class="texticonesselecionaveis2">Relaciones</h3>			
									<?php break; ?>

									<?php case 'ch-sp': ?>
										<h3 class="texticonesselecionaveis2">人际关系</h3>
									<?php break; ?>

								<?php } ?>

							</label>
						</div>
					<?php } ?>

					<?php if ($working == 'sim') { ?>
						<div class="col-md-6 colmd6mobile50wd" style='cursor: pointer;'>
							<label for="33">
								<input type="checkbox" name="historia[]" id="33" value="33">
								<img src="<?php print_r(base_url('assets/images/812.png')); ?>" class="iconeperguntas">
								<?php switch ($this->session->userdata('lang')) {		

									case 'pt-br': ?>
										<h3 class="texticonesselecionaveis2">Trabalhando</h3>			
									<?php break; ?>

									<?php case 'en-us': ?>
										<h3 class="texticonesselecionaveis2">Working</h3>	
									<?php break; ?>

									<?php case 'es-es': ?>
										<h3 class="texticonesselecionaveis2">Trabajando</h3>			
									<?php break; ?>

									<?php case 'ch-sp': ?>
										<h3 class="texticonesselecionaveis2">工作</h3>
									<?php break; ?>

								<?php } ?>

							</label>
						</div>
					<?php } ?>

					<?php if ($studying == 'sim') { ?>
						<div class="col-md-6 colmd6mobile50wd" style='cursor: pointer;'>
							<label for="35">
								<input type="checkbox" name="historia[]" id="35" value="35">
								<img src="<?php print_r(base_url('assets/images/813.png')); ?>" class="iconeperguntas">
								<?php switch ($this->session->userdata('lang')) {		

									case 'pt-br': ?>
										<h3 class="texticonesselecionaveis2">Estudando</h3>	
									<?php break; ?>

									<?php case 'en-us': ?>
										<h3 class="texticonesselecionaveis2">Studying</h3>
									<?php break; ?>

									<?php case 'es-es': ?>
										<h3 class="texticonesselecionaveis2">Estudiando</h3>	
									<?php break; ?>

									<?php case 'ch-sp': ?>
										<h3 class="texticonesselecionaveis2">学习</h3>
									<?php break; ?>

								<?php } ?>
							</label>
						</div>
					<?php } ?>

					<?php if ($home_activities == 'sim') { ?>
						<div class="col-md-6 colmd6mobile50wd" style='cursor: pointer;'>
							<label for="42">
								<input type="checkbox" name="historia[]" id="42" value="42">
								<img src="<?php print_r(base_url('assets/images/42.png')); ?>" class="iconeperguntas">
								<?php switch ($this->session->userdata('lang')) {		

									case 'pt-br': ?>
										<h3 class="texticonesselecionaveis2">Atividades em casa</h3>				
									<?php break; ?>

									<?php case 'en-us': ?>
										<h3 class="texticonesselecionaveis2">Home activities</h3>		
									<?php break; ?>

									<?php case 'es-es': ?>
										<h3 class="texticonesselecionaveis2">Actividades en casa</h3>					
									<?php break; ?>

									<?php case 'ch-sp': ?>
										<h3 class="texticonesselecionaveis2">家庭活动</h3>
									<?php break; ?>

								<?php } ?>

							</label>
						</div>
					<?php } ?>

				</div>

				<div class="row">
					<div class="col-md-10"></div>
					<div class="col-md-2">
						<label for="yes1" class="yes"><input type="radio" name="primeira" id="yes1" value="Sim" onclick="document.getElementById('formprincipal').submit();">
						<img src="<?php print_r(base_url('assets/images/8.png')); ?>" class="iconeperguntas" style="height: 200px;">
						<?php switch ($this->session->userdata('lang')) {		

							case 'pt-br': ?>
								<h3 class="texticonesselecionaveis" style="margin-bottom: 3rem; opacity: 1;">Avaliar rankin</h3>
							<?php break; ?>

							<?php case 'en-us': ?>
								<h3 class="texticonesselecionaveis" style="margin-bottom: 3rem; opacity: 1;">Rate rankin</h3>
							<?php break; ?>

							<?php case 'es-es': ?>
								<h3 class="texticonesselecionaveis" style="margin-bottom: 3rem; opacity: 1;">Evaluar el Rankin</h3>	
							<?php break; ?>

							<?php case 'ch-sp': ?>
								<h3 class="texticonesselecionaveis" style="margin-bottom: 3rem; opacity: 1;">Rankin 评分</h3>
							<?php break; ?>

						<?php } ?>
					</div>
				</div>

				<?php echo form_close(); ?>

			</div>

		</div>
	</div>

</body>
<footer>

<?php $this->load->view('footer'); ?>
<?php $this->load->view('footerperguntas'); ?>

</footer>
</html>