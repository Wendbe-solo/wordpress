<?php
	
	/*---------------------------Width Layout -------------------*/
	$tech_software_company_theme_lay = get_theme_mod( 'tech_software_company_theme_options','Default');
    if($tech_software_company_theme_lay == 'Default'){
		$tech_software_company_custom_css .='body{';
			$tech_software_company_custom_css .='max-width: 100%;';
		$tech_software_company_custom_css .='}';
	}else if($tech_software_company_theme_lay == 'Container'){
		$tech_software_company_custom_css .='body{';
			$tech_software_company_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$tech_software_company_custom_css .='}';
		$tech_software_company_custom_css .='.serach_outer{';
			$tech_software_company_custom_css .='width: 97.7%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto';
		$tech_software_company_custom_css .='}';
	}else if($tech_software_company_theme_lay == 'Box Container'){
		$tech_software_company_custom_css .='body{';
			$tech_software_company_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$tech_software_company_custom_css .='}';
		$tech_software_company_custom_css .='.serach_outer{';
			$tech_software_company_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto; right:0';
		$tech_software_company_custom_css .='}';
		$tech_software_company_custom_css .='.page-template-custom-front-page #header{';
			$tech_software_company_custom_css .='right:0;';
		$tech_software_company_custom_css .='}';
	}

	/*---------------------------Slider Content Layout -------------------*/
	$tech_software_company_theme_lay = get_theme_mod( 'tech_software_company_slider_content_alignment','Left');
    if($tech_software_company_theme_lay == 'Left'){
		$tech_software_company_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$tech_software_company_custom_css .='text-align:left;';
		$tech_software_company_custom_css .='}';
	}else if($tech_software_company_theme_lay == 'Center'){
		$tech_software_company_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$tech_software_company_custom_css .='text-align:center !important;';
		$tech_software_company_custom_css .='}';
	}else if($tech_software_company_theme_lay == 'Right'){
		$tech_software_company_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$tech_software_company_custom_css .='text-align:right !important;';
		$tech_software_company_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/
	$tech_software_company_theme_lay = get_theme_mod( 'tech_software_company_slider_image_opacity','0.5');
	if($tech_software_company_theme_lay == '0'){
		$tech_software_company_custom_css .='#slider img{';
			$tech_software_company_custom_css .='opacity:0';
		$tech_software_company_custom_css .='}';
		}else if($tech_software_company_theme_lay == '0.1'){
		$tech_software_company_custom_css .='#slider img{';
			$tech_software_company_custom_css .='opacity:0.1';
		$tech_software_company_custom_css .='}';
		}else if($tech_software_company_theme_lay == '0.2'){
		$tech_software_company_custom_css .='#slider img{';
			$tech_software_company_custom_css .='opacity:0.2';
		$tech_software_company_custom_css .='}';
		}else if($tech_software_company_theme_lay == '0.3'){
		$tech_software_company_custom_css .='#slider img{';
			$tech_software_company_custom_css .='opacity:0.3';
		$tech_software_company_custom_css .='}';
		}else if($tech_software_company_theme_lay == '0.4'){
		$tech_software_company_custom_css .='#slider img{';
			$tech_software_company_custom_css .='opacity:0.4';
		$tech_software_company_custom_css .='}';
		}else if($tech_software_company_theme_lay == '0.5'){
		$tech_software_company_custom_css .='#slider img{';
			$tech_software_company_custom_css .='opacity:0.5';
		$tech_software_company_custom_css .='}';
		}else if($tech_software_company_theme_lay == '0.6'){
		$tech_software_company_custom_css .='#slider img{';
			$tech_software_company_custom_css .='opacity:0.6';
		$tech_software_company_custom_css .='}';
		}else if($tech_software_company_theme_lay == '0.7'){
		$tech_software_company_custom_css .='#slider img{';
			$tech_software_company_custom_css .='opacity:0.7';
		$tech_software_company_custom_css .='}';
		}else if($tech_software_company_theme_lay == '0.8'){
		$tech_software_company_custom_css .='#slider img{';
			$tech_software_company_custom_css .='opacity:0.8';
		$tech_software_company_custom_css .='}';
		}else if($tech_software_company_theme_lay == '0.9'){
		$tech_software_company_custom_css .='#slider img{';
			$tech_software_company_custom_css .='opacity:0.9';
		$tech_software_company_custom_css .='}';
		}

	/*------------- Button Settings option-------------------*/
	$tech_software_company_button_padding_top_bottom = get_theme_mod('tech_software_company_button_padding_top_bottom');
	$tech_software_company_button_padding_left_right = get_theme_mod('tech_software_company_button_padding_left_right');
	$tech_software_company_custom_css .='.new-text .read-more-btn a, #slider .inner_carousel .read-btn a, #comments .form-submit input[type="submit"],#category .explore-btn a{';
		$tech_software_company_custom_css .='padding-top: '.esc_attr($tech_software_company_button_padding_top_bottom).'px !important; padding-bottom: '.esc_attr($tech_software_company_button_padding_top_bottom).'px !important; padding-left: '.esc_attr($tech_software_company_button_padding_left_right).'px !important; padding-right: '.esc_attr($tech_software_company_button_padding_left_right).'px !important; display:inline-block;';
	$tech_software_company_custom_css .='}';

	$tech_software_company_button_border_radius = get_theme_mod('tech_software_company_button_border_radius');
	$tech_software_company_custom_css .='.new-text .read-more-btn a, #slider .inner_carousel .read-btn a, #comments .form-submit input[type="submit"], #category .explore-btn a{';
		$tech_software_company_custom_css .='border-radius: '.esc_attr($tech_software_company_button_border_radius).'px;';
	$tech_software_company_custom_css .='}';

	/*------------------ Skin Option  -------------------*/
	$tech_software_company_theme_lay = get_theme_mod( 'tech_software_company_background_skin_mode','Transparent Background');
    if($tech_software_company_theme_lay == 'With Background'){
		$tech_software_company_custom_css .='.page-box, #sidebar .widget,.woocommerce ul.products li.product, .woocommerce-page ul.products li.product,.front-page-content,.background-img-skin, .noresult-content{';
			$tech_software_company_custom_css .='background-color: #fff;';
		$tech_software_company_custom_css .='}';
	}else if($tech_software_company_theme_lay == 'Transparent Background'){
		$tech_software_company_custom_css .='.page-box-single{';
			$tech_software_company_custom_css .='background-color: transparent;';
		$tech_software_company_custom_css .='}';
	}

	/*------------ Woocommerce Settings  --------------*/
	$tech_software_company_top_bottom_product_button_padding = get_theme_mod('tech_software_company_top_bottom_product_button_padding', 10);
	$tech_software_company_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$tech_software_company_custom_css .='padding-top: '.esc_attr($tech_software_company_top_bottom_product_button_padding).'px; padding-bottom: '.esc_attr($tech_software_company_top_bottom_product_button_padding).'px;';
	$tech_software_company_custom_css .='}';

	$tech_software_company_left_right_product_button_padding = get_theme_mod('tech_software_company_left_right_product_button_padding', 16);
	$tech_software_company_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$tech_software_company_custom_css .='padding-left: '.esc_attr($tech_software_company_left_right_product_button_padding).'px; padding-right: '.esc_attr($tech_software_company_left_right_product_button_padding).'px;';
	$tech_software_company_custom_css .='}';

	$tech_software_company_product_button_border_radius = get_theme_mod('tech_software_company_product_button_border_radius', 0);
	$tech_software_company_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$tech_software_company_custom_css .='border-radius: '.esc_attr($tech_software_company_product_button_border_radius).'px;';
	$tech_software_company_custom_css .='}';

	$tech_software_company_show_related_products = get_theme_mod('tech_software_company_show_related_products',true);
	if($tech_software_company_show_related_products == false){
		$tech_software_company_custom_css .='.related.products{';
			$tech_software_company_custom_css .='display: none;';
		$tech_software_company_custom_css .='}';
	}

	$tech_software_company_show_wooproducts_border = get_theme_mod('tech_software_company_show_wooproducts_border', false);
	if($tech_software_company_show_wooproducts_border == true){
		$tech_software_company_custom_css .='.products li{';
			$tech_software_company_custom_css .='border: 1px solid #767676;';
		$tech_software_company_custom_css .='}';
	}

	$tech_software_company_top_bottom_wooproducts_padding = get_theme_mod('tech_software_company_top_bottom_wooproducts_padding',0);
	$tech_software_company_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$tech_software_company_custom_css .='padding-top: '.esc_attr($tech_software_company_top_bottom_wooproducts_padding).'px !important; padding-bottom: '.esc_attr($tech_software_company_top_bottom_wooproducts_padding).'px !important;';
	$tech_software_company_custom_css .='}';

	$tech_software_company_left_right_wooproducts_padding = get_theme_mod('tech_software_company_left_right_wooproducts_padding',0);
	$tech_software_company_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$tech_software_company_custom_css .='padding-left: '.esc_attr($tech_software_company_left_right_wooproducts_padding).'px !important; padding-right: '.esc_attr($tech_software_company_left_right_wooproducts_padding).'px !important;';
	$tech_software_company_custom_css .='}';

	$tech_software_company_wooproducts_border_radius = get_theme_mod('tech_software_company_wooproducts_border_radius',0);
	$tech_software_company_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$tech_software_company_custom_css .='border-radius: '.esc_attr($tech_software_company_wooproducts_border_radius).'px;';
	$tech_software_company_custom_css .='}';

	$tech_software_company_wooproducts_box_shadow = get_theme_mod('tech_software_company_wooproducts_box_shadow',0);
	$tech_software_company_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$tech_software_company_custom_css .='box-shadow: '.esc_attr($tech_software_company_wooproducts_box_shadow).'px '.esc_attr($tech_software_company_wooproducts_box_shadow).'px '.esc_attr($tech_software_company_wooproducts_box_shadow).'px #e4e4e4;';
	$tech_software_company_custom_css .='}';

	/*-------------- Footer Text -------------------*/
	$tech_software_company_copyright_content_align = get_theme_mod('tech_software_company_copyright_content_align');
	if($tech_software_company_copyright_content_align != false){
		$tech_software_company_custom_css .='.copyright{';
			$tech_software_company_custom_css .='text-align: '.esc_attr($tech_software_company_copyright_content_align).';';
		$tech_software_company_custom_css .='}';
	}

	$tech_software_company_footer_content_font_size = get_theme_mod('tech_software_company_footer_content_font_size', 16);
	$tech_software_company_custom_css .='.copyright p{';
		$tech_software_company_custom_css .='font-size: '.esc_attr($tech_software_company_footer_content_font_size).'px;';
	$tech_software_company_custom_css .='}';

	$tech_software_company_copyright_padding = get_theme_mod('tech_software_company_copyright_padding', 15);
	$tech_software_company_custom_css .='.copyright{';
		$tech_software_company_custom_css .='padding-top: '.esc_attr($tech_software_company_copyright_padding).'px; padding-bottom: '.esc_attr($tech_software_company_copyright_padding).'px;';
	$tech_software_company_custom_css .='}';

	$tech_software_company_footer_widget_bg_color = get_theme_mod('tech_software_company_footer_widget_bg_color');
	$tech_software_company_custom_css .='#footer{';
		$tech_software_company_custom_css .='background-color: '.esc_attr($tech_software_company_footer_widget_bg_color).';';
	$tech_software_company_custom_css .='}';

	$tech_software_company_footer_widget_bg_image = get_theme_mod('tech_software_company_footer_widget_bg_image');
	if($tech_software_company_footer_widget_bg_image != false){
		$tech_software_company_custom_css .='#footer{';
			$tech_software_company_custom_css .='background: url('.esc_attr($tech_software_company_footer_widget_bg_image).');';
		$tech_software_company_custom_css .='}';
	}

	// scroll to top
	$tech_software_company_scroll_font_size_icon = get_theme_mod('tech_software_company_scroll_font_size_icon', 22);
	$tech_software_company_custom_css .='#scroll-top .fas{';
		$tech_software_company_custom_css .='font-size: '.esc_attr($tech_software_company_scroll_font_size_icon).'px;';
	$tech_software_company_custom_css .='}';

	// Slider Height 
	$tech_software_company_slider_image_height = get_theme_mod('tech_software_company_slider_image_height');
	$tech_software_company_custom_css .='#slider img{';
		$tech_software_company_custom_css .='height: '.esc_attr($tech_software_company_slider_image_height).'px;';
	$tech_software_company_custom_css .='}';

	// Display Blog Post 
	$tech_software_company_display_blog_page_post = get_theme_mod( 'tech_software_company_display_blog_page_post','In Box');
    if($tech_software_company_display_blog_page_post == 'Without Box'){
		$tech_software_company_custom_css .='.page-box{';
			$tech_software_company_custom_css .='border:none; margin:25px 0;';
		$tech_software_company_custom_css .='}';
	}

	// slider overlay
	$tech_software_company_slider_overlay = get_theme_mod('tech_software_company_slider_overlay', true);
	if($tech_software_company_slider_overlay == false){
		$tech_software_company_custom_css .='#slider img{';
			$tech_software_company_custom_css .='opacity:1;';
		$tech_software_company_custom_css .='}';
	} 
	$tech_software_company_slider_image_overlay_color = get_theme_mod('tech_software_company_slider_image_overlay_color', true);
	if($tech_software_company_slider_overlay != false){
		$tech_software_company_custom_css .='#slider{';
			$tech_software_company_custom_css .='background-color: '.esc_attr($tech_software_company_slider_image_overlay_color).';';
		$tech_software_company_custom_css .='}';
	}

	// site title and tagline font size option
	$tech_software_company_site_title_size_option = get_theme_mod('tech_software_company_site_title_size_option', 30);{
	$tech_software_company_custom_css .='.logo h1 a, .logo p a{';
	$tech_software_company_custom_css .='font-size: '.esc_attr($tech_software_company_site_title_size_option).'px;';
		$tech_software_company_custom_css .='}';
	}

	$tech_software_company_site_tagline_size_option = get_theme_mod('tech_software_company_site_tagline_size_option', 12);{
	$tech_software_company_custom_css .='.logo p{';
	$tech_software_company_custom_css .='font-size: '.esc_attr($tech_software_company_site_tagline_size_option).'px !important;';
		$tech_software_company_custom_css .='}';
	}

	// woocommerce product sale settings
	$tech_software_company_border_radius_product_sale = get_theme_mod('tech_software_company_border_radius_product_sale',0);
	$tech_software_company_custom_css .='.woocommerce span.onsale {';
		$tech_software_company_custom_css .='border-radius: '.esc_attr($tech_software_company_border_radius_product_sale).'px;';
	$tech_software_company_custom_css .='}';

	$tech_software_company_align_product_sale = get_theme_mod('tech_software_company_align_product_sale', 'Right');
	if($tech_software_company_align_product_sale == 'Right' ){
		$tech_software_company_custom_css .='.woocommerce ul.products li.product .onsale{';
			$tech_software_company_custom_css .=' left:auto; right:0;';
		$tech_software_company_custom_css .='}';
	}elseif($tech_software_company_align_product_sale == 'Left' ){
		$tech_software_company_custom_css .='.woocommerce ul.products li.product .onsale{';
			$tech_software_company_custom_css .=' left:0; right:auto;';
		$tech_software_company_custom_css .='}';
	}

	$tech_software_company_product_sale_font_size = get_theme_mod('tech_software_company_product_sale_font_size',14);
	$tech_software_company_custom_css .='.woocommerce span.onsale{';
		$tech_software_company_custom_css .='font-size: '.esc_attr($tech_software_company_product_sale_font_size).'px;';
	$tech_software_company_custom_css .='}';

	// preloader background option
	$tech_software_company_loader_background_color_settings = get_theme_mod('tech_software_company_loader_background_color_settings');
	$tech_software_company_custom_css .='#loader-wrapper .loader-section{';
		$tech_software_company_custom_css .='background-color: '.esc_attr($tech_software_company_loader_background_color_settings).';';
	$tech_software_company_custom_css .='} ';

	// woocommerce Product Navigation
	$tech_software_company_products_navigation = get_theme_mod('tech_software_company_products_navigation', 'Yes');
	if($tech_software_company_products_navigation == 'No'){
		$tech_software_company_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$tech_software_company_custom_css .='display: none;';
		$tech_software_company_custom_css .='}';
	}

	// featured image setting
	$tech_software_company_featured_img_border_radius = get_theme_mod('tech_software_company_featured_img_border_radius', 0);
	$tech_software_company_custom_css .='.our-services img, .box-img img{';
		$tech_software_company_custom_css .='border-radius: '.esc_attr($tech_software_company_featured_img_border_radius).'px;';
	$tech_software_company_custom_css .='}';

	$tech_software_company_featured_img_box_shadow = get_theme_mod('tech_software_company_featured_img_box_shadow',0);
	$tech_software_company_custom_css .='.our-services img, .page-box-single img, .middle-align img{';
		$tech_software_company_custom_css .='box-shadow: '.esc_attr($tech_software_company_featured_img_box_shadow).'px '.esc_attr($tech_software_company_featured_img_box_shadow).'px '.esc_attr($tech_software_company_featured_img_box_shadow).'px #ccc;';
	$tech_software_company_custom_css .='}';

	// slider top and bottom padding
	$tech_software_company_top_bottom_slider_content_space = get_theme_mod('tech_software_company_top_bottom_slider_content_space');
	$tech_software_company_left_right_slider_content_space = get_theme_mod('tech_software_company_left_right_slider_content_space');
	$tech_software_company_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .know-btn{';
		$tech_software_company_custom_css .='top: '.esc_attr($tech_software_company_top_bottom_slider_content_space).'%; bottom: '.esc_attr($tech_software_company_top_bottom_slider_content_space).'%;left: '.esc_attr($tech_software_company_left_right_slider_content_space).'%;right: '.esc_attr($tech_software_company_left_right_slider_content_space).'%;';
	$tech_software_company_custom_css .='}';

	// Topbar padding top bottom
	$tech_software_company_topbar_top_bottom_spacing = get_theme_mod('tech_software_company_topbar_top_bottom_spacing');
	$tech_software_company_custom_css .='.top-header{';
		$tech_software_company_custom_css .='padding-top: '.esc_attr($tech_software_company_topbar_top_bottom_spacing).'px !important; padding-bottom: '.esc_attr($tech_software_company_topbar_top_bottom_spacing).'px !important;';
	$tech_software_company_custom_css .='}';

	// resposive settings
	$tech_software_company_slider = get_theme_mod( 'tech_software_company_responsive_slider',false);
	if($tech_software_company_slider == true && get_theme_mod( 'tech_software_company_slider_hide', false) == false){
    	$tech_software_company_custom_css .='#slider{';
			$tech_software_company_custom_css .='display:none;';
		$tech_software_company_custom_css .='} ';
	}
    if($tech_software_company_slider == true){
    	$tech_software_company_custom_css .='@media screen and (max-width:575px) {';
		$tech_software_company_custom_css .='#slider{';
			$tech_software_company_custom_css .='display:block;';
		$tech_software_company_custom_css .='} }';
	}else if($tech_software_company_slider == false){
		$tech_software_company_custom_css .='@media screen and (max-width:575px) {';
		$tech_software_company_custom_css .='#slider{';
			$tech_software_company_custom_css .='display:none;';
		$tech_software_company_custom_css .='} }';
	}

	// scroll to top
	$tech_software_company_scroll = get_theme_mod( 'tech_software_company_responsive_scroll',true);
	if($tech_software_company_scroll == true && get_theme_mod( 'tech_software_company_enable_disable_scroll', true) == false){
    	$tech_software_company_custom_css .='#scroll-top{';
			$tech_software_company_custom_css .='visibility: hidden;';
		$tech_software_company_custom_css .='} ';
	}
    if($tech_software_company_scroll == true){
    	$tech_software_company_custom_css .='@media screen and (max-width:575px) {';
		$tech_software_company_custom_css .='#scroll-top{';
			$tech_software_company_custom_css .='visibility: visible;';
		$tech_software_company_custom_css .='} }';
	}else if($tech_software_company_scroll == false){
		$tech_software_company_custom_css .='@media screen and (max-width:575px) {';
		$tech_software_company_custom_css .='#scroll-top{';
			$tech_software_company_custom_css .='visibility: hidden;';
		$tech_software_company_custom_css .='} }';
	}

// preloader
	$tech_software_company_loader = get_theme_mod( 'tech_software_company_responsive_preloader', true);
	if($tech_software_company_loader == true && get_theme_mod( 'tech_software_company_preloader_option', true) == false){
    	$tech_software_company_custom_css .='#loader-wrapper{';
			$tech_software_company_custom_css .='display:none;';
		$tech_software_company_custom_css .='} ';
	}
    if($tech_software_company_loader == true){
    	$tech_software_company_custom_css .='@media screen and (max-width:575px) {';
		$tech_software_company_custom_css .='#loader-wrapper{';
			$tech_software_company_custom_css .='display:block;';
		$tech_software_company_custom_css .='} }';
	}else if($tech_software_company_loader == false){
		$tech_software_company_custom_css .='@media screen and (max-width:575px) {';
		$tech_software_company_custom_css .='#loader-wrapper{';
			$tech_software_company_custom_css .='display:none;';
		$tech_software_company_custom_css .='} }';
	}
