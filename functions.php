<?php
//Imagem destacada
add_theme_support('post-thumbnails');

if(function_exists('register_sidebar')):
	register_sidebar(
			array(
					'before_widget' => '<div class="widgets">',
					'after_widget' => '</div>',
					'before_title' => '<h2>',
					'after_title' => '</h2>',
				));
endif;
?>