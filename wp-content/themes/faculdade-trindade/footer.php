<?php
	$id_home = get_page_by_path( 'home', OBJECT, 'page' )->ID;

	$id_logo = get_page_by_path( 'configuracoes-da-logo', OBJECT, 'gerais' )->ID;

	$id_telefones = get_page_by_path( 'telefones', OBJECT, 'contatos' )->ID;
	$id_email = get_page_by_path( 'email', OBJECT, 'contatos' )->ID;
	$id_endereco = get_page_by_path( 'endereco', OBJECT, 'contatos' )->ID;
?>

	<section class="at-btns-float">
		<?php
			$header_btns = get_post_meta( $id_home, 'header_btns', true );
			foreach ($header_btns as $key => $entry) {
		?>
			<a class="btn-main_page" href="<?php echo $entry['wsg_header_btns_link']; ?>"><?php echo $entry['wsg_header_btns_texto']; ?></a>
		<?php } ?>
	</section>

	<footer class="at-footer-main">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xm-12 col-12">
					<div class="at-footer-main_box padding-footer">
						<figure>
							<?php
								$wsg_logo_header_img_id = get_post_meta( $id_logo, 'wsg_logo_header_img_id', true );
								getImageThumb($wsg_logo_header_img_id, 'full');
							?>
						</figure>
					</div>
				</div>

				<!-- <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xm-12 col-12">
					<div class="at-footer-main_box">
						<h4><?php
								$menu_location = 'footer-menu-1';
								$menu_locations = get_nav_menu_locations();
								$menu_object = (isset($menu_locations[$menu_location]) ? wp_get_nav_menu_object($menu_locations[$menu_location]) : null);
								$menu_name = (isset($menu_object->name) ? $menu_object->name : '');
								echo esc_html($menu_name);
							?></h4>
						<ul>
							<?php
								$menu_name = 'footer-menu-1';
								$locations = get_nav_menu_locations();
								$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
								$primaryNav = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
								wp_nav_menu( array(
									'menu'            => 'footer-menu-1',
									'theme_location'  => 'footer-menu-1',
									'container'       => '',
									'menu_class'      => 'menu',
									'echo'            => true,
									'fallback_cb'     => 'wp_page_menu',
									'items_wrap'      => '%3$s',
									'depth'           => 3,
								) );
							?>
						</ul>
					</div>
				</div> -->

				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xm-12 col-12">
					<div class="at-footer-main_box">
						<h4>Contatos</h4>
                        <ul>
							<?php
								$wsg_telefone_items = get_post_meta( $id_telefones, 'wsg_telefone_items', true );
								foreach ($wsg_telefone_items as $key => $entry) {
							?>
								<li>
									<a href="<?php echo $entry['wsg_telefone_link']; ?>">
										<?php if ($entry['wsg_telefone_icone'] == 'phone-1'){ ?>
											<span class="flaticon-phone-2"></span>
										<?php }else{ ?>
											<span class="flaticon-whatsapp-2"></span>
										<?php } ?>
										<?php echo $entry['wsg_telefone_nmr']; ?>
									</a>
								</li>
							<?php } ?>

							<li>
								<a href="<?php echo get_post_meta( $id_endereco, 'wsg_endereco_link', true ); ?>">
									<span class="flaticon-placeholder-1"></span>
									<?php echo get_post_meta( $id_endereco, 'wsg_endereco', true ); ?>
								</a>
							</li>
                        </ul>
					</div>
				</div>

			</div>
		</div>
	</footer>

	<!-- CarouselJS -->
	<script src="<?php bloginfo('template_url'); ?>/js/carousel.js"></script>
	<!-- CarouselJS -->

	<?php wp_footer(); ?>

</body>
</html>