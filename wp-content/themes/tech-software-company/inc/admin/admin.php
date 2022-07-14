<?php
//about theme info
add_action( 'admin_menu', 'tech_software_company_abouttheme' );
function tech_software_company_abouttheme() {    	
	add_theme_page( esc_html__('About Software Company Theme', 'tech-software-company'), esc_html__('About Software Company Theme', 'tech-software-company'), 'edit_theme_options', 'tech_software_company_guide', 'tech_software_company_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function tech_software_company_admin_theme_style() {
   wp_enqueue_style('tech-software-company-custom-admin-style', esc_url(get_template_directory_uri()) .'/inc/admin/admin.css');
}
add_action('admin_enqueue_scripts', 'tech_software_company_admin_theme_style');

//guidline for about theme
function tech_software_company_mostrar_guide() {
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
 <div class="wrapper-info">
	 <div class="header">
	 	<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/logo.png" >
	 	<h2><?php esc_html_e('Welcome to Tech Software Company Theme', 'tech-software-company'); ?></h2>
 		<p><?php esc_html_e('Most of our outstanding theme is elegant, responsive, multifunctional, SEO friendly has amazing features and functionalities that make them highly demanding for designers and bloggers, who ought to excel in web development domain. Our Themeshopy has got everything that an individual and group need to be successful in their venture.', 'tech-software-company'); ?></p>
		<div class="main-button">
			<a href="<?php echo esc_url( TECH_SOFTWARE_COMPANY_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'tech-software-company'); ?></a>
			<a href="<?php echo esc_url( TECH_SOFTWARE_COMPANY_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'tech-software-company'); ?></a>
			<a href="<?php echo esc_url( TECH_SOFTWARE_COMPANY_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'tech-software-company'); ?></a>
		</div>
	</div>
	<div class="button-bg">
	<button role="tab" class="tablink" onclick="openPage('Home', this, '')"><?php esc_html_e('Lite Theme Setup', 'tech-software-company'); ?></button>
	<button role="tab" class="tablink" onclick="openPage('Contact', this, '')"><?php esc_html_e('Premium Theme info', 'tech-software-company'); ?></button>
	</div>
	<div id="Home" class="tabcontent tab1">
	  	<h3><?php esc_html_e('How to set up homepage', 'tech-software-company'); ?></h3>
	  	<div class="sec-button">
			<a href="<?php echo esc_url( TECH_SOFTWARE_COMPANY_FREE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'tech-software-company'); ?></a>
			<a href="<?php echo esc_url( TECH_SOFTWARE_COMPANY_CONTACT ); ?>" target="_blank"><?php esc_html_e('Support', 'tech-software-company'); ?></a>
			<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" target="_blank"><?php esc_html_e('Start Customizing', 'tech-software-company'); ?></a>
		</div>
	  	<div class="documentation">
		  	<div class="image-docs">
				<ul>
					<li> <b><?php esc_html_e('Step 1.', 'tech-software-company'); ?></b> <?php esc_html_e('Follow these instructions to setup Home page.', 'tech-software-company'); ?></li>
					<li> <b><?php esc_html_e('Step 2.', 'tech-software-company'); ?></b> <?php esc_html_e(' Create Page to set template: Go to Dashboard >> Pages >> Add New Page.Label it "home" or anything as you wish. Then select template "home-page" from template dropdown.', 'tech-software-company'); ?></li>
				</ul>
		  	</div>
		  	<div class="doc-image">
		  		<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/home-page-template.png">	
		  	</div>
		  	<div class="clearfixed">
				<div class="doc-image1">
					<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/set-front-page.png">	
			    </div>
			    <div class="image-docs1">
				    <ul>
						<li> <b><?php esc_html_e('Step 3.', 'tech-software-company'); ?></b> <?php esc_html_e('Set the front page: Go to Setting -> Reading --> Set the front page display static page to home page', 'tech-software-company'); ?></li>
					</ul>
			  	</div>
			</div>
		</div>
	</div>

	<div id="Contact" class="tabcontent">
	 	<h3><?php esc_html_e('Premium Theme Info', 'tech-software-company'); ?></h3>
	  	<div class="sec-button">
			<a href="<?php echo esc_url( tech_software_company_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'tech-software-company'); ?></a>
			<a href="<?php echo esc_url( tech_software_company_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'tech-software-company'); ?></a>
			<a href="<?php echo esc_url( tech_software_company_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'tech-software-company'); ?></a>
		</div>
	  	<div class="features-section">
	  		<div class="col-4">
	  			<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/screenshot.jpg">
	  			<p><?php esc_html_e( 'This Tech Software Company WordPress Theme will give you a fabulous online presence that will help your company to move in the right direction without consuming much time. After all, you don’t have to create anything from scratch anymore as you already have a ready-made skin available. From a cleanly designed front home page as well as internal pages to an array of useful elements and functionalities; you will have everything needed to create your website with. It gives you plenty of conveniences while creating a website that is truly unique in itself as it has an intuitive theme customizer to get things done with just a few clicks and without writing any codes. You can always go that extra mile to bring something out of the box to your audience thanks to these easy tweaking options. Even if you do not know how to write codes, you will be able to hammer out a stunning website with this Tech Software Company WordPress Theme.', 'tech-software-company' ); ?></p>
	  		</div>
	  		<div class="col-4">
	  			<h4><?php esc_html_e( 'Theme Features', 'tech-software-company' ); ?></h4>
				<ul>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Theme options using customizer API', 'tech-software-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Responsive Design', 'tech-software-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Favicon, Logo, Title and Tagline Customization', 'tech-software-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Advanced Color Options and Color Pallets', 'tech-software-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( '100+ Font Family Options', 'tech-software-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Advance Slider with a Number of Slider Images Upload Option Available.', 'tech-software-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Support to Add Custom CSS/JS', 'tech-software-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'SEO Friendly', 'tech-software-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Pagination Option', 'tech-software-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Compatible With Different WordPress Famous Plugins Like Contact Form 7 and Woocommerce', 'tech-software-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Enable-Disable Options on All Sections', 'tech-software-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Footer Customization Options', 'tech-software-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Fully Integrated with Font Awesome Icon', 'tech-software-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Short Codes', 'tech-software-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Background Image Option', 'tech-software-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Custom Page Templates', 'tech-software-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Featured Product Images, HD Images and Video display', 'tech-software-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Allow To Set Site Title, Tagline, Logo', 'tech-software-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Make Post About Firms News, Events, Achievements and So On.', 'tech-software-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Left and Right Sidebar', 'tech-software-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Sticky Post & Comment Threads', 'tech-software-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Parallax Image-Background Section', 'tech-software-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Custom Backgrounds, Colors, Headers, Logo & Menu', 'tech-software-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Customizable Home Page', 'tech-software-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Full-Width Template', 'tech-software-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Gallery, Banner & Post Type Plugin Functionality', 'tech-software-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Advance Social Media Feature', 'tech-software-company' ); ?></li>
				</ul>
			</div>
		</div>
	</div>

<script>
	function openPage(pageName,elmnt,color) {
	    var i, tabcontent, tablinks;
	    tabcontent = document.getElementsByClassName("tabcontent");
	    for (i = 0; i < tabcontent.length; i++) {
	        tabcontent[i].style.display = "none";
	    }
	    tablinks = document.getElementsByClassName("tablink");
	    for (i = 0; i < tablinks.length; i++) {
	        tablinks[i].style.backgroundColor = "";
	    }
	    document.getElementById(pageName).style.display = "block";
	    elmnt.style.backgroundColor = color;
	}
</script>
<?php } ?>