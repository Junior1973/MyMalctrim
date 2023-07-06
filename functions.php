<?php 

// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', function () {               

    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css?family=Underdog' );
	wp_enqueue_style( 'euclid-circular-a', 'https://fonts.cdnfonts.com/css/euclid-circular-a' );
	wp_enqueue_style( 'helveticaneuecyr-2', 'https://fonts.cdnfonts.com/css/helveticaneuecyr-2' );
	wp_enqueue_style( 'swiper-bundle.min', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css' );
    wp_enqueue_style( 'footer', get_template_directory_uri(). '/assets/css/footer.css' );
	wp_enqueue_style( 'about', get_template_directory_uri(). '/assets/css/about.css' );
	wp_enqueue_style( 'route_details_media', get_template_directory_uri(). '/assets/css/route_details_media.css' );
	wp_enqueue_style( 'route_details', get_template_directory_uri(). '/assets/css/route_details.css' );
	wp_enqueue_style( 'schedule', get_template_directory_uri(). '/assets/css/schedule.css' );
	wp_enqueue_style( 'style', get_template_directory_uri(). '/assets/css/style.css' ); 

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');

	wp_enqueue_script( 'jquery' );
	// Если скрипт зависит от jquery 
	//wp_enqueue_script( 'neme', get_template_directory_uri() . '/neme.js', array('jquery'), 'null', true );
	
	wp_enqueue_script( 'swiper-bundle.min', get_template_directory_uri() . 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js'); 
	// wp_enqueue_script( 'reminder', get_template_directory_uri() . 'assets/js/reminder.js', array('jquery'), 'null', true );
	wp_enqueue_script( 'route_details', get_template_directory_uri() . 'assets/js/route_details.js', array('jquery'), 'null', true );
	wp_enqueue_script( 'schedule', get_template_directory_uri() . 'assets/js/schedule.js', array('jquery'), 'null', true );
	wp_enqueue_script( 'schedule', get_template_directory_uri() . 'script_pamyatka1.js', array('jquery'), 'null', true );
	wp_enqueue_script( 'script', get_template_directory_uri() . 'assets/js/script.js' , array('jquery'), 'null', true ); 
	

});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');


add_filter( 'upload_mimes', 'svg_upload_allow' );

// Добавляет SVG в список разрешенных для загрузки файлов.

	function svg_upload_allow( $mimes ) {
		$mimes['svg']  = 'image/svg+xml';

		return $mimes;
	}

    add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

// Исправление MIME типа для SVG файлов.
		function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

			// WP 5.1 +
			if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
				$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
			}
			else {
				$dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
			}

// mime тип был обнулен, поправим его
// а также проверим право пользователя
			if( $dosvg ){

				// разрешим
				if( current_user_can('manage_options') ){

					$data['ext']  = 'svg';
					$data['type'] = 'image/svg+xml';
				}
				// запретим
				else {
					$data['ext']  = false;
					$data['type'] = false;
				}

			}

			return $data;
		}

    ?>