<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Tech Software Company
 */

get_header(); ?>

<main role="main" id="maincontent" class="our-services">
    <div class="innerlightbox">
        <div class="container">
            <?php
            $tech_software_company_left_right = get_theme_mod( 'tech_software_company_layout_options','Right Sidebar');
            if($tech_software_company_left_right == 'Left Sidebar'){ ?>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <?php get_sidebar();?>
                    </div>
                    <div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-8 col-md-8 noresult-content my-3'); ?>>
                       <h1 class="entry-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Results For: %s','tech-software-company'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>

                        <?php if ( have_posts() ) :
                          /* Start the Loop */
                          while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/content', get_post_format() ); 
                          endwhile;
                          else :
                            get_template_part( 'no-results' ); 
                          endif; 
                        ?>
                        <?php if( get_theme_mod( 'tech_software_company_blog_post_pagination',true) != '') { ?>
                            <div class="navigation">
                                <?php
                                    // Previous/next page navigation.
                                    the_posts_pagination( array(
                                        'prev_text'          => __( 'Previous page', 'tech-software-company' ),
                                        'next_text'          => __( 'Next page', 'tech-software-company' ),
                                        'before_page_number' => '<span class="meta-nav screen-reader-text text-uppercase p-2">' . __( 'Page', 'tech-software-company' ) . ' </span>',
                                    ) );
                                ?>
                            </div> 
                        <?php } ?>  
                    </div>
                </div>
            <?php }else if($tech_software_company_left_right == 'Right Sidebar'){ ?>
                <div class="row">
                    <div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-8 col-md-8 noresult-content my-3'); ?>>
                       <h1 class="entry-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Results For: %s','tech-software-company'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>

                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content' , get_post_format()); 
                            endwhile;
                            else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <?php if( get_theme_mod( 'tech_software_company_blog_post_pagination',true) != '') { ?>
                            <div class="navigation">
                                <?php
                                    // Previous/next page navigation.
                                    the_posts_pagination( array(
                                        'prev_text'          => __( 'Previous page', 'tech-software-company' ),
                                        'next_text'          => __( 'Next page', 'tech-software-company' ),
                                        'before_page_number' => '<span class="meta-nav screen-reader-text text-uppercase p-2">' . __( 'Page', 'tech-software-company' ) . ' </span>',
                                    ) );
                                ?>
                            </div> 
                        <?php } ?>   
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <?php get_sidebar();?>
                    </div>
                </div>
            <?php }else if($tech_software_company_left_right == 'One Column'){ ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class('noresult-content my-3'); ?>>
                   <h1 class="entry-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Results For: %s','tech-software-company'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>

                    <?php if ( have_posts() ) :
                        /* Start the Loop */
                        while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/content', get_post_format() ); 
                        endwhile;
                        else :
                            get_template_part( 'no-results' ); 
                        endif; 
                    ?>
                    <?php if( get_theme_mod( 'tech_software_company_blog_post_pagination',true) != '') { ?>
                        <div class="navigation">
                            <?php
                                // Previous/next page navigation.
                                the_posts_pagination( array(
                                    'prev_text'          => __( 'Previous page', 'tech-software-company' ),
                                    'next_text'          => __( 'Next page', 'tech-software-company' ),
                                    'before_page_number' => '<span class="meta-nav screen-reader-text text-uppercase p-2">' . __( 'Page', 'tech-software-company' ) . ' </span>',
                                ) );
                            ?>
                        </div> 
                    <?php } ?>  
                </div>
            <?php }else if($tech_software_company_left_right == 'Grid Layout'){ ?>
                <div class="row">
                    <div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-9 col-md-9 row noresult-content my-3'); ?>>
                       <h1 class="entry-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Results For: %s','tech-software-company'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>

                        <?php if ( have_posts() ) :
                          /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/grid-layout' ); 
                            endwhile;
                            else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <?php if( get_theme_mod( 'tech_software_company_blog_post_pagination',true) != '') { ?>
                            <div class="navigation">
                                <?php
                                    // Previous/next page navigation.
                                    the_posts_pagination( array(
                                        'prev_text'          => __( 'Previous page', 'tech-software-company' ),
                                        'next_text'          => __( 'Next page', 'tech-software-company' ),
                                        'before_page_number' => '<span class="meta-nav screen-reader-text text-uppercase p-2">' . __( 'Page', 'tech-software-company' ) . ' </span>',
                                    ) );
                                ?>
                            </div> 
                        <?php } ?>  
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <?php get_sidebar();?>
                    </div>
                </div>
            <?php } else { ?>
                <div class="row">
                    <div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-8 col-md-8 noresult-content my-3'); ?>>
                       <h1 class="entry-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Results For: %s','tech-software-company'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>

                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content', get_post_format() ); 
                            endwhile;
                            else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <?php if( get_theme_mod( 'tech_software_company_blog_post_pagination',true) != '') { ?>
                            <div class="navigation">
                                <?php
                                    // Previous/next page navigation.
                                    the_posts_pagination( array(
                                        'prev_text'          => __( 'Previous page', 'tech-software-company' ),
                                        'next_text'          => __( 'Next page', 'tech-software-company' ),
                                        'before_page_number' => '<span class="meta-nav screen-reader-text text-uppercase p-2">' . __( 'Page', 'tech-software-company' ) . ' </span>',
                                    ) );
                                ?>
                            </div> 
                        <?php } ?>  
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <?php get_sidebar();?>
                    </div>
                </div>
            <?php }?>
            <div class="clearfix"></div>
        </div>
    </div>
</main>

<?php get_footer(); ?>