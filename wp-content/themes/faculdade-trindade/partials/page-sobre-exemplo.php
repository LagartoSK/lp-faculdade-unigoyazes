<?php
	// Template name: Sobre

	get_header();

	$id_page = get_the_ID();
?>

	<?php //include( "inc-breadcrumbs.php" ); ?>

	<section class="sobre pega-interna-sobre scroll" id="sobre">
		<div class="container">
			<div class="title-sobre">
				<h2 class=""><?php echo get_post_meta( $id_page, 'wsg_sobre_01_titulo', true ); ?></h2>
				<div class="line-sobre"></div>
			</div>
			<div class="txt-sobre">
				<?php echo get_post_meta( $id_page, 'wsg_sobre_01_conteudo', true ); ?>
			</div>
			<div class="equipe">
				<div class="row">
					<?php
						$wsg_equipe_na_sobre = get_post_meta( $id_page, 'wsg_equipe_na_sobre', true );
						if (!empty($wsg_equipe_na_sobre)) {
							foreach ($wsg_equipe_na_sobre as $key => $equipeID) {
					?>
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
							<div class="equipe-box">
								<figure>
									<?php
										$wsg_equipe_item_img_id = get_post_meta( $equipeID, 'wsg_equipe_item_img_id', true );
										getImageThumb($wsg_equipe_item_img_id, '190x190');
									?>
								</figure>
								<div class="equipe-box-conteudo">
									<h3><?php echo get_the_title($equipeID); ?></h3>
									<h4><?php echo get_post_meta( $equipeID, 'wsg_equipe_item_cargo', true ); ?></h4>
									<?php echo wpautop(get_post_meta( $equipeID, 'wsg_equipe_item_resumo', true )); ?>

									<span class="equipe-email">
										<?php echo get_post_meta( $equipeID, 'wsg_equipe_item_email', true ); ?>
									</span>

									<div class="equipe-social-midia">
										<?php
											$equipe_redes_sociais = get_post_meta( $equipeID, 'equipe_redes_sociais', true );
											foreach ($equipe_redes_sociais as $key => $entry) {
										?>
											<a href="<?php echo $entry['wsg_equipe_redes_sociais_link']; ?>"><span class="flaticon-<?php echo $entry['wsg_equipe_redes_sociais_icone']; ?>"></span></a>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					<?php } } ?>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>