<?php
	// get_header();

	$id_page = get_the_ID();
?>

	<section class="at-teacher at-all-teacher">
		<div class="container">
			<header>
				<h2 class="at-title-main"><?php echo get_post_meta( $id_page, 'wsg_professores_listagem_titulo', true ); ?></h2>
				<p><?php echo get_post_meta( $id_page, 'wsg_professores_listagem_subtitulo', true ); ?></p>
			</header>

			<div class="at-all-teacher-container">
				<div class="swiper at-teacher_carousel">
					<div class="swiper-wrapper">
						<?php
							$wsg_professores_listagem_na_home = get_post_meta( $id_page, 'wsg_professores_listagem_na_home', true );
							foreach ($wsg_professores_listagem_na_home as $key => $postID) {
						?>
							<div class="swiper-slide">
								<div class="at-teacher_box">
									<a href="<?php echo get_post_meta( $postID, 'wsg_equipe_item_link', true ); ?>">
										<figure>
											<?php
												$wsg_equipe_item_img_id = get_post_meta( $postID, 'wsg_equipe_item_img_id', true );
												getImageThumb($wsg_equipe_item_img_id, '280x338');
											?>
										</figure>
										<div class="at-teacher_box_info">
											<h3 class="at-title-main"><?php echo get_the_title($postID); ?></h3>
											<?php echo wpautop(get_post_meta( $postID, 'wsg_equipe_item_resumo', true )); ?>
										</div>
									</a>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
				<div class="at-all-teacher_btns">
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>
			</div>
		</div>
	</section>

	<section class="at-discipline">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xm-12 col-12">
					<header>
						<h2 class="at-title-main"><?php echo get_post_meta( $id_page, 'wsg_disciplinas_titulo', true ); ?></h2>
						<p><?php echo get_post_meta( $id_page, 'wsg_disciplinas_subtitulo', true ); ?></p>
					</header>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xm-12 col-12">
					<div class="swiper at-disciplinas_carousel">
						<div class="swiper-wrapper">
							<?php
								$wsg_disciplinas_na_home = get_post_meta( $id_page, 'wsg_disciplinas_na_home', true );
								foreach ($wsg_disciplinas_na_home as $key => $postID) {
							?>
								<div class="swiper-slide">
									<div class="at-disciplinas_carousel_item">
										<figure>
											<?php
												$wsg_disciplina_item_img_id = get_post_meta( $postID, 'wsg_disciplina_item_img_id', true );
												getImageThumb($wsg_disciplina_item_img_id, '100x100');
											?>
										</figure>
										<h2><?php echo get_the_title($postID); ?></h2>
										<?php echo wpautop( get_post_meta( $postID, 'wsg_disciplina_item_resumo', true ) ); ?>
									</div>
								</div>
							<?php } ?>
						</div>
						<div class="swiper-pagination"></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php
		$wsg_action_img_bg_id = get_post_meta($id_page, 'wsg_action_img_bg_id', true);
		$wsg_action_img_bg_id = wp_get_attachment_image_src($wsg_action_img_bg_id, '1920x890');
		$wsg_action_img_bg_id = $wsg_action_img_bg_id[0];
	?>
	<section class="at-app" style="background-image: url(<?php echo $wsg_action_img_bg_id; ?>);">
		<div class="container">
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xm-12 col-12">
					<div class="at-app_box">
						<span class="at-sub-title-span"><?php echo get_post_meta( $id_page, 'wsg_call_to_action_sobretitulo', true ); ?></span>
						<h2 class="at-title-main"><?php echo get_post_meta( $id_page, 'wsg_call_to_action_titulo', true ); ?></h2>

						<a class="btn-main_page btn-main_page_border" href="<?php echo get_post_meta( $id_page, 'wsg_call_to_action_link', true ); ?>"><?php echo get_post_meta( $id_page, 'wsg_call_to_action_texto', true ); ?></a>
					</div>
				</div>

				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xm-12 col-12">
					<div class="at-app_box at-app_box_img">

						<div class="at-app-details">
							<p><?php echo get_post_meta( $id_page, 'wsg_call_to_action_img_titulo', true ); ?></p>
						</div>

						<figure class="at-app-img">
							<?php
								$wsg_action_img_id = get_post_meta( $id_page, 'wsg_action_img_id', true );
								getImageThumb($wsg_action_img_id, '200x400');
							?>
						</figure>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="at-testimony">
		<div class="container">
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xm-12 col-12">
					<header>
						<figure>
							<?php
								$wsg_depoimentos_img_id = get_post_meta( $id_page, 'wsg_depoimentos_img_id', true );
								getImageThumb($wsg_depoimentos_img_id, '250x250');
							?>
						</figure>

						<h2 class="at-title-main"><?php echo get_post_meta( $id_page, 'wsg_depoimentos_titulo', true ); ?></h2>
					</header>
				</div>

				<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xm-12 col-12">
					<div class="swiper at-testimony_carousel">
						<div class="swiper-wrapper">
							<?php
								$wsg_depoimentos_na_home = get_post_meta( $id_page, 'wsg_depoimentos_na_home', true );
								foreach ($wsg_depoimentos_na_home as $key => $postID) {
							?>
								<div class="swiper-slide">
									<div class="at-testimony_box">
										<figure>
											<?php
												$wsg_depoimento_item_img_id = get_post_meta( $postID, 'wsg_depoimento_item_img_id', true );
												getImageThumb($wsg_depoimento_item_img_id, '100x100');
											?>
										</figure>

										<div class="at-testimony_box_content">
											<?php echo wpautop( get_post_meta( $postID, 'wsg_depoimento_item_resumo', true ) ); ?>

											<div class="at-testimony_box_content_bottom">
												<h4><?php echo get_the_title($postID); ?></h4>

												<span><?php echo get_post_meta( $postID, 'wsg_depoimento_item_cargo', true ); ?></span>
											</div>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
						<div class="swiper-pagination"></div>
					</div>
				</div>
			</div>
		</div>
	</section>


<?php //get_footer(); ?>