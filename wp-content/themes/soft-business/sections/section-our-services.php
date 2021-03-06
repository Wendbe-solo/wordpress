<?php 
/**
 * Template part for displaying Featured Services Section
 *
 *@package Soft Business
 */
    $our_services_content_type            = soft_business_get_option( 'our_services_content_type' );
    $number_of_our_services_items         = soft_business_get_option( 'number_of_our_services_items' );

    if( $our_services_content_type == 'our_services_page' ) :
        for( $i=1; $i<=$number_of_our_services_items; $i++ ) :
            $our_services_posts[] = absint( soft_business_get_option( 'our_services_page_'.$i ) );
        endfor;  
    elseif( $our_services_content_type == 'our_services_post' ) :
        for( $i=1; $i<=$number_of_our_services_items; $i++ ) :
            $our_services_posts[] = absint( soft_business_get_option( 'our_services_post_'.$i ) );
        endfor;
    endif;
    ?>

    <?php if( $our_services_content_type == 'our_services_page' ) : ?>
        <div class="section-content col-3 clear">
            <?php $args = array (
                'post_type'     => 'page',
                'posts_per_page' => absint( $number_of_our_services_items ),
                'post__in'      => $our_services_posts,
                'orderby'       =>'post__in',
            );        
            $loop = new WP_Query($args);                        
            if ( $loop->have_posts() ) :
            $i=-1; $j=0; 
                while ($loop->have_posts()) : $loop->the_post(); $i++; $j++;
                $our_services_icon[$j] = soft_business_get_option( 'our_services_icon_'.$j ); ?>          
                
                <article>
                    <div class="service-item-wrapper">
                        <div class="entry-container">
                            <?php if( !empty( $our_services_icon[$j] ) ) : ?>
                                <div class="icon-container">
                                    <i class="<?php echo esc_attr( $our_services_icon[$j] )?>"></i>
                                </div><!-- .icon-container -->
                            <?php endif; ?>

                            <header class="entry-header">
                                <h2 class="entry-title"><?php the_title();?></h2>
                            </header>

                            <div class="entry-content">
                                <?php
                                    $excerpt = soft_business_the_excerpt( 15 );
                                    echo wp_kses_post( wpautop( $excerpt ) );
                                ?>
                            </div><!-- .entry-content -->

                            <?php $readmore_text = soft_business_get_option( 'readmore_text' );?>
                            <?php if (!empty($readmore_text) ) :?>
                                <div class="read-more">
                                    <a href="<?php the_permalink();?>"><?php echo esc_html($readmore_text);?><i class="fas fa-plus"></i></a>
                                </div><!-- .read-more -->
                            <?php endif; ?>
                        </div><!-- .entry-container -->
                    </div><!-- .service-item-wrapper -->
                </article>

                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div><!-- .section-content -->
    
    <?php else: ?>
        <div class="section-content col-3 clear">
            <?php $args = array (
                'post_type'     => 'post',
                'posts_per_page' => absint( $number_of_our_services_items ),
                'post__in'      => $our_services_posts,
                'orderby'       =>'post__in',
                'ignore_sticky_posts' => true,
            );        
            $loop = new WP_Query($args);                        
            if ( $loop->have_posts() ) :
            $i=-1; $j=0; 
                while ($loop->have_posts()) : $loop->the_post(); $i++; $j++;
                $our_services_icon[$j] = soft_business_get_option( 'our_services_icon_'.$j ); ?>              
                
                <article>
                    <div class="service-item-wrapper">
                        <div class="entry-container">
                            <?php if( !empty( $our_services_icon[$j] ) ) : ?>
                                <div class="icon-container">
                                    <i class="<?php echo esc_attr( $our_services_icon[$j] )?>"></i>
                                </div><!-- .icon-container -->
                            <?php endif; ?>

                            <header class="entry-header">
                                <h2 class="entry-title"><?php the_title();?></h2>
                            </header>

                            <div class="entry-content">
                                <?php
                                    $excerpt = soft_business_the_excerpt( 15 );
                                    echo wp_kses_post( wpautop( $excerpt ) );
                                ?>
                            </div><!-- .entry-content -->

                            <?php $readmore_text = soft_business_get_option( 'readmore_text' );?>
                            <?php if (!empty($readmore_text) ) :?>
                                <div class="read-more">
                                    <a href="<?php the_permalink();?>"><?php echo esc_html($readmore_text);?><i class="fas fa-plus"></i></a>
                                </div><!-- .read-more -->
                            <?php endif; ?>
                        </div><!-- .entry-container -->
                    </div><!-- .service-item-wrapper -->
                </article>

                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div><!-- .section-content -->
    <?php endif;