<div class="container container-about1" style="background: url('<?php echo base_url($about->img_url)?>') !important; background-size: cover !important; background-repeat: no-repeat !important;"></div>

<div class="container container-about2">
	<img class="ver_green" src="<?php echo base_url('assets/img/ver-green.png')?>">
	<div class="row container-text container-text-about">
		<div class="col-md-6 left ct-about" >
			<h3 class="about-us-text"><?php echo $about->title ?></h3>
			<?php echo $about->description ?>
		</div>
		<div class="col-md-6 right">
			<h4 class="greenh4"> <?php echo $about->visi_title ?> </h4>
			<?php echo $about->vission ?>

			<h4 class="greenh4"> <?php echo $about->misi_title ?> </h4>
			<?php echo $about->mission ?>

		</div>
	</div>
	<img class="bottom-image" src="<?php echo base_url('assets/img/bottom-right.png')?>">
	<?php include "footer_text.php" ?>

</div>
