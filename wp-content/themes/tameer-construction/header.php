<?php
/**
 * The header for our theme 
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php if ( function_exists( 'wp_body_open' ) ) {
	  wp_body_open(); 
	} else { 
	  do_action( 'wp_body_open' ); 
	} ?>
	<?php if(get_theme_mod('tameer_construction_loader_setting',true)){ ?>
	    <div id="pre-loader">
	      <div class='demo'>
	        <?php $tameer_construction_theme_lay = get_theme_mod( 'tameer_construction_preloader_types','Default');
	        if($tameer_construction_theme_lay == 'Default'){ ?>
	          <div class='circle'>
	            <div class='inner'></div>
	          </div>
	          <div class='circle'>
	            <div class='inner'></div>
	          </div>
	          <div class='circle'>
	            <div class='inner'></div>
	          </div>
	        <?php }elseif($tameer_construction_theme_lay == 'Circle'){ ?>
	          <div class='circle'>
	            <div class='inner'></div>
	          </div>
	        <?php }elseif($tameer_construction_theme_lay == 'Two Circle'){ ?>
	          <div class='circle'>
	            <div class='inner'></div>
	          </div>
	          <div class='circle'>
	            <div class='inner'></div>
	          </div>
	        <?php } ?>
	      </div>
	    </div>
	<?php }?>
	<a class="screen-reader-text skip-link" href="#main"><?php esc_html_e( 'Skip to content', 'tameer-construction' ); ?></a>
	<div id="page" class="site">
		<header id="masthead" class="site-header" role="banner">
			<div class="main-header">
				<div class="container">
					<div class="row">
						<div class="logo col-lg-3 col-md-3">
							<?php if ( has_custom_logo() ) : ?>
				              <div class="site-logo"><?php the_custom_logo(); ?></div>
				            <?php endif; ?>
				              <?php $blog_info = get_bloginfo( 'name' ); ?>
				              <?php if ( ! empty( $blog_info ) ) : ?>
				              	<?php if( get_theme_mod('tameer_construction_show_site_title',true) != ''){ ?>
					                <?php if ( is_front_page() && is_home() ) : ?>
					                  <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					                <?php else : ?>
					                  <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					                <?php endif; ?>
					            <?php }?>
								<?php endif; ?>
								<?php
								$description = get_bloginfo( 'description', 'display' );
								if ( $description || is_customize_preview() ) :
								?>
				                <?php if( get_theme_mod('tameer_construction_show_tagline',true) != ''){ ?>
					              <p class="site-description">
					                <?php echo esc_html($description); ?>
					              </p>
					            <?php }?>
				            <?php endif; ?>
						</div>
						<div class="col-lg-9 col-md-9">
							<?php if ( has_nav_menu( 'top' ) ) : ?>
								<div class="navigation-top">
									<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
								</div>
							<?php endif; ?>
							<?php get_template_part( 'template-parts/header/header', 'image' ); ?>
						</div>
					</div>
				</div>
			</div>
		</header>

	<div class="site-content-contain">
		<div id="content">
