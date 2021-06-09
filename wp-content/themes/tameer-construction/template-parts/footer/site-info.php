<?php
/**
 * Displays footer site info
 */

?>
<?php if( get_theme_mod( 'tameer_construction_hide_show_scroll',true) != '' || get_theme_mod( 'tameer_construction_enable_disable_scrolltop',true) != '') { ?>
    <?php $tameer_construction_theme_lay = get_theme_mod( 'tameer_construction_footer_options','Right');
    if($tameer_construction_theme_lay == 'Left align'){ ?>
        <a href="#" class="scrollup left"><i class="fas fa-long-arrow-alt-up"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'tameer-construction' ); ?></span></a>
    <?php }else if($tameer_construction_theme_lay == 'Center align'){ ?>
        <a href="#" class="scrollup center"><i class="fas fa-long-arrow-alt-up"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'tameer-construction' ); ?></span></a>
    <?php }else{ ?>
        <a href="#" class="scrollup"><i class="fas fa-long-arrow-alt-up"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'tameer-construction' ); ?></span></a>
    <?php }?>
<?php }?>
<div class="site-info">
	<span><?php tameer_construction_credit(); ?> <?php echo esc_html(get_theme_mod('tameer_construction_footer_text',__('By ThemesEye','tameer-construction'))); ?> </span>
	<span class="footer_text"><?php echo esc_html_e('Powered By WordPress','tameer-construction') ?></span>
</div>