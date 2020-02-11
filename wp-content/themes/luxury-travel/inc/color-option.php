<?php
	
	$luxury_travel_theme_color = get_theme_mod('luxury_travel_theme_color');

	$custom_css = '';

	if($luxury_travel_theme_color != false){
		$custom_css .='input[type="submit"], a.button, #footer input[type="submit"], #comments input[type="submit"].submit, #sidebar input[type="submit"], #sidebar .tagcloud a:hover, .nav-menu ul li a:hover, .nav-menu ul ul a, .top-contact i, h1.page-title, h1.search-title, nav.woocommerce-MyAccount-navigation ul li, .woocommerce #respond input#submit:hover, .woocommerce input.button:hover, .woocommerce button.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.woocommerce a.button:hover, .blogbtn a:hover, .inner, .bradcrumbs a, #wrapper h1, .pagination .current, .pagination .current, .pagination a:hover, span.meta-nav, .title-box, #sidebar h3, .tags a:hover, #comments a.comment-reply-link, .back-to-top {';
			$custom_css .='background-color: '.esc_html($luxury_travel_theme_color).';';
		$custom_css .='}';
	}
	if($luxury_travel_theme_color != false){
		$custom_css .='a, .nav-menu ul li a:active, #header .logo a, #sidebar ul li a:hover, .pagination span, .pagination a, .widget_calendar caption, .social-media i:hover, #header .logo p, .about h3, #our-products h2, button.single_add_to_cart_button.button.alt, .woocommerce a.button.alt, .woocommerce input.button.alt, .woocommerce-message::before, .blogbtn a, .footerinner ul li a:hover, .read-more a:hover, .carousel-control-next-icon:hover, .carousel-control-prev-icon:hover, span.post-title,  .nav-menu ul ul a:hover, .tags a i, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, .woocommerce #payment #place_order, .woocommerce-page #payment #place_order, .blog-sec h2 a {';
			$custom_css .='color: '.esc_html($luxury_travel_theme_color).';';
		$custom_css .='}';
	}
	if($luxury_travel_theme_color != false){
		$custom_css .='
		@media screen and (max-width:1000px){
		.nav-menu .current_page_item > a, .nav-menu .current-menu-item > a, .nav-menu .current_page_ancestor > a, .nav-menu ul ul a:hover {';
			$custom_css .='color: '.esc_html($luxury_travel_theme_color).';';
		$custom_css .='} }';
	}
	if($luxury_travel_theme_color != false){
		$custom_css .='
		.back-to-top::before {';
			$custom_css .='border-bottom-color: '.esc_html($luxury_travel_theme_color).';';
		$custom_css .='}';
	}
	if($luxury_travel_theme_color != false){
		$custom_css .='a.button, .blog-sec, .woocommerce-message, .woocommerce #respond input#submit:hover, .woocommerce input.button:hover, .woocommerce button.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.woocommerce a.button:hover, .blogbtn a, #sidebar form, #sidebar aside, #wrapper, .pagination span, .pagination a, .pagination .current,.nav-menu ul li a:hover, .nav-menu ul ul a:hover, .tags a:hover, .nav-menu ul ul  {';
			$custom_css .='border-color: '.esc_html($luxury_travel_theme_color).';';
		$custom_css .='}';
	}

	// Layout Options
	$theme_layout = get_theme_mod( 'luxury_travel_theme_layout_options','Default Theme');
    if($theme_layout == 'Default Theme'){
		$custom_css .='body{';
			$custom_css .='max-width: 100%;';
		$custom_css .='}';
	}else if($theme_layout == 'Container Theme'){
		$custom_css .='body{';
			$custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$custom_css .='}';
	}else if($theme_layout == 'Box Container Theme'){
		$custom_css .='body{';
			$custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$slider_layout = get_theme_mod( 'luxury_travel_slider_opacity_color','0.7');
	if($slider_layout == '0'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0';
		$custom_css .='}';
	}else if($slider_layout == '0.1'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.1';
		$custom_css .='}';
	}else if($slider_layout == '0.2'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.2';
		$custom_css .='}';
	}else if($slider_layout == '0.3'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.3';
		$custom_css .='}';
	}else if($slider_layout == '0.4'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.4';
		$custom_css .='}';
	}else if($slider_layout == '0.5'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.5';
		$custom_css .='}';
	}else if($slider_layout == '0.6'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.6';
		$custom_css .='}';
	}else if($slider_layout == '0.7'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.7';
		$custom_css .='}';
	}else if($slider_layout == '0.8'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.8';
		$custom_css .='}';
	}else if($slider_layout == '0.9'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.9';
		$custom_css .='}';
	}

	/*---------------------------Slider Content Layout -------------------*/

	$slider_layout = get_theme_mod( 'luxury_travel_slider_alignment_option','Left Align');
    if($slider_layout == 'Left Align'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel h1{';
			$custom_css .='text-align:left;';
		$custom_css .='}';
		$custom_css .='#slider .carousel-caption{';
		$custom_css .='left:12%; right:55%;';
		$custom_css .='}';
		$custom_css .='.social-media{';
		$custom_css .='right:15em;';
		$custom_css .='}';
		$custom_css .='@media screen and (max-width: 768px) and (min-width: 720px){
		.social-media {';
		    $custom_css .='right: 10em;';
		$custom_css .='} }';
		$custom_css .='@media screen and (max-width: 720px) and (min-width: 320px){
			.page-template-custom-front-page .social-media {';
		    $custom_css .='right: 0; display:table;  text-align: left; left: 12%;';
		$custom_css .='} }';

	}else if($slider_layout == 'Center Align'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel h1{';
			$custom_css .='text-align:center;';
		$custom_css .='}';
		$custom_css .='#slider .carousel-caption{';
		$custom_css .='left:25%; right:25%;';
		$custom_css .='}';
		$custom_css .='.page-template-custom-front-page .social-media{';
		$custom_css .='right: 25%; left:25%; display:block; text-align: center; top:65%;';
		$custom_css .='}';
		$custom_css .='.social-media i{';
		$custom_css .='margin: 0px 5px;';
		$custom_css .='}';
		$custom_css .='@media screen and (max-width: 720px) and (min-width: 320px){
			.page-template-custom-front-page .social-media {';
		    $custom_css .='right: 0; left: 0;';
		$custom_css .='} }';

	}else if($slider_layout == 'Right Align'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel h1{';
			$custom_css .='text-align:right;';
		$custom_css .='}';
		$custom_css .='#slider .carousel-caption{';
		$custom_css .='right:12%; left:55%;';
		$custom_css .='}';
		$custom_css .='.social-media{';
		$custom_css .='left:15em; right:auto;';
		$custom_css .='}';
		$custom_css .='@media screen and (max-width: 768px) and (min-width: 720px){
		.social-media {';
		    $custom_css .='left: 10em;';
		$custom_css .='}';
		$custom_css .='#slider .carousel-caption{';
		$custom_css .='right:12%; left:40%;';
		$custom_css .='} }';
		$custom_css .='@media screen and (max-width: 720px) and (min-width: 320px){
			.page-template-custom-front-page .social-media {';
		    $custom_css .='right: 12%; display:table;  text-align: right; left:auto;';
		$custom_css .='} }';
	}


	/*--------- Preloader Color Option -------*/
	$luxury_travel_preloader_color = get_theme_mod('luxury_travel_preloader_color');

	if($luxury_travel_preloader_color != false){
		$custom_css .=' .loader{';
			$custom_css .='border-color: '.esc_html($luxury_travel_preloader_color).';';
		$custom_css .='} ';
		$custom_css .=' .loader-inner{';
			$custom_css .='background-color: '.esc_html($luxury_travel_preloader_color).';';
		$custom_css .='} ';
	}

	$luxury_travel_preloader_bg_color = get_theme_mod('luxury_travel_preloader_bg_color');

	if($luxury_travel_preloader_bg_color != false){
		$custom_css .=' #overlayer{';
			$custom_css .='background-color: '.esc_html($luxury_travel_preloader_bg_color).';';
		$custom_css .='} ';
	}