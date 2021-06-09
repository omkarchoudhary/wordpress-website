<?php
/**
 * Template part for displaying posts
 */
?>
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?>
<div class="col-lg-4 col-md-4">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="blogger">
			<div class="category">
				<a href="<?php echo esc_url( get_permalink() ); ?>"><?php foreach((get_the_category()) as $category) { echo esc_html($category->cat_name) . ' '; } ?><span class="screen-reader-text"><?php esc_html_e( 'Category','tameer-construction' );?></span></a>
			</div>
			<h2><a href="<?php echo esc_url( get_permalink() );  ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
			<?php if( get_theme_mod( 'tameer_construction_date_hide',true) != '' || get_theme_mod( 'tameer_construction_comment_hide',true) != '' || get_theme_mod( 'tameer_construction_author_hide',true) != '') { ?>
		      	<div class="post-info">
			        <?php if( get_theme_mod( 'tameer_construction_date_hide',true) != '') { ?>
			          <i class="fa fa-calendar"></i><span class="entry-date"><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><?php echo esc_html( get_theme_mod('tameer_construction_blog_post_metabox_seperator') ); ?>
			        <?php } ?>
			        <?php if( get_theme_mod( 'tameer_construction_author_hide',true) != '') { ?>
			          <i class="fa fa-user"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span><?php echo esc_html( get_theme_mod('tameer_construction_blog_post_metabox_seperator') ); ?>
			        <?php } ?>
			        <?php if( get_theme_mod( 'tameer_construction_comment_hide',true) != '') { ?>
			          <i class="fas fa-comments"></i><span class="entry-comments"><?php comments_number( __('0 Comments','tameer-construction'), __('0 Comments','tameer-construction'), __('% Comments','tameer-construction') ); ?></span>
			        <?php } ?>
		      	</div>
		    <?php } ?>
			<div class="post-image">
			    <?php 
			    	if(has_post_thumbnail()) { 
			        	the_post_thumbnail(); 
			      	}
			    ?>
		 	</div>
	        <div class="text"><p><?php $excerpt = get_the_excerpt(); echo esc_html( tameer_construction_string_limit_words( $excerpt, esc_attr(get_theme_mod('tameer_construction_excerpt_number','20')))); ?> <?php echo esc_html( get_theme_mod('tameer_construction_post_excerpt_suffix','{...}') ); ?></p></div>
		    <?php if( get_theme_mod('tameer_construction_button_text','Continue Reading....') != ''){ ?>
		      <div class="post-link">
		        <a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html(get_theme_mod('tameer_construction_button_text','Continue Reading....'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('tameer_construction_button_text','Continue Reading....'));?></span></a>
		      </div>
		    <?php } ?>
		</div>
	</article>
</div>
