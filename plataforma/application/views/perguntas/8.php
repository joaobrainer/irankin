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
						<?php if ($this->session->userdata('lang') == 'pt-br') { ?>
							<h1>Baseado nos dados disponíveis, marque as respostas da habilidade do paciente para realizar a atividade e não apenas se o paciente realiza a atividade atualmente.</h1>
						<?php } elseif ($this->session->userdata('lang') == 'en-us') { ?>
							<h1>Based on available data, mark responses from the ability of the patient to perform the activity and not whether the patient actually performs the activity currently</h1>
						<?php } ?>

						<img src="<?php print_r(base_url('assets/images/8.png')); ?>" class="iconeperguntas" style='cursor: pointer;' onclick="location.href = '9';">
					</div>
				</div>

				<div class="row" style="margin-top: 5rem;">
					<div class="col-md-12">
						<a href="#" class="hintsandtips" data-toggle="modal" data-target="#modalHintsandTips">
							<img src="<?php print_r(base_url('assets/images/hints_and_tips.png')); ?>" class="iconeperguntas" style='cursor: pointer;'>
							<?php if ($this->session->userdata('lang') == 'pt-br') { ?>
								<h1>Clique aqui para dicas e orientações</h1>
							<?php } elseif ($this->session->userdata('lang') == 'en-us') { ?>
								<h1>Click here for hints and tips</h1>
							<?php } ?>
						</a>
					</div>
				</div>
			</div>

		</div>
	</div>

