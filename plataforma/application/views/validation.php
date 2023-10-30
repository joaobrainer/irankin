<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('header'); ?>
</head>
<body>

	<div id="perguntas">
		<div class="container">

			<div id="sobre" class="fadein-animacao">

				<div class="row">
					<div class="col-md-12">
						<img style="padding-top: 0px;height: 15rem;" src="<?php print_r(base_url('assets/images/logo2.png')); ?>">
					</div>
				</div>

				<div class="row" style="margin-top: 3rem; margin-bottom: 2rem;">
					<div class="col-md-12">
						<h1 class="tituloconsentimento">Select your language</h1>
					</div>
				</div>

				<div class="row" style="text-align: center; margin-top: 2rem; margin: 0 auto;">
					<div class="col-md-12 pconsentimentos">
						<a href="<?php echo base_url('redirectValidation/pt-br'); ?>" class="btn portugues">Português</a>
						<a href="<?php echo base_url('redirectValidation/en-us'); ?>" class="btn ingles">English</a>
					</div>
				</div>
								

			</div>

		</div>
	</div>

</body>
<footer>

	<?php $this->load->view('footer'); ?>

</footer>
</html>