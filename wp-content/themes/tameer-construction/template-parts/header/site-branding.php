<?php
/**
 * Displays header site branding
 */
?>

<div class="site-branding">
	<div class="row m-0">
		<div class=" col-lg-3 offset-lg-1 col-md-3">
			<div class="mail">
				<?php if( get_theme_mod( 'tameer_construction_email','' ) != '') { ?>
              		<a class="email" href="mailto:<?php echo esc_attr( get_theme_mod('tameer_construction_email','') ); ?>"><i class="fas fa-envelope"></i><?php echo esc_html( get_theme_mod('tameer_construction_email','') ); ?><span class="screen-reader-text"><i class="fas fa-envelope"></i><?php echo esc_html( get_theme_mod('tameer_construction_email','') ); ?></span></a>
                <?php } ?>
         	</div>
	    </div>
	    <div class=" col-lg-2 col-md-3">
	    	<?php if( get_theme_mod( 'tameer_construction_call1','' ) != '') { ?>
				<div class="call">		        
				    <a href="tel:<?php echo esc_attr( get_theme_mod('tameer_construction_call1','' )); ?>"><i class="fas fa-phone-volume"></i><?php echo esc_html( get_theme_mod('tameer_construction_call1','') ); ?><span class="screen-reader-text"><i class="fas fa-phone-volume"></i><?php echo esc_html( get_theme_mod('tameer_construction_call1','') ); ?></span></a>
			    </div>
		    <?php } ?>
	    </div>
	    <div class=" col-lg-3 col-md-3">
	    	<?php if( get_theme_mod( 'tameer_construction_time','' ) != '') { ?>
		      	<div class="time">
                   <span><i class="fas fa-clock"></i><?php echo esc_html( get_theme_mod('tameer_construction_time','') ); ?></span>
	            </div>
        	<?php } ?>
	    </div>
	    <div class=" col-lg-3 col-md-3">
      		<div class="social-media">
	          	<?php if( get_theme_mod( 'tameer_construction_facebook_url') != '') { ?>
	            	<a href="<?php echo esc_url( get_theme_mod( 'tameer_construction_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','tameer-construction' );?></span></a>
	          	<?php } ?>	          	           
	         	<?php if( get_theme_mod( 'tameer_construction_twitter_url') != '') { ?>
	            	<a href="<?php echo esc_url( get_theme_mod( 'tameer_construction_twitter_url','' ) ); ?>"><i class="fab fa-twitter"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','tameer-construction' );?></span></a>
	         	<?php } ?>
	          	<?php if( get_theme_mod( 'tameer_construction_youtube_url') != '') { ?>
	            	<a href="<?php echo esc_url( get_theme_mod( 'tameer_construction_youtube_url','' ) ); ?>"><i class="fab fa-youtube"></i><span class="screen-reader-text"><?php esc_html_e( 'Youtube','tameer-construction' );?></span></a>
	          	<?php } ?>          
	          	<?php if( get_theme_mod( 'tameer_construction_linkdin_url') != '') { ?>
	            	<a href="<?php echo esc_url( get_theme_mod( 'tameer_construction_linkdin_url','' ) ); ?>"><i class="fab fa-linkedin-in"></i><span class="screen-reader-text"><?php esc_html_e( 'Linkedin','tameer-construction' );?></span></a>
	         	<?php } ?>	
	        </div>
	    </div>
	</div>	
</div>