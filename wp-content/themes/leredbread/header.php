<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
						<div class="logo">
							<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<p class="site-description"><?php bloginfo( 'description' ); ?></p>
							<!-- <img src="htdocs/wp-content/themes/leredbread/images/lrb-logo.svg" /> -->
							<!-- <img src="url('.get_template_directory_uri().'/images/lrb-logo.svg)" /> -->
							<!-- <img src="url('.get_template_directory_uri().'htdocs/wp-content/themes/ledredbread/images/lrb-logo.svg)" /> -->
							<!-- <div id="header-image"> -->
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							   <img src="<?php echo get_template_directory_uri(); ?>/images/lrb-logo.svg" alt="Logo" width="" height="" />
							</a>
							<!-- </div> -->

						</div><!-- .logo -->

						<div class="social">
							<ul>
								<li><i class="fa fa-facebook"></i></li>
								<li><i class="fa fa-twitter"></i></li>
								<li><i class="fa fa-google-plus"></i></li>
								<li><i class="fa fa-envelope"></i></li>
							</ul>

						</div><!-- .social -->

				</div><!-- .site-branding -->


				<nav id="site-navigation" class="main-navigation" role="navigation">
					<div class="navbar">
							<div class="navigation-menu">
											<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
											<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

							</div> <!-- .navigation-menu -->

							<div class="header-search">
									<form role="search" method="get" class="search-form" action="">
										<fieldset>
													<label>
														<input type="search" placeholder="Search ..." value="" class="search-field">
													</label>

													<button class="search-submit"><i class="fa fa-search"></i></button>
										</fieldset>
									</form>
							</div> <!-- .header-search-->
					</div>
				</nav><!-- #site-navigation -->

			</header><!-- #masthead -->

			<div id="content" class="site-content">
