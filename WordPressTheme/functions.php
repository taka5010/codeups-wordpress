<?php 

//css js 読み込み
function add_external_files() {
    // Google Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Gotu&family=Lato:wght@400;700&family=Noto+Sans+JP:wght@400;500;700&display=swap', array(), null );

    // CSS
    wp_enqueue_style( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css', array(), null );
    wp_enqueue_style( 'theme-style', get_theme_file_uri('/assets/css/style.css'), array(), null );

    // JavaScript
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.js', array(), null, true );
    wp_enqueue_script( 'jquery-inview', get_theme_file_uri('/assets/js/jquery.inview.min.js'), array('jquery'), null, true );
    wp_enqueue_script( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array(), null, true );
    wp_enqueue_script( 'theme-script', get_theme_file_uri('/assets/js/script.js'), array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'add_external_files' );

//セキュリティ対策
remove_action('wp_head', 'wp_generator');

//アイキャッチ画像の設定
function my_setup() {
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action( 'after_setup_theme', 'my_setup' );
