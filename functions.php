<?php 

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' ); 
    function theme_enqueue_styles() 
    { wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );


//概要（抜粋）の文字数調整
function my_excerpt_length($length) {
	return 80;
}
add_filter('excerpt_length', 'my_excerpt_length');

/*footer追加*/
register_sidebar(array('name' => 'フッター１'));


} ?>