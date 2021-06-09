<?php
/**
 * Template Name: Home Custom Page
 */
get_header(); ?>

<main id="main" role="main">
  <?php do_action( 'tameer_construction_before_slider' ); ?>

  <?php if( get_theme_mod('tameer_construction_slider_arrows', false) != '' || get_theme_mod( 'tameer_construction_enable_disable_slider',false) != ''){ ?>
    <section id="slider">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="<?php echo esc_attr(get_theme_mod('tameer_construction_slider_speed', 3000)); ?>"> 
        <?php $tameer_construction_slider_pages = array();
          for ( $count = 1; $count <= 4; $count++ ) {
            $mod = intval( get_theme_mod( 'tameer_construction_slide_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $tameer_construction_slider_pages[] = $mod;
            }
          }
          if( !empty($tameer_construction_slider_pages) ) :
          $args = array(
            'post_type' => 'page',
            'post__in' => $tameer_construction_slider_pages,
            'orderby' => 'post__in'
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
        ?>     
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
          <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
            <?php the_post_thumbnail(); ?>
            <div class="carousel-caption">
              <div class="inner_carousel">
                <?php if( get_theme_mod('tameer_construction_slider_title',true) != ''){ ?>
                  <h1><?php the_title();?></h1>
                <?php } ?>
                <?php if( get_theme_mod('tameer_construction_slider_content',true) != ''){ ?>
                  <p><?php $excerpt = get_the_excerpt(); echo esc_html( tameer_construction_string_limit_words( $excerpt, esc_attr(get_theme_mod('tameer_construction_slider_excerpt_number','20')))); ?></p>
                <?php } ?>
                <?php if (get_theme_mod( 'tameer_construction_slider_button',true) != '' || get_theme_mod( 'tameer_construction_show_hide_slider_button',true) != ''){ ?>
                  <?php if( get_theme_mod('tameer_construction_slider_button_text','READ MORE') != ''){ ?>
                    <div class ="readbutton">
                      <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('tameer_construction_slider_button_text','READ MORE'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('tameer_construction_slider_button_text','READ MORE'));?></span></a>
                    </div>
                  <?php } ?>
                <?php } ?>
              </div>
            </div>
          </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
        <div class="no-postfound"></div>
          <?php endif;
        endif;?>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Previous','tameer-construction' );?></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Next','tameer-construction' );?></span>
        </a>
      </div> 
      <div class="clearfix"></div>
    </section> 
  <?php }?> 

  <?php do_action( 'tameer_construction_after_slider' ); ?>

  <section id="about">
    <div class="container">
      <?php $tameer_construction_slider_pages = array();
        $mod = absint( get_theme_mod( 'tameer_construction_about_page'));
        if ( 'page-none-selected' != $mod ) {
          $tameer_construction_slider_pages[] = $mod;
        }
      if( !empty($tameer_construction_slider_pages) ) :
        $args = array(
          'post_type' => 'page',
          'post__in' => $tameer_construction_slider_pages,
          'orderby' => 'post__in'
        );
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) :
          while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="about-text">
                  <h2><?php the_title(); ?></h2>
                  <p><?php the_excerpt(); ?></p>
                  <div class ="aboutbtn">
                    <a href="<?php the_permalink(); ?>"><?php esc_html_e('READ MORE','tameer-construction'); ?><span class="screen-reader-text"><?php esc_html_e( 'READ MORE','tameer-construction' );?></span></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="about-img">
                  <?php the_post_thumbnail(); ?>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        <?php else : ?>
            <div class="no-postfound"></div>
        <?php endif;
      endif;
      wp_reset_postdata()?>
        <div class="clearfix"></div> 
    </div>
  </section>
  
  <?php do_action( 'tameer_construction_after_about' ); ?>  
</main>

<?php get_footer(); ?>