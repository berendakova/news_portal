<?php 
	add_editor_style();

	function root_acf_format_value( $value, $post_id, $field ) {
		$value = do_shortcode($value);
		return $value;
	}

	add_filter('acf/format_value/type=textarea', 'root_acf_format_value', 10, 3);

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
		wp_enqueue_script( 'topMenuSlider.js', get_template_directory_uri() .'/assets/js/topMenuSlider.js', array(), '1.0', true);
		wp_enqueue_script( 'bootstrap.js', get_template_directory_uri() .'/assets/js/bootstrap.js', array(), '1.0', true);
	}

	add_action( 'widgets_init', 'register_left_panel_widget' );

	function register_left_panel_widget(){
		register_sidebar( array(
			'name'          => "Standart contact form",
			'id'            => "left-sidebar",
			'description'   => 'Выводиться слева от контента',
			'class'         => 'form lob-conf-form',
			'before_widget' => '<div class="form">',
			'after_widget'  => "</div>\n",
			'before_title'  => '<h2 class="widgettitle">',
			'after_title'   => "</h2>\n",
		) );
	}

	add_action( 'init', 'register_post_types' );

	function register_post_types(){
		register_post_type( 'school_boys_news', [
			'label'  => null,
			'labels' => [
				'name'               => 'Новсти школьнику', // основное название для типа записи
				'singular_name'      => 'Новсть', // название для одной записи этого типа
				'add_new'            => 'Добавить новость', // для добавления новой записи
				'add_new_item'       => 'Добавление новсти', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Редактирование новости', // для редактирования типа записи
				'new_item'           => 'Новое ____', // текст новой записи
				'view_item'          => 'Смотреть новость', // для просмотра записи этого типа.
				'search_items'       => 'Искать новость', // для поиска по этим типам записи
				'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Новсти школьнику', // название меню
			],
			'description'         => '',
			'public'              => true,
			// 'publicly_queryable'  => null, // зависит от public
			// 'exclude_from_search' => null, // зависит от public
			// 'show_ui'             => null, // зависит от public
			// 'show_in_nav_menus'   => null, // зависит от public
			'show_in_menu'        => null, // показывать ли в меню адмнки
			// 'show_in_admin_bar'   => null, // зависит от show_in_menu
			'show_in_rest'        => null, // добавить в REST API. C WP 4.7
			'rest_base'           => null, // $post_type. C WP 4.7
			'menu_position'       => null,
			'menu_icon'           => null,
			//'capability_type'   => 'post',
			//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
			//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
			'hierarchical'        => false,
			'supports'            => [ 'title', 'editor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
			'taxonomies'          => array( 'category' ),
			'has_archive'         => false,
			'rewrite'             => true,
			'query_var'           => true,
		] );
		register_post_type( 'university-admission', [
			'label'  => null,
			'labels' => [
				'name'               => 'Прием в университет', // основное название для типа записи
				'singular_name'      => 'Прием в университет', // название для одной записи этого типа
				'add_new'            => 'Добавить университет', // для добавления новой записи
				'add_new_item'       => 'Добавление университета', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Редактирование приема в университет', // для редактирования типа записи
				'new_item'           => 'Новое ____', // текст новой записи
				'view_item'          => 'Смотреть университет', // для просмотра записи этого типа.
				'search_items'       => 'Искать прием в университет', // для поиска по этим типам записи
				'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Прием в университет', // название меню
			],
			'description'         => '',
			'public'              => true,
			// 'publicly_queryable'  => null, // зависит от public
			// 'exclude_from_search' => null, // зависит от public
			// 'show_ui'             => null, // зависит от public
			// 'show_in_nav_menus'   => null, // зависит от public
			'show_in_menu'        => null, // показывать ли в меню адмнки
			// 'show_in_admin_bar'   => null, // зависит от show_in_menu
			'show_in_rest'        => null, // добавить в REST API. C WP 4.7
			'rest_base'           => null, // $post_type. C WP 4.7
			'menu_position'       => null,
			'menu_icon'           => null,
			//'capability_type'   => 'post',
			//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
			//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
			'hierarchical'        => false,
			'supports'            => [ 'title', 'editor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
			'taxonomies'          => array( 'category' ),
			'has_archive'         => false,
			'rewrite'             => true,
			'query_var'           => true,
		] );
	}

	add_action( 'after_setup_theme', 'theme_register_nav_menu' );
	function theme_register_nav_menu() {
		register_nav_menu( 'Основное', 'Основное меню' );
	}

	// свой класс построения меню:
	class admissions_walker_nav_menu extends Walker_Nav_Menu {

		// add classes to ul sub-menus
		function start_lvl( &$output, $depth ) {
			// depth dependent classes
			$indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
			$display_depth = ( $depth + 1); // because it counts the first submenu as 0
			$classes = array(
				( $display_depth == 1  ? 'row hidden-content m-0' : '' ),
				( $display_depth == 2 ? 'nav row' : '' ),
				);
			$class_names = implode( ' ', $classes );

			// build html
			if($display_depth == 1) {
				$output .= "\n" . $indent . '<ul class="' . $class_names . '"><div class="content-container"><div class="row justify-content-start m-auto">' . "\n";
			} else {
				$output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
			}
		}

		// add main/sub classes to li's and links
		 function start_el( &$output, $item, $depth, $args ) {
			global $wp_query;
			$indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

			// depth dependent classes
			$depth_classes = array(
				( $depth == 0 ? 'admissions-nav-item' : '' ),
				( $depth == 1 ? 'hidden-content-list' : '' ),
				( $depth == 2 ? 'col-lg-auto hidden-content-item' : '' ),
			);
			$depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

			// passed classes
			$classes = empty( $item->classes ) ? array() : (array) $item->classes;
			$class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );

			// build html
			$output .= $indent . '<li class="'. $depth_class_names . ' ' . $class_names . '">';

			// link attributes
			$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
			$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
			$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
			$attributes .=  $depth == 0 || $depth == 1 ? '' :' href="'   . esc_attr( $item->url        ) .'"';
			$attributes .= ' class="' . ( $depth == 0 ? 'admissions-nav-link first-step-link' : '' ) . ( $depth == 1 ? 'hidden-content-link second-step-link' : '' ) . ( $depth == 2 ? 'hidden-content-link' : '' )  . '"';

			$attributes .= ! in_array('be-student', $item->classes) ? '' :' href="'   . esc_attr( $item->url        ) .'"';

			$uri = get_template_directory_uri() . '/assets/img/beStudent.jpg';

			if(in_array('be-student', $item->classes)){
				$item_output = sprintf( '<a%2$s>%1$s%3$s%4$s%5$s%6$s<img src="%7$s"></a>',
					'<h4 class="title">',
					$attributes,
					$args->link_before,
					apply_filters( 'the_title', $item->title, $item->ID ),
					$args->link_after,
					'</h4>',
					$uri
				);
			} elseif ($depth == 1 ) {
				$item_output = sprintf( '<a%2$s>%1$s%3$s%4$s%5$s%6$s</a>',
					'<h4 class="title">',
					$attributes,
					$args->link_before,
					apply_filters( 'the_title', $item->title, $item->ID ),
					$args->link_after,
					'</h4>'
				);
			} else {
				$item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
					$args->before,
					$attributes,
					$args->link_before,
					apply_filters( 'the_title', $item->title, $item->ID ),
					$args->link_after,
					$args->after
				);
			}

			// build html
			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		}
	}

	// И там, где нужно выводим меню так:
	function admissions_nav_menu() {
		// main navigation menu
		$args = array(
			'theme_location'    => 'Основное',
			'container'     => false,
			'menu_class'        => 'nav nav-offset-left d-flex justify-content-lg-center align-item-center justify-content-start', 
			'echo'          => true,
			'items_wrap'        => '<ul class="%2$s">%3$s</ul>',
			'depth'         => 10, 
			'walker'        => new admissions_walker_nav_menu
		);

		// print menu
		wp_nav_menu( $args );
	}
?>