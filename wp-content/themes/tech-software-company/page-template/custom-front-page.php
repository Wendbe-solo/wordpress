<?php
/**
 * Template Name: Custom home
 */

get_header(); ?>

<main role="main" id="maincontent">
  <?php do_action( 'tech_software_company_above_slider' ); ?>

  <?php if( get_theme_mod( 'tech_software_company_slider_hide', false) != '' || get_theme_mod( 'tech_software_company_responsive_slider', false) != '') { ?>
    <section id="slider" class="mw-100 m-auto p-0">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-interval="<?php echo esc_attr(get_theme_mod('tech_software_company_slider_speed_option', 3000)); ?>"> 
        <?php $tech_software_company_slider_pages = array();
          for ( $count = 1; $count <= 4; $count++ ) {
            $mod = intval( get_theme_mod( 'tech_software_company_slider_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $tech_software_company_slider_pages[] = $mod;
            }
          }
          if( !empty($tech_software_company_slider_pages) ) :
            $args = array(
              'post_type' => 'page',
              'post__in' => $tech_software_company_slider_pages,
              'orderby' => 'post__in'
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
              $i = 1;
        ?>     
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
            <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
              <?php if(has_post_thumbnail()){
                  the_post_thumbnail();
              } else{?>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/slider.png" alt="" />
              <?php } ?>
              <div class="carousel-caption">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 align-self-center">
                    <?php if( get_theme_mod('tech_software_company_slider_title_Show_hide',true) != ''){ ?>
                      <h1 class="m-0"><?php the_title(); ?></h1>
                    <?php } ?>
                    <?php if( get_theme_mod('tech_software_company_slider_content_Show_hide',true) != ''){ ?>
                      <p class="py-2"><?php $excerpt = get_the_excerpt(); echo esc_html( tech_software_company_string_limit_words( $excerpt, esc_attr(get_theme_mod('tech_software_company_slider_excerpt_length','20')))); ?></p>
                    <?php } ?>
                    <?php if( get_theme_mod('tech_software_company_slider_button','Contact Us') != ''){ ?>
                      <div class="read-btn mt-4">
                        <a href="<?php the_permalink(); ?>" class="p-3"><?php echo esc_html(get_theme_mod('tech_software_company_slider_button','Contact Us'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('tech_software_company_slider_button','Contact Us'));?></span></a>
                      </div>
                    <?php } ?>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 align-self-center">
                    <?php if( get_theme_mod('tech_software_company_slider_contact_form') != ''){ ?>
                      <div class="contact-form-box">
                        <?php echo do_shortcode( get_theme_mod('tech_software_company_slider_contact_form') ); ?>
                      </div>
                    <?php } ?>
                  </div>
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
        <div class="slider-nex-pre">
          <a class="carousel-control-prev" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" role="button">
            <span class="carousel-control-prev-icon w-auto h-auto" aria-hidden="true"><i class="fas fa-long-arrow-alt-left p-3"></i></span>
            <span class="screen-reader-text"><?php esc_html_e( 'Previous','tech-software-company' );?></span>
          </a>
          <a class="carousel-control-next" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" role="button">
            <span class="carousel-control-next-icon w-auto h-auto" aria-hidden="true"><i class="fas fa-long-arrow-alt-right p-3"></i></span>
            <span class="screen-reader-text"><?php esc_html_e( 'Next','tech-software-company' );?></span>
          </a>
        </div>
      </div>
      <div class="clearfix"></div>
    </section>
  <?php } ?>

  <?php do_action( 'tech_software_company_below_slider' ); ?>

  <div id="content" class="py-5">
    <div class="container entry-content">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>