<div class="modal fade" id="modalHintsandTips" tabindex="-1" role="dialog" aria-labelledby="modalHintsandTipsLabel" aria-hidden="true">
	<div class="modal-dialog " role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalHintsandTipsLabel">Hints and tips</h5>
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
						<?php if ($this->session->userdata('lang') == 'pt-br') { ?>
							<p>Em todos os níveis, o efeito das consequências diretas ou indiretas do AVC precisa ser considerado. Por exemplo, se uma pessoa está se recuperando bem do AVC, mas cai e sofre uma fratura no colo do fêmur, ela fica imóvel e com mRS minima de 4, mesmo que o AVC não seja diretamente responsável pela alteração funcional.</p>
						<?php } elseif ($this->session->userdata('lang') == 'en-us') { ?>
							<p>At all levels, the effect of direct or indirect consequences of stroke needs to be considered. For example, if a person is making a good recovery from their stroke but falls and sustains a fractured neck of the femur then they are immobile and minimum mRS 4, even though the stroke is not directly responsible for the functional change.</p>
						<?php } ?>
						<?php if ($this->session->userdata('lang') == 'pt-br') { ?>
							<p style="color: #ff0000;">Se ainda estiver em dúvida entre duas alternativas, escolha o pior grau.</p>
						<?php } elseif ($this->session->userdata('lang') == 'en-us') { ?>
							<p style="color: #ff0000;">If still in doubt between two alternatives, choose the worst grade</p>
						<?php } ?>
					</div>
				</div>

				<div class="row" style="margin-top: 1rem;">
					<div class="col-md-3">
						<img src="<?php print_r(base_url('assets/images/mrs0.png')); ?>" class="iconeperguntas" style="height: 100px; padding-top: 0px;">
					</div>
					<div class="col-md-9">
						<p>
							<span style="background-color: #000; color: #fff;">mRS 0</span>
							<?php if ($this->session->userdata('lang') == 'pt-br') { ?>
								- Mesmo sintomas sutis devem pontuat. Os pacientes podem não apresentar sintomas não-físicos, como fadiga, e pode ser útil perguntar ativamente sobre esses sintomas.
							<?php } elseif ($this->session->userdata('lang') == 'en-us') { ?>
								- Even subtle symptoms should score a point. Patients may not volunteer non-physical symptoms such as fatigue and it can be useful to routinely ask about these.
							<?php } ?>
						</p>
					</div>
				</div>

				<div class="row" style="margin-top: 1rem;">
					<div class="col-md-3">
						<img src="<?php print_r(base_url('assets/images/mrs1.png')); ?>" class="iconeperguntas" style="height: 100px; padding-top: 0px;">
					</div>
					<div class="col-md-9">
						<p>
							<span style="background-color: #000; color: #fff;">mRS 1</span>
							<?php if ($this->session->userdata('lang') == 'pt-br') { ?>
								- Pode haver situações em que o paciente não está ciente dos sinais/sintomas, mas um informante (família, cuidador) percebe um problema. Por exemplo: o paciente acha que a fala está boa e a família acha que ainda há disartria leve. A visão do informante é importante e isso deve ser pontuado.
							<?php } elseif ($this->session->userdata('lang') == 'en-us') { ?>
								- There can be situations where the patient is not aware of signs/symptoms but an informant (family, caregiver) notices a problem eg the patient thinks the speech is fine, and the family thinks there is still mild dysarthria. The informant's view is important and this should score a point.
							<?php } ?>
						</p>
					</div>
				</div>

				<div class="row" style="margin-top: 1rem;">
					<div class="col-md-3">
						<img src="<?php print_r(base_url('assets/images/mrs2.png')); ?>" class="iconeperguntas" style="height: 100px; padding-top: 0px;">
					</div>
					<div class="col-md-9">
						<p>
							<span style="background-color: #000; color: #fff;">mRS 2</span>
							<?php if ($this->session->userdata('lang') == 'pt-br') { ?>
								- Pode haver situações em que um paciente de AVC não possa retornar às atividades anteriores devido a barreiras legais ou sociais, por exemplo, não pode voltar a dirigir por quatro semanas após um AVC em países como o Reino Unido. Essas barreiras não devem ser consideras limitação, pois a escala é baseada no que a pessoa pode fazer, e não no que ela tem permissão para fazer.
							<?php } elseif ($this->session->userdata('lang') == 'en-us') { ?>
								- There may be situations where a stroke survivor cant return to previous activities due to legal or societal barriers eg can’t return to driving for four weeks after a stroke in countries like the UK. These barriers should not inform scoring, the score is based on what the person can do, not what they are allowed to do.
							<?php } ?>
						</p>
					</div>
				</div>

				<div class="row" style="margin-top: 1rem;">
					<div class="col-md-3">
						<img src="<?php print_r(base_url('assets/images/mrs3.png')); ?>" class="iconeperguntas" style="height: 100px; padding-top: 0px;">
					</div>
					<div class="col-md-9">
						<p>
							<span style="background-color: #000; color: #fff;">mRS 3</span>
							<?php if ($this->session->userdata('lang') == 'pt-br') { ?>
								- A execução de tarefas implica segurança na atividade. Uma pessoa com problemas cognitivos e negligência visuoespacial pode ser capaz de completar as tarefas necessárias para fazer uma refeição, mas se precisar de supervisão constante e alerta para mantê-la segura, não deve ser considerada como capaz de realizar atividades da vida diária de forma independente.
							<?php } elseif ($this->session->userdata('lang') == 'en-us') { ?>
								- Performing tasks implies safety in the activity. A person with cognitive problems and visuospatial neglect may be able to complete the tasks required to make a meal, but if they need constant supervision and prompting to keep them safe then they should not be scored as able to perform activities of daily living.
							<?php } ?>
						</p>
					</div>
				</div>

				<div class="row" style="margin-top: 1rem;">
					<div class="col-md-3">
						<img src="<?php print_r(base_url('assets/images/mrs4.png')); ?>" class="iconeperguntas" style="height: 100px; padding-top: 0px;">
					</div>
					<div class="col-md-9">
						<p>
							<span style="background-color: #000; color: #fff;">mRS 4</span>
							<?php if ($this->session->userdata('lang') == 'pt-br') { ?>
								- Se uma pessoa estiver em cadeira de rodas, a pontuação é baseada na habilidade de ser independente com a cadeira. Isso inclui transferências independentes on/off e mobilidade autônoma na cadeira.
							<?php } elseif ($this->session->userdata('lang') == 'en-us') { ?>
								- If a person is a wheelchair user, the score is based on independent ability with the chair. This includes independent transfers on/off and safe mobility in the chair.
							<?php } ?>
						</p>
					</div>
				</div>

				<div class="row" style="margin-top: 1rem;">
					<div class="col-md-3">
						<img src="<?php print_r(base_url('assets/images/mrs5.png')); ?>" class="iconeperguntas" style="height: 100px; padding-top: 0px;">
					</div>
					<div class="col-md-9">
						<p>
							<span style="background-color: #000; color: #fff;">mRS 5</span>
							<?php if ($this->session->userdata('lang') == 'pt-br') { ?>
								- A frase “acamado”, conforme usada na pontuação original do mRS, pode ser enganosa. Cuidados contemporâneos raramente teriam alguém constantemente na cama. Um sobrevivente de acidente vascular cerebral que pode usar assento especializado, mas requer equipamento para a transferência e supervisão para segurança ainda é mRS 5.
							<?php } elseif ($this->session->userdata('lang') == 'en-us') { ?>
								- The phrase ‘bedfast’ as used in the original mRS scoring can be misleading. Contemporary care would rarely have someone constantly in bed. A stroke survivor that can use specialist seating but requires equipment for the transfer and supervision for safety is still mRS 5.
							<?php } ?>
						</p>
					</div>
				</div>

				<div class="row" style="margin-top: 1rem; text-align: center;">
					<div class="col-md-12">
						<?php if ($this->session->userdata('lang') == 'pt-br') { ?>
							<p>Dicas e sugestões fornecidas pelo Prof Terence Quinn, MD, PhD</p>
						<?php } elseif ($this->session->userdata('lang') == 'en-us') { ?>
							<p>Hints and tips provided by Prof Terence Quinn, MD, PhD</p>
						<?php } ?>
					</div>
				</div>

			</div>
			<div class="modal-footer">
				
				<?php if ($this->session->userdata('lang') == 'pt-br') { ?>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				<?php } elseif ($this->session->userdata('lang') == 'en-us') { ?>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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