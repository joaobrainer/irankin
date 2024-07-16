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
							<h1>Baseado nos dados disponíveis, marque as respostas da habilidade do paciente para realizar a atividade e não apenas se o paciente realiza a atividade atualmente.</h1>
						<?php break; ?>

						<?php case 'en-us': ?>
							<h1>Based on available data, mark responses from the ability of the patient to perform the activity and not whether the patient actually performs the activity currently</h1>
						<?php break; ?>

						<?php case 'es-es': ?>
							<h1>Según los datos disponibles, califique las respuestas según la capacidad del paciente para realizar la actividad y no solo si el paciente realiza actualmente la actividad.</h1>
						<?php break; ?>

						<?php case 'ch-sp': ?>
							<h1>请基于病人目前的状态，来评判病人完成工作（任务/操作）的能力，请不要基于病人现在是否真正在从事类似的工作（任务/操作）来评判</h1>
						<?php break; ?>

						<?php case 'ch-tr': ?>
							<h1>根據病人目前的狀況，評估病人執行活動的能力，而不是基於病人目前是否實際進行該活動。</h1>
						<?php break; ?>

					<?php } ?>
						<img src="<?php print_r(base_url('assets/images/8.png')); ?>" class="iconeperguntas" style='cursor: pointer;' onclick="location.href = '9';">
					</div>
				</div>

				<div class="row" style="margin-top: 5rem;">
					<div class="col-md-12">
						<a href="#" class="hintsandtips" data-toggle="modal" data-target="#modalHintsandTips">
							<img src="<?php print_r(base_url('assets/images/hints_and_tips.png')); ?>" class="iconeperguntas" style='cursor: pointer;'>
							<?php switch ($this->session->userdata('lang')) {		

								case 'pt-br': ?>
									<h1>Clique aqui para dicas e orientações</h1>
								<?php break; ?>

								<?php case 'en-us': ?>
									<h1>Click here for hints and tips</h1>
								<?php break; ?>

								<?php case 'es-es': ?>
									<h1>Haz clic aquí para consejos y orientaciones</h1>
								<?php break; ?>

								<?php case 'ch-sp': ?>
									<h1>点击这里以获得评分提示和指引</h1>
								<?php break; ?>

								<?php case 'ch-tr': ?>
									<h1>按此取得提示和小貼士</h1>
								<?php break; ?>

							<?php } ?>
						</a>
					</div>
				</div>
			</div>

		</div>
	</div>

