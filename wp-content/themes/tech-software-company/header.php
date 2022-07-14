<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="content-ts">
 *
 * @package Tech Software Company
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
  } else {
    do_action( 'wp_body_open' );
  } ?>
  <header role="banner">
    <?php if(get_theme_mod('tech_software_company_preloader_option',true)!= '' || get_theme_mod('tech_software_company_responsive_preloader', true) != ''){ ?>
      <div id="loader-wrapper" class="w-100 h-100">
        <div id="loader" class="rounded-circle"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
      </div>
    <?php }?>
    <a class="screen-reader-text skip-link" href="#maincontent" ><?php esc_html_e( 'Skip to content', 'tech-software-company' ); ?></a>
    <div id="header">
      <?php if( get_theme_mod('tech_software_company_display_topbar') != ''){ ?>
        <div class="top-header p-2">
          <div class="container">
            <div class="row">
              <div class="col-lg-5 col-md-5 align-self-center">
                <?php if( get_theme_mod('tech_software_company_topbar_text') != ''){ ?>
                  <p class="mb-md-0"><?php echo esc_html( get_theme_mod( 'tech_software_company_topbar_text','' ) ); ?></p>
                <?php } ?>
              </div>
              <div class="col-lg-7 col-md-7 align-self-center">
                <div class="social-icons text-center text-md-end">
                  <?php if( get_theme_mod( 'tech_software_company_facebook_url') != '') { ?>
                    <a href="<?php echo esc_url( get_theme_mod( 'tech_software_company_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','tech-software-company' );?></span></a>
                  <?php } ?>
                  <?php if( get_theme_mod( 'tech_software_company_twitter_url') != '') { ?>
                    <a href="<?php echo esc_url( get_theme_mod( 'tech_software_company_twitter_url','' ) ); ?>"><i class="fab fa-twitter"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','tech-software-company' );?></span></a>
                  <?php } ?>
                  <?php if( get_theme_mod( 'tech_software_company_linkedin_url') != '') { ?>
                    <a href="<?php echo esc_url( get_theme_mod( 'tech_software_company_linkedin_url','' ) ); ?>"><i class="fab fa-linkedin-in"></i><span class="screen-reader-text"><?php esc_html_e( 'Linkedin','tech-software-company' );?></span></a>
                  <?php } ?>
                  <?php if( get_theme_mod( 'tech_software_company_instagram_url') != '') { ?>
                    <a href="<?php echo esc_url( get_theme_mod( 'tech_software_company_instagram_url','' ) ); ?>"><i class="fab fa-instagram"></i><span class="screen-reader-text"><?php esc_html_e( 'Instagram','tech-software-company' );?></span></a>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>

      <div class="info-header py-3">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5 align-self-center">
              <div class="logo align-self-center">
                <?php if ( has_custom_logo() ) : ?>
                  <div class="site-logo"><?php the_custom_logo(); ?></div>
                <?php endif; ?>
                <?php $blog_info = get_bloginfo( 'name' ); ?>
                <?php if ( ! empty( $blog_info ) ) : ?>
                  <?php if( get_theme_mod('tech_software_company_site_title',true) != ''){ ?>
                    <?php if ( is_front_page() && is_home() ) : ?>
                      <h1 class="site-title text-center text-md-start p-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-start pt-0" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php else : ?>
                      <p class="site-title text-center text-md-start mb-md-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="text-start pt-0"><?php bloginfo( 'name' ); ?></a></p>
                    <?php endif; ?>
                  <?php }?>
                <?php endif; ?>
                <?php
                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) :
                  ?>
                  <?php if( get_theme_mod('tech_software_company_tagline',true) != ''){ ?>
                    <p class="site-description text-center text-md-start mb-md-0">
                      <?php echo esc_html($description); ?>
                    </p>
                  <?php }?>
                <?php endif; ?>
              </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7 align-self-center">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 align-self-center">
                  <?php if( get_theme_mod('tech_software_company_mail1') != ''){ ?>
                    <a href="mailto:<?php echo esc_attr( get_theme_mod('tech_software_company_mail1','') ); ?>" class="info-mail"><i class="fas fa-envelope me-2"></i><?php echo esc_html( get_theme_mod('tech_software_company_mail1','')); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('tech_software_company_mail1','')); ?></span></a>
                  <?php } ?>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 align-self-center">
                  <?php if( get_theme_mod('tech_software_company_phone1') != ''){ ?>
                    <a href="tel:<?php echo esc_attr( get_theme_mod('tech_software_company_phone1','') ); ?>" class="info-mail"><i class="fas fa-phone me-2"></i><?php echo esc_html( get_theme_mod('tech_software_company_phone1','')); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('tech_software_company_phone1','')); ?></span></a>
                  <?php } ?>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 align-self-center">
                  <?php if( get_theme_mod('tech_software_company_loction1') != ''){ ?>
                    <p class="mb-0 info-mail"><i class="fas fa-map-marker-alt me-2"></i><?php echo esc_html( get_theme_mod('tech_software_company_loction1','')); ?></p>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="main-menu <?php if( get_theme_mod( 'tech_software_company_sticky_header', false) != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
        <div class="container">
          <div class="main-menu-bg">
            <div class="row">
              <div class="col-lg-11 col-md-8 col-6 align-self-center">
                <?php 
                  if(has_nav_menu('primary')){ ?>
                  <div class="toggle-menu mobile-menu ">
                    <button class="mobiletoggle"><i class="fas fa-bars p-3 my-3 mx-0"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','tech-software-company'); ?></span></button>
                  </div>
                <?php }?>
                <div id="menu-sidebar" class="nav sidebar text-center">
                  <nav id="primary-site-navigation" class="primary-navigation ps-0 text-start" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'tech-software-company' ); ?>">
                    <?php
                      if(has_nav_menu('primary')){ 
                        wp_nav_menu( array( 
                          'theme_location' => 'primary',
                          'container_class' => 'main-menu-navigation clearfix' ,
                          'menu_class' => 'clearfix',
                          'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                          'fallback_cb' => 'wp_page_menu',
                        ) );
                      } 
                    ?>
                    <a href="javascript:void(0)" class="closebtn mobile-menu"><i class="far fa-times-circle"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','tech-software-company'); ?></span></a>
                  </nav>
                </div>
              </div>
              <?php if(get_theme_mod('tech_software_company_search_option',true) != ''){ ?>
                <div class="col-lg-1 col-md-1 col-6 align-self-center">
                  <div class="search-box my-2 mx-0 align-self-center">
                    <button type="button" class="search-open"><i class="fas fa-search py-3 px-0"></i></button>
                  </div>
                </div>
              <?php }?>
            </div>
          </div>
          <div class="search-outer">
            <div class="serach_inner w-100 h-100">
              <?php get_search_form(); ?>
            </div>
            <button type="button" class="search-close">X</span></button>
          </div>
        </div>
      </div>
    </div>
  </header>