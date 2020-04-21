<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<meta name="theme-color" content="mediumseagreen">

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

		<header id="site-header" class="header-footer-group" role="banner">

			<div class="header-inner section-inner">

				<div class="header-titles-wrapper">

					<?php

					// Check whether the header search is activated in the customizer.
					$enable_header_search = get_theme_mod( 'enable_header_search', true );

					if ( true === $enable_header_search ) {

						?>

						<button class="toggle search-toggle mobile-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
							<span class="toggle-inner">
								<span class="toggle-icon">
									<?php twentytwenty_the_theme_svg( 'search' ); ?>
								</span>
							</span>
						</button><!-- .search-toggle -->

					<?php } ?>

					<div class="header-titles">
						<a class="site-title" href="<?php echo get_home_url(); ?>">
							<svg id="three" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 306 185">
								<defs>
								  <style>
								  </style>
								</defs>
								<title>cssjslablogo</title>
								<rect class="cls-1" x="0.5" y="2.5" width="27" height="178" />
								<path class="cls-2" d="M847.5,394.5v9a61.5,61.5,0,1,0,0,99v8h25v-116Zm-36.5,99A41.5,41.5,0,1,1,852.5,452,41.5,41.5,0,0,1,811,493.5Z" transform="translate(-709 -330)" />
								<path class="cls-3" d="M847.5,394.5v9a61.5,61.5,0,1,0,0,99v8h25v-116Zm-36.5,99A41.5,41.5,0,1,1,852.5,452,41.5,41.5,0,0,1,811,493.5Z" transform="translate(-709 -330)" />
								<path class="cls-4" d="M829.5,839.5" transform="translate(-709 -330)" />
								<path class="cls-5" d="M982.5,456c-1.38-3.48-6.17-5.48-10-5.53-8.17-.11-10.39,8.68-19,12-13.7,5.28-27.76-9.42-30.26-6.47-2.85,3.37,9.71,29.37,29.63,29.47C970.89,485.59,985.83,464.43,982.5,456Z" transform="translate(-709 -330)" />
								<path class="cls-6" d="M982.5,456c-1.38-3.48-6.17-5.48-10-5.53-8.17-.11-10.39,8.68-19,12-13.7,5.28-27.76-9.42-30.26-6.47-2.85,3.37,9.71,29.37,29.63,29.47C970.89,485.59,985.83,464.43,982.5,456Z" transform="translate(-709 -330)" />
								<path class="cls-4" d="M1073.5,571.5" transform="translate(-709 -330)" />
								<path class="cls-2" d="M972,394.49c-1.44-.46-2.89-.88-4.37-1.24s-2.74-.61-4.13-.85v19.44a41.5,41.5,0,1,1-21,0V392.4a61.26,61.26,0,0,0-26,11.11v-71h-25v178h25v-8a61.5,61.5,0,1,0,55.5-108Z" transform="translate(-709 -330)" />
								<path class="cls-3" d="M972,394.49c-1.44-.46-2.89-.88-4.37-1.24s-2.74-.61-4.13-.85v19.44a41.5,41.5,0,1,1-21,0V392.4a61.26,61.26,0,0,0-26,11.11v-71h-25v178h25v-8a61.5,61.5,0,1,0,55.5-108Z" transform="translate(-709 -330)" />
								<path class="cls-7" d="M722.29,399.45" transform="translate(-709 -330)" />
								<path class="cls-7" d="M722.29,399.45" transform="translate(-709 -330)" />
								<circle class="cls-8" cx="250.5" cy="42.5" r="8" />
								<circle class="cls-8" cx="237" cy="20" r="5.5" />
								<circle class="cls-8" cx="252.5" cy="4.5" r="4" />
							  </svg>
							</a>
					</div><!-- .header-titles -->

					<button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal"  data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
						<span class="toggle-inner">
							<span class="toggle-icon">
								<?php twentytwenty_the_theme_svg( 'ellipsis' ); ?>
							</span>
						</span>
					</button><!-- .nav-toggle -->

				</div><!-- .header-titles-wrapper -->

				<div class="header-navigation-wrapper">

					<?php
					if ( has_nav_menu( 'primary' ) || ! has_nav_menu( 'expanded' ) ) {
						?>

							<nav class="primary-menu-wrapper" aria-label="<?php esc_attr_e( 'Horizontal', 'twentytwenty' ); ?>" role="navigation">

								<ul class="primary-menu reset-list-style">

								<?php
								if ( has_nav_menu( 'primary' ) ) {

									wp_nav_menu(
										array(
											'container'  => '',
											'items_wrap' => '%3$s',
											'theme_location' => 'primary',
										)
									);

								} elseif ( ! has_nav_menu( 'expanded' ) ) {

									wp_list_pages(
										array(
											'match_menu_classes' => true,
											'show_sub_menu_icons' => true,
											'title_li' => false,
											'walker'   => new TwentyTwenty_Walker_Page(),
										)
									);

								}
								?>

								</ul>

							</nav><!-- .primary-menu-wrapper -->

						<?php
					}

					if ( true === $enable_header_search || has_nav_menu( 'expanded' ) ) {
						?>

						<div class="header-toggles hide-no-js">

						<?php
						if ( has_nav_menu( 'expanded' ) ) {
							?>

							<div class="toggle-wrapper nav-toggle-wrapper has-expanded-menu">

								<button class="toggle nav-toggle desktop-nav-toggle" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
									<span class="toggle-inner">
										<span class="toggle-icon">
											<?php twentytwenty_the_theme_svg( 'ellipsis' ); ?>
										</span>
									</span>
								</button><!-- .nav-toggle -->

							</div><!-- .nav-toggle-wrapper -->

							<?php
						}

						if ( true === $enable_header_search ) {
							?>

							<div class="toggle-wrapper search-toggle-wrapper">

								<button class="toggle search-toggle desktop-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
									<span class="toggle-inner">
										<?php twentytwenty_the_theme_svg( 'search' ); ?>
									</span>
								</button><!-- .search-toggle -->

							</div>

							<?php
						}
						?>

						</div><!-- .header-toggles -->
						<?php
					}
					?>

				</div><!-- .header-navigation-wrapper -->

			</div><!-- .header-inner -->

			<?php
			// Output the search modal (if it is activated in the customizer).
			if ( true === $enable_header_search ) {
				get_template_part( 'template-parts/modal-search' );
			}
			?>

		</header><!-- #site-header -->

		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
