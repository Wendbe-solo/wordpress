<?php
/**
 * @package Tech Software Company
 * @subpackage tech_software_company
 * @since tech-software-company 1.0
 * Setup the WordPress core custom header feature.
 *
 * @uses tech_software_company_header_style()
*/

function tech_software_company_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'tech_software_company_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1360,
		'height'                 => 110,
		'flex-width'         	=> true,
        'flex-height'        	=> true,
		'wp-head-callback'       => 'tech_software_company_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'tech_software_company_custom_header_setup' );

if ( ! function_exists( 'tech_software_company_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see tech_software_company_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'tech_software_company_header_style' );
function tech_software_company_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$tech_software_company_custom_css = "
        .info-header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		}";
	   	wp_add_inline_style( 'tech-software-company-basic-style', $tech_software_company_custom_css );
	endif;
}
endif; // tech_software_company_header_style