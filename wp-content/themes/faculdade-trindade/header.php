<?php
	$id_home = get_page_by_path( 'home', OBJECT, 'page' )->ID;

	$id_logo = get_page_by_path( 'configuracoes-da-logo', OBJECT, 'gerais' )->ID;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title><?php wp_title('|', true, 'right'); ?></title>
	<meta http-equiv="Content-Language" content="pt-br">

	<?php
		$wsg_favicon_img_id = get_post_meta( $id_logo, 'wsg_favicon_img_id', true );
		if ($wsg_favicon_img_id !== NULL && strlen($wsg_favicon_img_id) > 0) {
			$wsg_favicon = wp_get_attachment_image_src($wsg_favicon_img_id);
			if ($wsg_favicon !== NULL && count($wsg_favicon) > 0) {
				?>
					<link rel="icon" href="<?php echo $wsg_favicon[0]; ?>" type="image/x-icon"/>
				<?php
			}
		}
	?>

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<!-- Bootstrap CSS -->

	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">

	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/pages/home.css">

	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/mobile.css">

	<!-- SwiperJs_css -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
	<!-- SwiperJs_css -->

	<!-- Fonts Google -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<!-- Fonts Google -->

	<!-- Jquery -->
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/efeitos.js"></script>
	<!-- Jquery -->


	<!-- SwiperJS -->
	<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
	<!-- SwiperJS -->

	<!-- Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	<!-- Bootstrap JS -->

	<?php wp_head(); ?>

	<?php
		$id_google = get_page_by_path( 'configuracoes-do-google', OBJECT, 'gerais' )->ID;

		echo get_post_meta( $id_google, 'wsg_codes_header', true );
	?>
</head>
<body>
	<?php echo get_post_meta( $id_google, 'wsg_codes_body', true ); ?>


	<?php
		$wsg_banner_img_bg_id = get_post_meta($id_home, 'wsg_banner_img_bg_id', true);
		$wsg_banner_img_bg_id = wp_get_attachment_image_src($wsg_banner_img_bg_id, '1920x800');
		$wsg_banner_img_bg_id = $wsg_banner_img_bg_id[0];
	?>
	<header class="at-header-main" style="background-image: url(<?php echo $wsg_banner_img_bg_id; ?>);">
		<div class="container">
			<nav class="navbar navbar-expand-lg">
				<div class="container-fluid">
					<a class="navbar-brand" href="<?php bloginfo('url'); ?>">
						<figure>
							<?php
								$wsg_logo_header_img_id = get_post_meta( $id_logo, 'wsg_logo_header_img_id', true );
								getImageThumb($wsg_logo_header_img_id, 'full');
							?>
						</figure>
					</a>

					<div class="at-header-btns">
						<?php
							$header_btns = get_post_meta( $id_home, 'header_btns', true );
							foreach ($header_btns as $key => $entry) {
						?>
							<a class="btn-main_page" href="<?php echo $entry['wsg_header_btns_link']; ?>"><?php echo $entry['wsg_header_btns_texto']; ?></a>
						<?php } ?>
					</div>
				</div>
			</nav>
		</div>

		<section class="at-banner-main">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xm-6 col-12">
						<div class="at-banner-main_box">
							<header>
								<span class="at-sub-title-span"><?php echo get_post_meta( $id_home, 'wsg_banner_sobretitulo', true ); ?></span>
								<h1 class="at-title_banner"><?php echo get_post_meta( $id_home, 'wsg_banner_titulo', true ); ?></h1>
							</header>

							<?php echo wpautop(get_post_meta( $id_home, 'wsg_banner_texto', true )); ?>

							<p class="at-banner-detach"><?php echo get_post_meta( $id_home, 'wsg_banner_texto_destacado', true ); ?></p>

							<div class="at-banner-main_box_btns">
								<a class="btn-main_page" href="<?php echo get_post_meta( $id_home, 'wsg_banner_btn_link_1', true ); ?>"><?php echo get_post_meta( $id_home, 'wsg_banner_btn_texto_1', true ); ?></a>
							</div>
						</div>
					</div>

					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xm-6 col-12">
						<div class="at-banner-main_box">
							<div class="at-banner-video">
								<?php echo get_post_meta( $id_home, 'wsg_banner_video', true ); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</header>