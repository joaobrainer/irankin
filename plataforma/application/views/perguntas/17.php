<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('header'); ?>
</head>
<body>

	<div id="perguntas">
		<div class="container">

			<?php echo form_open("perguntas/resposta17", 'id="formprincipal"'); ?>

				<div id="primeira" class="fadein-animacao">
					<div class="row">
						<div class="col-md-12">
							<img src="<?php print_r(base_url('assets/images/17.png')); ?>" class="iconeperguntas">
							<?php switch ($this->session->userdata('lang')) {		

								case 'pt-br': ?>
									<h1>O paciente é capaz de caminhar e se deslocar <a href="#" class="tooltipwords" data-toggle="tooltip" title="Mesmo usando uma bengala, muleta ou andador, o paciente é capaz de realizar transferências sem ajuda de outra pessoa">independentemente</a>, mas usando bengala ou andador? <br> Responda NÃO se o paciente não precisa de nenhum tipo dessa ajuda (bengala, muleta, andador...)</h1>	
								<?php break; ?>

								<?php case 'en-us': ?>
									<h1>The patient is able to walk/move <a href="#" class="tooltipwords" data-toggle="tooltip" title="Even patients using stick, cane or walker patient should be able to transfer independently and use the aid without the assistance of another person">independetly</a>, but using stick/cane or walking frame/walker? <br> Mark NO if the patient does not need any aid (stick/cane/walker)</h1>	
								<?php break; ?>

								<?php case 'es-es': ?>
									<h1>¿El paciente puede caminar y moverse de forma <a href="#" class="tooltipwords" data-toggle="tooltip" title="Incluso utilizando bastón, muleta o andador, el paciente es capaz de realizar transferencias sin ayuda de otra persona.">independiente</a>, pero utilizando bastón o andador? Responda NO si el paciente no necesita ningún tipo de ayuda (bastón, muleta, andador…)</h1>			
								<?php break; ?>

								<?php case 'ch-sp': ?>
									<h1>病人是否能够独立行走/移动，但需要使用拐杖或助行架/助行器？如果病人不需要任何辅助工具（拐杖/助行器），请标记“否”	<a href="#" class="tooltipwords" data-toggle="tooltip" title=""></a></h1>
								<?php break; ?>

								<?php case 'ch-tr': ?>
									<h1>病人是否能夠獨立用拐杖/手杖或助行架/助行器攙扶下自行走動/移動？如果病人不需要任何輔助工具（拐杖/手杖/助行器），請回答“否”。<a href="#" class="tooltipwords" data-toggle="tooltip" title=""></a></h1>
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