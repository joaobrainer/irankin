<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('header'); ?>
</head>
<body>

	<div id="perguntas">
		<div class="container">

			<?php echo form_open("perguntas/resposta5", 'id="formprincipal"'); ?>

				<div id="primeira" class="fadein-animacao" style="padding-top: 4rem;">
					<div class="row">
						<div class="col-md-12">

						<?php switch ($this->session->userdata('lang')) {

								case 'pt-br': ?>
									<h1>Escolha quais sintomas, sinais, déficits ou reclamações (mesmo menores) o paciente tem após o AVC</h1>
								<?php break; ?>

								<?php case 'en-us': ?>
									<h1>Choose which symptoms, signs, deficits or claims (even minor) the patient has after the Stroke</h1>
								<?php break; ?>

								<?php case 'es-es': ?>
									<h1>Elija qué síntomas, signos, déficits o quejas (incluso las menores) tiene el paciente después del ictus.</h1>
								<?php break; ?>

								<?php case 'ch-sp': ?>
									<h1>病人卒中(中风）发生后，有以下哪一方面的症状/征象/功能缺陷/主诉 (即使轻微)？ 请选择：</h1>
								<?php break; ?>

						<?php } ?>

							<?php if ($this->session->flashdata('error') == 'error') { ?>
								<div class="row" style="margin-top: 2rem;">
									<div class="col-md-12">
										<div class="alert alert-danger" role="alert">
										<?php switch ($this->session->userdata('lang')) {		

											case 'pt-br': ?>
												Selecione pelo menos uma opçao.
											<?php break; ?>

											<?php case 'en-us': ?>
												Please select at least one option.
											<?php break; ?>

											<?php case 'es-es': ?>
												Elige al menos una opción.
											<?php break; ?>

											<?php case 'ch-sp': ?>
												请选择至少一个选项
											<?php break; ?>

										<?php } ?>
										</div>
									</div>
								</div>
							<?php } ?>

							<div class="row">
								<div class="col-md-3" style='cursor: pointer;'>
									<label>
										<input type="checkbox" name="sintomas[]" id="Nenhum" value="Nenhum" onclick="validaOpcao(this);">
										<img src="<?php print_r(base_url('assets/images/5.png')); ?>" class="iconeperguntas">
											<?php switch ($this->session->userdata('lang')) {		

												case 'pt-br': ?>
													<h3 class="texticonesselecionaveis">Não há qualquer queixa ou sintoma</h3>
												<?php break; ?>

												<?php case 'en-us': ?>
													<h3 class="texticonesselecionaveis">No symptoms or claims</h3>
												<?php break; ?>

												<?php case 'es-es': ?>
													<h3 class="texticonesselecionaveis">No hay quejas ni síntomas.</h3>
												<?php break; ?>

												<?php case 'ch-sp': ?>
													<h3 class="texticonesselecionaveis">没有症状或主诉</h3>
												<?php break; ?>

											<?php } ?>
									</label>
								</div>
								<div class="col-md-3" style='cursor: pointer;'>
									<label>
										<input type="checkbox" name="sintomas[]" id="Motores" value="Motores" onclick="validaOpcao(this);">
										<img src="<?php print_r(base_url('assets/images/sintomas/fraco.png')); ?>" class="iconeperguntas">
											<?php switch ($this->session->userdata('lang')) {		

												case 'pt-br': ?>
													<h3 class="texticonesselecionaveis">Motores</h3>
												<?php break; ?>

												<?php case 'en-us': ?>
													<h3 class="texticonesselecionaveis">Motor</h3>
												<?php break; ?>

												<?php case 'es-es': ?>
													<h3 class="texticonesselecionaveis">Motores</h3>
												<?php break; ?>

												<?php case 'ch-sp': ?>
													<h3 class="texticonesselecionaveis">四肢活動/行动</h3>
												<?php break; ?>

											<?php } ?>			
											
									</label>
								</div>
								<div class="col-md-3" style='cursor: pointer;'>
									<label>
										<input type="checkbox" name="sintomas[]" id="Fala" value="Fala" onclick="validaOpcao(this);">
										<img src="<?php print_r(base_url('assets/images/sintomas/voice.png')); ?>" class="iconeperguntas">
										<?php switch ($this->session->userdata('lang')) {	

											case 'pt-br': ?>
												<h3 class="texticonesselecionaveis">Fala</h3>
											<?php break; ?>

											<?php case 'en-us': ?>
												<h3 class="texticonesselecionaveis">Speech</h3>
											<?php break; ?>

											<?php case 'es-es': ?>
												<h3 class="texticonesselecionaveis">El habla</h3>
											<?php break; ?>

											<?php case 'ch-sp': ?>
												<h3 class="texticonesselecionaveis">语言</h3>
											<?php break; ?>

										<?php } ?>	

									</label>
								</div>
								<div class="col-md-3" style='cursor: pointer;'>
									<label>
										<input type="checkbox" name="sintomas[]" id="Leitura" value="Leitura" onclick="validaOpcao(this);">
										<img src="<?php print_r(base_url('assets/images/sintomas/read.png')); ?>" class="iconeperguntas">
										<?php switch ($this->session->userdata('lang')) {		

											case 'pt-br': ?>
												<h3 class="texticonesselecionaveis">Leitura</h3>
											<?php break; ?>

											<?php case 'en-us': ?>
												<h3 class="texticonesselecionaveis">Reading</h3>
											<?php break; ?>

											<?php case 'es-es': ?>
												<h3 class="texticonesselecionaveis">Lectura</h3>
											<?php break; ?>

											<?php case 'ch-sp': ?>
												<h3 class="texticonesselecionaveis">阅读</h3>
											<?php break; ?>

										<?php } ?>

									</label>
								</div>								
							</div>

							<div class="row">
								<div class="col-md-3" style='cursor: pointer;'>
									<label>
										<input type="checkbox" name="sintomas[]" id="Desequilibrio" value="Desequilíbrio" onclick="validaOpcao(this);">
										<img src="<?php print_r(base_url('assets/images/sintomas/dizziness.png')); ?>" class="iconeperguntas">
										<?php switch ($this->session->userdata('lang')) {		

											case 'pt-br': ?>
												<h3 class="texticonesselecionaveis">Desequilíbrio</h3>
											<?php break; ?>

											<?php case 'en-us': ?>
												<h3 class="texticonesselecionaveis">Imbalance</h3>
											<?php break; ?>

											<?php case 'es-es': ?>
												<h3 class="texticonesselecionaveis">Desequilibrio</h3>
											<?php break; ?>

											<?php case 'ch-sp': ?>
												<h3 class="texticonesselecionaveis">平衡</h3>
											<?php break; ?>

										<?php } ?>
									</label>
								</div>
								<div class="col-md-3" style='cursor: pointer;'>
									<label>
										<input type="checkbox" name="sintomas[]" id="Parestesia" value="Parestesia" onclick="validaOpcao(this);">
										<img src="<?php print_r(base_url('assets/images/sintomas/numb.png')); ?>" class="iconeperguntas">
										<?php switch ($this->session->userdata('lang')) {		

											case 'pt-br': ?>
												<h3 class="texticonesselecionaveis">Parestesia</h3>
											<?php break; ?>

											<?php case 'en-us': ?>
												<h3 class="texticonesselecionaveis">Numbness</h3>
											<?php break; ?>

											<?php case 'es-es': ?>
												<h3 class="texticonesselecionaveis">Parestesia</h3>
											<?php break; ?>

											<?php case 'ch-sp': ?>
												<h3 class="texticonesselecionaveis">麻木</h3>
											<?php break; ?>

										<?php } ?>
									</label>
								</div>
								<div class="col-md-3" style='cursor: pointer;'>
									<label>
										<input type="checkbox" name="sintomas[]" id="Escrita" value="Escrita" onclick="validaOpcao(this);">
										<img src="<?php print_r(base_url('assets/images/sintomas/note.png')); ?>" class="iconeperguntas">
										<?php switch ($this->session->userdata('lang')) {		

											case 'pt-br': ?>
												<h3 class="texticonesselecionaveis">Escrita</h3>
											<?php break; ?>

											<?php case 'en-us': ?>
												<h3 class="texticonesselecionaveis">Writing</h3>
											<?php break; ?>

											<?php case 'es-es': ?>
												<h3 class="texticonesselecionaveis">Escrita</h3>
											<?php break; ?>

											<?php case 'ch-sp': ?>
												<h3 class="texticonesselecionaveis">书写</h3>
											<?php break; ?>

										<?php } ?>
									</label>
								</div>
								<div class="col-md-3" style='cursor: pointer;'>
									<label>
										<input type="checkbox" name="sintomas[]" id="Sensibilidade" value="Sensibilidade" onclick="validaOpcao(this);">
										<img src="<?php print_r(base_url('assets/images/sintomas/lightweight.png')); ?>" class="iconeperguntas">
										<?php switch ($this->session->userdata('lang')) {		

											case 'pt-br': ?>
												<h3 class="texticonesselecionaveis">Sensibilidade</h3>
											<?php break; ?>

											<?php case 'en-us': ?>
												<h3 class="texticonesselecionaveis">Sensitivity</h3>
											<?php break; ?>

											<?php case 'es-es': ?>
												<h3 class="texticonesselecionaveis">Sensibilidad</h3>
											<?php break; ?>

											<?php case 'ch-sp': ?>
												<h3 class="texticonesselecionaveis">感觉灵敏度</h3>
											<?php break; ?>

										<?php } ?>
									</label>
								</div>								
							</div>

							<div class="row">
								<div class="col-md-3" style='cursor: pointer;'>
									<label>
										<input type="checkbox" name="sintomas[]" id="Cognitivos" value="Cognitivos" onclick="validaOpcao(this);">
										<img src="<?php print_r(base_url('assets/images/sintomas/cerebro.png')); ?>" class="iconeperguntas">

										<?php switch ($this->session->userdata('lang')) {		

											case 'pt-br': ?>
												<h3 class="texticonesselecionaveis">Cognitivos</h3>
											<?php break; ?>

											<?php case 'en-us': ?>
												<h3 class="texticonesselecionaveis">Cognition</h3>
											<?php break; ?>

											<?php case 'es-es': ?>
												<h3 class="texticonesselecionaveis">Cognitivos</h3>
											<?php break; ?>

											<?php case 'ch-sp': ?>
												<h3 class="texticonesselecionaveis">认知</h3>
											<?php break; ?>

										<?php } ?>

									</label>
								</div>
								<div class="col-md-3" style='cursor: pointer;'>
									<label>
										<input type="checkbox" name="sintomas[]" id="Visuais" value="Visuais" onclick="validaOpcao(this);">
										<img src="<?php print_r(base_url('assets/images/sintomas/eye.png')); ?>" class="iconeperguntas">

										<?php switch ($this->session->userdata('lang')) {		

											case 'pt-br': ?>
												<h3 class="texticonesselecionaveis">Visuais</h3>
											<?php break; ?>

											<?php case 'en-us': ?>
												<h3 class="texticonesselecionaveis">Visual</h3>
											<?php break; ?>

											<?php case 'es-es': ?>
												<h3 class="texticonesselecionaveis">Visuales</h3>
											<?php break; ?>

											<?php case 'ch-sp': ?>
												<h3 class="texticonesselecionaveis">视觉</h3>
											<?php break; ?>

										<?php } ?>
									</label>
								</div>
								<div class="col-md-3" style='cursor: pointer;'>
									<label>
										<input type="checkbox" name="sintomas[]" id="Degluticao" value="Deglutição" onclick="validaOpcao(this);">
										<img src="<?php print_r(base_url('assets/images/sintomas/endoscopy.png')); ?>" class="iconeperguntas">

										<?php switch ($this->session->userdata('lang')) {		

											case 'pt-br': ?>
												<h3 class="texticonesselecionaveis">Deglutição</h3>
											<?php break; ?>

											<?php case 'en-us': ?>
												<h3 class="texticonesselecionaveis">Swallow</h3>
											<?php break; ?>

											<?php case 'es-es': ?>
												<h3 class="texticonesselecionaveis">Deglución</h3>
											<?php break; ?>

											<?php case 'ch-sp': ?>
												<h3 class="texticonesselecionaveis">吞咽</h3>
											<?php break; ?>

										<?php } ?>
									</label>
								</div>
								<div class="col-md-3" style='cursor: pointer;'>
									<label>
										<input type="checkbox" name="sintomas[]" id="Depressao" value="Depressão" onclick="validaOpcao(this);">
										<img src="<?php print_r(base_url('assets/images/sintomas/depressao.png')); ?>" class="iconeperguntas">

										<?php switch ($this->session->userdata('lang')) {		

											case 'pt-br': ?>
												<h3 class="texticonesselecionaveis">Depressão</h3>
											<?php break; ?>

											<?php case 'en-us': ?>
												<h3 class="texticonesselecionaveis">Mood</h3>
											<?php break; ?>

											<?php case 'es-es': ?>
												<h3 class="texticonesselecionaveis">Depresión</h3>
											<?php break; ?>

											<?php case 'ch-sp': ?>
												<h3 class="texticonesselecionaveis">情绪</h3>
											<?php break; ?>

										<?php } ?>
									</label>
								</div>								
							</div>

							<div class="row">
								<div class="col-md-3" style='cursor: pointer;'>
									<label>
										<input type="checkbox" name="sintomas[]" id="Dor" value="Dor" onclick="validaOpcao(this);">
										<img src="<?php print_r(base_url('assets/images/sintomas/headache.png')); ?>" class="iconeperguntas">
										<?php switch ($this->session->userdata('lang')) {		

											case 'pt-br': ?>
												<h3 class="texticonesselecionaveis">Dor</h3>
											<?php break; ?>

											<?php case 'en-us': ?>
												<h3 class="texticonesselecionaveis">Pain</h3>
											<?php break; ?>

											<?php case 'es-es': ?>
												<h3 class="texticonesselecionaveis">Dolor</h3>
											<?php break; ?>

											<?php case 'ch-sp': ?>
												<h3 class="texticonesselecionaveis">疼痛</h3>
											<?php break; ?>

										<?php } ?>
									</label>
								</div>
								<div class="col-md-3" style='cursor: pointer;'>
									<label>
										<input type="checkbox" name="sintomas[]" id="Higiene" value="Higiene" onclick="validaOpcao(this);">
										<img src="<?php print_r(base_url('assets/images/sintomas/higiene.png')); ?>" class="iconeperguntas">
										<?php switch ($this->session->userdata('lang')) {		

											case 'pt-br': ?>
												<h3 class="texticonesselecionaveis">Higiene</h3>
											<?php break; ?>

											<?php case 'en-us': ?>
												<h3 class="texticonesselecionaveis">Hygiene</h3>
											<?php break; ?>

											<?php case 'es-es': ?>
												<h3 class="texticonesselecionaveis">Higiene</h3>
											<?php break; ?>

											<?php case 'ch-sp': ?>
												<h3 class="texticonesselecionaveis">个人卫生</h3>
											<?php break; ?>

										<?php } ?>
									</label>
								</div>
								<div class="col-md-3" style='cursor: pointer;'>
									<label>
										<input type="checkbox" name="sintomas[]" id="Vestirse" value="Vestirse" onclick="validaOpcao(this);">
										<img src="<?php print_r(base_url('assets/images/sintomas/vestirse.png')); ?>" class="iconeperguntas">
										<?php switch ($this->session->userdata('lang')) {		

											case 'pt-br': ?>
												<h3 class="texticonesselecionaveis">Vestir-se</h3>
											<?php break; ?>

											<?php case 'en-us': ?>
												<h3 class="texticonesselecionaveis">Wearing</h3>
											<?php break; ?>

											<?php case 'es-es': ?>
												<h3 class="texticonesselecionaveis">Vestirse</h3>
											<?php break; ?>

											<?php case 'ch-sp': ?>
												<h3 class="texticonesselecionaveis">穿衣</h3>
											<?php break; ?>

										<?php } ?>
									</label>
								</div>
								<div class="col-md-3" style='cursor: pointer;'>
									<label>
										<input type="checkbox" name="sintomas[]" id="Alimentacao" value="Alimentacao" onclick="validaOpcao(this);">
										<img src="<?php print_r(base_url('assets/images/sintomas/alimentacao.png')); ?>" class="iconeperguntas">
										<?php switch ($this->session->userdata('lang')) {		

											case 'pt-br': ?>
												<h3 class="texticonesselecionaveis">Relacionados a alimentação</h3>
											<?php break; ?>

											<?php case 'en-us': ?>
												<h3 class="texticonesselecionaveis">Related to eating</h3>
											<?php break; ?>

											<?php case 'es-es': ?>
												<h3 class="texticonesselecionaveis">Relacionado com la comida</h3>
											<?php break; ?>

											<?php case 'ch-sp': ?>
												<h3 class="texticonesselecionaveis">和进食相关</h3>
											<?php break; ?>

										<?php } ?>
									</label>
								</div>								
							</div>

							<div class="row">
								<div class="col-md-3" style='cursor: pointer;'>
									<label>
										<input type="checkbox" name="sintomas[]" id="Incontinencia" value="Incontinencia" onclick="validaOpcao(this);">
										<img src="<?php print_r(base_url('assets/images/sintomas/incontinencia.png')); ?>" class="iconeperguntas">
										<?php switch ($this->session->userdata('lang')) {		

											case 'pt-br': ?>
												<h3 class="texticonesselecionaveis">Incontinência</h3>
											<?php break; ?>

											<?php case 'en-us': ?>
												<h3 class="texticonesselecionaveis">Incontinence</h3>
											<?php break; ?>

											<?php case 'es-es': ?>
												<h3 class="texticonesselecionaveis">Incontinencia</h3>
											<?php break; ?>

											<?php case 'ch-sp': ?>
												<h3 class="texticonesselecionaveis">大小便失禁</h3>
											<?php break; ?>

										<?php } ?>
									</label>
								</div>								
								<div class="col-md-3" style='cursor: pointer;'>
									<label>
										<input type="checkbox" name="sintomas[]" id="Fadiga" value="Fadiga" onclick="validaOpcao(this);">
										<img src="<?php print_r(base_url('assets/images/sintomas/fadiga.png')); ?>" class="iconeperguntas">
										<?php switch ($this->session->userdata('lang')) {		

											case 'pt-br': ?>
												<h3 class="texticonesselecionaveis">Fadiga</h3>
											<?php break; ?>

											<?php case 'en-us': ?>
												<h3 class="texticonesselecionaveis">Fatigue</h3>
											<?php break; ?>

											<?php case 'es-es': ?>
												<h3 class="texticonesselecionaveis">Fatiga</h3>
											<?php break; ?>

											<?php case 'ch-sp': ?>
												<h3 class="texticonesselecionaveis">疲劳/疲乏</h3>
											<?php break; ?>

										<?php } ?>
									</label>
								</div>								
							</div>


							<div class="row">
								<div class="col-md-10"></div>
								<div class="col-md-2">
									<label for="yes1" class="yes"><input type="radio" name="primeira" id="yes1" value="Sim" onclick="document.getElementById('formprincipal').submit();">
									<img src="<?php print_r(base_url('assets/images/8.png')); ?>" class="iconeperguntas" style="height: 200px;">
									<?php switch ($this->session->userdata('lang')) {		

										case 'pt-br': ?>
											<h3 class="texticonesselecionaveis" style="margin-bottom: 3rem; opacity: 1;">Seguinte</h3>	
										<?php break; ?>

										<?php case 'en-us': ?>
											<h3 class="texticonesselecionaveis" style="margin-bottom: 3rem; opacity: 1;">Next</h3>	
										<?php break; ?>

										<?php case 'es-es': ?>
											<h3 class="texticonesselecionaveis" style="margin-bottom: 3rem; opacity: 1;">Próximo</h3>			
										<?php break; ?>

										<?php case 'ch-sp': ?>
											<h3 class="texticonesselecionaveis" style="margin-bottom: 3rem; opacity: 1;">下一步</h3>
										<?php break; ?>

									<?php } ?>

								</div>
							</div>

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

	<script type="text/javascript">
		function validaOpcao(campo) {

			if (campo.value == 'Nenhum') {
				document.getElementById('Motores').checked = false;
				document.getElementById('Fala').checked = false;
				document.getElementById('Leitura').checked = false;
				document.getElementById('Desequilibrio').checked = false;
				document.getElementById('Parestesia').checked = false;
				document.getElementById('Escrita').checked = false;
				document.getElementById('Sensibilidade').checked = false;
				document.getElementById('Cognitivos').checked = false;
				document.getElementById('Visuais').checked = false;
				document.getElementById('Degluticao').checked = false;
				document.getElementById('Depressao').checked = false;
				document.getElementById('Dor').checked = false;
				document.getElementById('Higiene').checked = false;
				document.getElementById('Vestirse').checked = false;
				document.getElementById('Alimentacao').checked = false;
				document.getElementById('Incontinencia').checked = false;
				document.getElementById('Fadiga').checked = false;
			} else {
				document.getElementById('Nenhum').checked = false;
			}

		}
	</script>

</footer>
</html>