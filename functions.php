<?php 
	add_action( 'wp_enqueue_scripts', 'enqueue_AdmissionsKPFU_style' );
	add_action( 'wp_enqueue_scripts', 'enqueue_AdmissionsKPFU_scripts' );

	function enqueue_AdmissionsKPFU_style() {
		wp_enqueue_style( 'main-style', get_stylesheet_uri() );
	}

	function enqueue_AdmissionsKPFU_scripts() {
		wp_enqueue_script( 'onload.js', get_template_directory_uri() .'/assets/js/onload.js', array(), '1.0', true);
		wp_enqueue_script( 'Togler.js', get_template_directory_uri() .'/assets/js/Togler.js', array(), '1.0', true);
		wp_enqueue_script( 'AdmissionsBurgerMenu.js', get_template_directory_uri() .'/assets/js/AdmissionsBurgerMenu.js', array(), '1.0', true);
		wp_enqueue_script( 'selectAll.js', get_template_directory_uri() .'/assets/js/selectAll.js', array(), '1.0', true);
		wp_enqueue_script( 'headerFixed.js', get_template_directory_uri() .'/assets/js/headerFixed.js', array(), '1.0', true);
		wp_enqueue_script( 'footerSlider.js', get_template_directory_uri() .'/assets/js/footerSlider.js', array(), '1.0', true);
		wp_enqueue_script( 'accordion.js', get_template_directory_uri() .'/assets/js/accordion.js', array(), '1.0', true);
		wp_enqueue_script( 'scrollIntoV.js', get_template_directory_uri() .'/assets/js/scrollIntoV.js', array(), '1.0', true);
	}

	add_action( 'widgets_init', 'register_left_panel_widget' );

	function register_left_panel_widget(){
		register_sidebar( array(
			'name'          => "Левая панель",
			'id'            => "left-sidebar",
			'description'   => 'Выводиться слева от контента',
			'class'         => 'form lob-conf-form',
			'before_widget' => '<div class="form">',
			'after_widget'  => "</div>\n",
			'before_title'  => '<h2 class="widgettitle">',
			'after_title'   => "</h2>\n",
		) );
	}
?>