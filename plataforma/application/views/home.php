<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('header'); ?>

	<?php $language = $this->session->userdata('lang'); ?>
</head>
<body>

	<div class="home">
		<div class="container">

			<div class="row">
				<div class="col-md-12 btnmenu">
					<a href="<?php print_r(base_url('sobre')) ?>"><img src="assets/images/menu.png"></a>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12 divlogo">
				</div>
			</div>

			<div class="row">
				<div class="col-md-12 btnentrar">
					<?php if ($language == 'pt-br') { ?>
						<a href="<?php print_r(base_url('perguntas/3?lang=pt-br')) ?>" class="btn btnpt">Iniciar <i class="fas fa-angle-right"></i></a>
					<?php } elseif ($language == 'en-us') { ?>
						<a href="<?php print_r(base_url('perguntas/3?lang=en-us')) ?>" class="btn btnpt">Start <i class="fas fa-angle-right"></i></a>
					<?php } elseif($language == 'es-es') { ?>
						<a href="<?php print_r(base_url('perguntas/3?lang=es-es')) ?>" class="btn btnpt">Iniciar <i class="fas fa-angle-right"></i></a>
					<?php } elseif ($language == 'ch-sp') { ?>
						<a href="<?php print_r(base_url('perguntas/3?lang=ch-sp')) ?>" class="btn btnpt">开始 <i class="fas fa-angle-right"></i></a>
					<?php }elseif ($language == 'ch-tr') { ?>
						<a href="<?php print_r(base_url('perguntas/3?lang=ch-tr')) ?>" class="btn btnpt">開始 <i class="fas fa-angle-right"></i></a>
					<?php }?>
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 btnentrar">
					<?php if ($language != 'pt-br') { ?>
						<a href="<?= base_url('?lang=pt-br') ?>"><img class="img-languages" src="<?= base_url('assets/images/languages/brasil.png')?>" alt="PT-BR"></a>
					<?php } ?>
					<?php if ($language != 'es-es') { ?>
						<a href="<?= base_url('?lang=es-es') ?>"><img class="img-languages" src="<?= base_url('assets/images/languages/espanha.png')?>" alt="ES-ES"></a>
					<?php } ?>
					<?php if ($language != 'en-us') { ?>
						<a href="<?= base_url('?lang=en-us') ?>"><img class="img-languages" src="<?= base_url('assets/images/languages/estados-unidos.png')?>" alt="EN-US"></a>
					<?php } ?>
					<?php if ($language != 'ch-sp') { ?>
						<a href="<?= base_url('?lang=ch-sp') ?>"><img class="img-languages" src="<?= base_url('assets/images/languages/china.png')?>" alt="CH"></a>
					<?php } ?>
					<?php if ($language != 'ch-tr') { ?>
						<a href="<?= base_url('?lang=ch-tr') ?>"><img class="img-languages" src="<?= base_url('assets/images/languages/hong-kong.png')?>" alt="CH"></a>
					<?php } ?>

				</div>
			</div>

		</div>
	</div>

</body>
<footer>
	<?php $this->load->view('footer'); ?>
</footer>
</html>