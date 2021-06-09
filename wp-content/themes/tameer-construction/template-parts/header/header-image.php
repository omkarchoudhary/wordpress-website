<?php
/**
 * Displays header media
 */
?>
<?php if( get_theme_mod('tameer_construction_show_hide_topbar') != '' || get_theme_mod( 'tameer_construction_enable_disable_topbar') != ''){ ?>
	<div class="custom-header">

		<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>

	</div>
<?php } ?>