<div class="modal fade" id="modalHintsandTips" tabindex="-1" role="dialog" aria-labelledby="modalHintsandTipsLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
			<?php switch ($this->session->userdata('lang')) {
				case 'pt-br': ?>
					<h5 class="modal-title" id="modalHintsandTipsLabel">Dicas e orientações</h5>
				<?php break; ?>

				<?php case 'en-us': ?>
					<h5 class="modal-title" id="modalHintsandTipsLabel">Hints and tips</h5>
				<?php break; ?>

				<?php case 'es-es': ?>
					<h5 class="modal-title" id="modalHintsandTipsLabel">consejos y orientaciones</h5>
				<?php break; ?>

				<?php case 'ch-sp': ?>
					<h5 class="modal-title" id="modalHintsandTipsLabel">评分提示和指引</h5>
				<?php break; ?>

				<?php case 'ch-tr': ?>
					<h5 class="modal-title" id="modalHintsandTipsLabel">提示和小貼士</h5>
				<?php break; ?>

			<?php } ?>
				
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="border: 0px;background-color: #fff;">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<div class="row">
					<div class="col-md-12" style="text-align: center;">
						<img src="<?php print_r(base_url('assets/images/hints_and_tips.png')); ?>" class="iconeperguntas" style="height: 100px; padding-top: 0px;">
					</div>
				</div>
				<div class="row">
					<div class="col-md-12" style="text-align: center;">
						<?php switch ($this->session->userdata('lang')) {		

							case 'pt-br': ?>
								<p>Em todos os níveis, o efeito das consequências diretas ou indiretas do AVC precisa ser considerado. Por exemplo, se uma pessoa está se recuperando bem do AVC, mas cai e sofre uma fratura no colo do fêmur, ela fica imóvel e com mRS minima de 4, mesmo que o AVC não seja diretamente responsável pela alteração funcional.</p>
							<?php break; ?>

							<?php case 'en-us': ?>
								<p>At all levels, the effect of direct or indirect consequences of stroke needs to be considered. For example, if a person is making a good recovery from their stroke but falls and sustains a fractured neck of the femur then they are immobile and minimum mRS 4, even though the stroke is not directly responsible for the functional change.</p>
							<?php break; ?>

							<?php case 'es-es': ?>
								<p>En todos los niveles, es necesario considerar el efecto de las consecuencias directas o indirectas del accidente cerebrovascular. Por ejemplo, si una persona se recupera bien de un ictus, pero se cae y sufre una fractura en el cuello femoral, permanece inmóvil y con una mRS mínima de 4, aunque el ictus no sea directamente responsable del cambio funcional.</p>
							<?php break; ?>

							<?php case 'ch-sp': ?>
								<p>评分时，卒中（中风）所有层面的直接或非直接的后果都需要考虑。比如，有病人尽管卒中（中风）实际恢复得很好，但因为跌倒导致股骨颈骨折而不能行走，那mRS最起码评4分，尽管卒中(中风）并不直接导致病人目前的功能状态。</p>
							<?php break; ?>

							<?php case 'ch-tr': ?>
								<p>任何因中風在各個層面的直接或間接後果導致的影響都需要考慮。例如，一位康復進展良好的中風病人，因跌傷引致的髖關節骨折，而造成無法行走，mRS評分至少為 4，即使中風並不是直接導致功能改變。</p>
							<?php break; ?>

						<?php } ?>		
						
						<?php switch ($this->session->userdata('lang')) {		

							case 'pt-br': ?>
								<p style="color: #ff0000;">Se ainda estiver em dúvida entre duas alternativas, escolha o pior grau.</p>
							<?php break; ?>

							<?php case 'en-us': ?>
								<p style="color: #ff0000;">If still in doubt between two alternatives, choose the worst grade</p>
							<?php break; ?>

							<?php case 'es-es': ?>
								<p style="color: #ff0000;">Si todavía tienes dudas entre dos alternativas, elige la peor calificación.</p>
							<?php break; ?>

							<?php case 'ch-sp': ?>
								<p style="color: #ff0000;">如果不知道两个选项该如何选择，选差的那一个评分</p>
							<?php break; ?>

							<?php case 'ch-tr': ?>
								<p style="color: #ff0000;">如果在兩個選項之間仍有疑問，請選擇最差的等級。</p>
							<?php break; ?>

						<?php } ?>
					</div>
				</div>

				<div class="row" style="margin-top: 1rem;">
					<div class="col-md-3">
						<img src="<?php print_r(base_url('assets/images/mrs0.png')); ?>" class="" style="height: 100px; padding-top: 0px;">
					</div>
					<div class="col-md-9">
						<p>
							<span style="background-color: #000; color: #fff;">mRS 0</span>
							<?php switch ($this->session->userdata('lang')) {		

								case 'pt-br': ?>
									- Mesmo sintomas sutis devem pontuat. Os pacientes podem não apresentar sintomas não-físicos, como fadiga, e pode ser útil perguntar ativamente sobre esses sintomas.
								<?php break; ?>

								<?php case 'en-us': ?>
									- Even subtle symptoms should score a point. Patients may not volunteer non-physical symptoms such as fatigue and it can be useful to routinely ask about these.
								<?php break; ?>

								<?php case 'es-es': ?>
									 - Incluso los síntomas sutiles deben destacarse. Es posible que los pacientes no presenten síntomas no físicos, como fatiga, y puede resultar útil preguntar activamente sobre estos síntomas.
								<?php break; ?>

								<?php case 'ch-sp': ?>
									- 即使是细微的症状也应该给分，病人可能不会主动提供诸如疲劳等身体症状，应常规询问诸如疲劳这一类身体症状
								<?php break; ?>

								<?php case 'ch-tr': ?>
									- 即使是細微的症狀也應該計分。病人可能因病症輕微而不向醫護人員反映，例如疲勞，應常規詢問這些症狀。
								<?php break; ?>

							<?php } ?>
						</p>
					</div>
				</div>

				<div class="row" style="margin-top: 1rem;">
					<div class="col-md-3">
						<img src="<?php print_r(base_url('assets/images/mrs1.png')); ?>" class="" style="height: 100px; padding-top: 0px;">
					</div>
					<div class="col-md-9">
						<p>
							<span style="background-color: #000; color: #fff;">mRS 1</span>
							<?php switch ($this->session->userdata('lang')) {		

								case 'pt-br': ?>
									- Pode haver situações em que o paciente não está ciente dos sinais/sintomas, mas um informante (família, cuidador) percebe um problema. Por exemplo: o paciente acha que a fala está boa e a família acha que ainda há disartria leve. A visão do informante é importante e isso deve ser pontuado.
								<?php break; ?>

								<?php case 'en-us': ?>
									- There can be situations where the patient is not aware of signs/symptoms but an informant (family, caregiver) notices a problem eg the patient thinks the speech is fine, and the family thinks there is still mild dysarthria. The informant's view is important and this should score a point.
								<?php break; ?>

								<?php case 'es-es': ?>
									- Puede haber situaciones en las que el paciente no sea consciente de los signos/síntomas, pero un informante (familiar, cuidador) note un problema. Por ejemplo: el paciente cree que su habla está bien y la familia piensa que todavía tiene una disartria leve. La opinión del informante es importante y hay que destacarla.
								<?php break; ?>

								<?php case 'ch-sp': ?>
									- 如果存在病人不认为自己存在病症/症状，但知情者（家人、护理人员）注意到他/她有问题，例如病人认为自己说话正常，而家人认为有轻微的构音障碍。知情者的观点很重要，应该给分。
								<?php break; ?>

								<?php case 'ch-tr': ?>
									- 有時候受訪者（病人的家人照顧者）可能發現病人忽略的徵兆 /症狀。例如病人認為自己言語正常，而家人認為病人仍然有輕微的言語不清。受訪者的觀點是重要的，這應該得到1分。
								<?php break; ?>

							<?php } ?>
						</p>
					</div>
				</div>

				<div class="row" style="margin-top: 1rem;">
					<div class="col-md-3">
						<img src="<?php print_r(base_url('assets/images/mrs2.png')); ?>" class="" style="height: 100px; padding-top: 0px;">
					</div>
					<div class="col-md-9">
						<p>
							<span style="background-color: #000; color: #fff;">mRS 2</span>
							<?php switch ($this->session->userdata('lang')) {		

								case 'pt-br': ?>
									- Pode haver situações em que um paciente de AVC não possa retornar às atividades anteriores devido a barreiras legais ou sociais, por exemplo, não pode voltar a dirigir por quatro semanas após um AVC em países como o Reino Unido. Essas barreiras não devem ser consideras limitação, pois a escala é baseada no que a pessoa pode fazer, e não no que ela tem permissão para fazer.
								<?php break; ?>

								<?php case 'en-us': ?>
									- There may be situations where a stroke survivor cant return to previous activities due to legal or societal barriers eg can’t return to driving for four weeks after a stroke in countries like the UK. These barriers should not inform scoring, the score is based on what the person can do, not what they are allowed to do.
								<?php break; ?>

								<?php case 'es-es': ?>
									- Puede haber situaciones en las que un paciente con un accidente cerebrovascular no pueda volver a sus actividades anteriores debido a barreras legales o sociales; por ejemplo, no puede volver a conducir durante cuatro semanas después de un accidente cerebrovascular en países como el Reino Unido. Estas barreras no deben considerarse limitaciones, ya que la escala se basa en lo que la persona puede hacer, no en lo que se le permite hacer.
								<?php break; ?>

								<?php case 'ch-sp': ?>
									- 如果卒中(中风)病人因为法律或社会因素而无法恢复以前的活动，例如在英国等国家规定卒中(中风)后四周内不能驾驶，或者家人不放心他/她做某一种任务/操作。这一类原因导致病人没有恢复以前的活动，就不应影响评分，评分基于个人可以做什么，而不是他们被允许做什么。
								<?php break; ?>

								<?php case 'ch-tr': ?>
									- 在某些情況下，由於法律或社會因素，中風倖存者可能無法恢復以前的活動，例如在英國等國家/地區，中風後四周內不能駕駛車輛。這些因素不應影響評分，評分是基於個人能做什麼，而不是他們被允許做什麼。
								<?php break; ?>

							<?php } ?>						
						</p>
					</div>
				</div>

				<div class="row" style="margin-top: 1rem;">
					<div class="col-md-3">
						<img src="<?php print_r(base_url('assets/images/mrs3.png')); ?>" class="" style="height: 100px; padding-top: 0px;">
					</div>
					<div class="col-md-9">
						<p>
							<span style="background-color: #000; color: #fff;">mRS 3</span>
							<?php switch ($this->session->userdata('lang')) {		

								case 'pt-br': ?>
									- A execução de tarefas implica segurança na atividade. Uma pessoa com problemas cognitivos e negligência visuoespacial pode ser capaz de completar as tarefas necessárias para fazer uma refeição, mas se precisar de supervisão constante e alerta para mantê-la segura, não deve ser considerada como capaz de realizar atividades da vida diária de forma independente.
								<?php break; ?>

								<?php case 'en-us': ?>
									- Performing tasks implies safety in the activity. A person with cognitive problems and visuospatial neglect may be able to complete the tasks required to make a meal, but if they need constant supervision and prompting to keep them safe then they should not be scored as able to perform activities of daily living.
								<?php break; ?>

								<?php case 'es-es': ?>
									- La realización de tareas implica seguridad en la actividad. Una persona con problemas cognitivos y negligencia visuoespacial puede ser capaz de completar las tareas necesarias para comer, pero si requiere supervisión y estado de alerta constantes para mantenerse a salvo, no se le debe considerar capaz de realizar las actividades de la vida diaria de forma independiente.
								<?php break; ?>

								<?php case 'ch-sp': ?>
									- 执行任务的能力需要考虑到活动的安全性。有认知问题和视觉空间忽视的人可能能够完成做饭所需的任务，但如果他们需要持续的监督和提示来确保他们的安全，那么他们就不应该被认为能够进行日常生活活动。
								<?php break; ?>

								<?php case 'ch-tr': ?>
									- 執行任務的能力需要考慮活動的安全性。一個有認知問題和視覺空間忽視的人可能能夠完成做飯所需的任務，但如果他們需要不斷的監督和提示以確保他們的安全，那麼他們不應該被評分為能夠進行日常生活活動。
								<?php break; ?>

							<?php } ?>
						</p>
					</div>
				</div>

				<div class="row" style="margin-top: 1rem;">
					<div class="col-md-3">
						<img src="<?php print_r(base_url('assets/images/mrs4.png')); ?>" class="" style="height: 100px; padding-top: 0px;">
					</div>
					<div class="col-md-9">
						<p>
							<span style="background-color: #000; color: #fff;">mRS 4</span>
							<?php switch ($this->session->userdata('lang')) {		

								case 'pt-br': ?>
									- Se uma pessoa estiver em cadeira de rodas, a pontuação é baseada na habilidade de ser independente com a cadeira. Isso inclui transferências independentes on/off e mobilidade autônoma na cadeira.
								<?php break; ?>

								<?php case 'en-us': ?>
									- If a person is a wheelchair user, the score is based on independent ability with the chair. This includes independent transfers on/off and safe mobility in the chair.
								<?php break; ?>

								<?php case 'es-es': ?>
									- Si una persona está en silla de ruedas, la puntuación se basa en la capacidad de ser independiente con la silla de ruedas. Esto incluye transferencias independientes para otros sítios y movilidad autónoma em el sillón.
								<?php break; ?>

								<?php case 'ch-sp': ?>
									- 如果病人卒中(中风)前已经在使用轮椅，则评分基于他/她独立使用轮椅的能力，包括独立上、下轮椅的能力以及在轮椅上安全移动的能力。
								<?php break; ?>

								<?php case 'ch-tr': ?>
									- 如果病人中風前是一名輪椅使用者，評分則基於病人能獨立使用輪椅的能力，包括自行上下輪椅和安全使用輪椅移動。
								<?php break; ?>

							<?php } ?>
						</p>
					</div>
				</div>

				<div class="row" style="margin-top: 1rem;">
					<div class="col-md-3">
						<img src="<?php print_r(base_url('assets/images/mrs5.png')); ?>" class="" style="height: 100px; padding-top: 0px;">
					</div>
					<div class="col-md-9">
						<p>
							<span style="background-color: #000; color: #fff;">mRS 5</span>
							<?php switch ($this->session->userdata('lang')) {		

								case 'pt-br': ?>
									- A frase “acamado”, conforme usada na pontuação original do mRS, pode ser enganosa. Cuidados contemporâneos raramente teriam alguém constantemente na cama. Um sobrevivente de acidente vascular cerebral que pode usar assento especializado, mas requer equipamento para a transferência e supervisão para segurança ainda é mRS 5.
								<?php break; ?>

								<?php case 'en-us': ?>
									- The phrase ‘bedfast’ as used in the original mRS scoring can be misleading. Contemporary care would rarely have someone constantly in bed. A stroke survivor that can use specialist seating but requires equipment for the transfer and supervision for safety is still mRS 5.
								<?php break; ?>

								<?php case 'es-es': ?>
									- La frase “postrado en cama”, tal como se utiliza en la puntuación mRS original, puede resultar engañosa. Los cuidados contemporáneos rara vez tendrían a alguien constantemente en cama. Un superviviente de un accidente cerebrovascular que puede utilizar un asiento especializado pero requiere equipo para el traslado y supervisión por motivos de seguridad sigue siendo mRS 5.
								<?php break; ?>

								<?php case 'ch-sp': ?>
									- 原始 mRS 评分中使用的“卧床不起”一词可能会产生误导。现代护理很少会让病人一直卧床。卒中(中风) 幸存病人如果需要使用专门的座椅，但需要设备或其它人力进行转移和监督以确保其行走安全，其 mRS 评分仍为 5。
								<?php break; ?>

								<?php case 'ch-tr': ?>
									- 原版mRS評分中使用的詞語「卧床不起」可能會產生誤導。現代護理很少會讓人一直臥床不起。中風倖存者可以使用專門的座椅，但需要設備進行轉移和安全監督的， mRs評分仍然是 5。
								<?php break; ?>

							<?php } ?>
						</p>
					</div>
				</div>

				<div class="row" style="margin-top: 1rem; text-align: center;">
					<div class="col-md-12">
					<?php switch ($this->session->userdata('lang')) {		

						case 'pt-br': ?>
							<p>Dicas e sugestões fornecidas pelo Prof Terence Quinn, MD, PhD</p>
						<?php break; ?>

						<?php case 'en-us': ?>
							<p>Hints and tips provided by Prof Terence Quinn, MD, PhD</p>
						<?php break; ?>

						<?php case 'es-es': ?>
							<p>Consejos y sugerencias proporcionados por el profesor Terence Quinn, MD, PhD</p>
						<?php break; ?>

						<?php case 'ch-sp': ?>
							<p>Terence Quinn 医学博士/哲学博士 提供的评分提示</p>
						<?php break; ?>

						<?php case 'ch-tr': ?>
							<p>由特倫斯 昆（Terence Quinn）教授提供的提示和小貼士 </p>
						<?php break; ?>

					<?php } ?>
					</div>
				</div>

			</div>
			<div class="modal-footer">				
			<?php switch ($this->session->userdata('lang')) {		

				case 'pt-br': ?>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				<?php break; ?>

				<?php case 'en-us': ?>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<?php break; ?>

				<?php case 'es-es': ?>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
				<?php break; ?>

				<?php case 'ch-sp': ?>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">关闭</button>
				<?php break; ?>

				<?php case 'ch-tr': ?>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">關閉</button>
				<?php break; ?>

			<?php } ?>
			</div>
		</div>
	</div>
</div>

</body>
<footer>

	<?php $this->load->view('footer'); ?>
<?php $this->load->view('footerperguntas'); ?>

</footer>
</html>