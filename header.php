<!DOCTYPE html>

<?php
$wp_tag = new WpHtmlClass();
$wp_tag->html();
	$wp_tag->head();
		$wp_tag->title();
			bloginfo('name');
		$wp_tag->title;
		
		$wp_tag->meta('name="generator" content="WordPress ' . get_bloginfo('version') . '"');
		$wp_tag->meta('http-equiv="content-type" content="' . get_bloginfo('html-type') . ' ' .  get_bloginfo('charset') . '"');
		$wp_tag->link('rel="stylesheet" href=" ' .get_bloginfo('stylesheet_url'). ' " type="text/css" media="all"');
		
		$wp_tag->link('rel="stylesheet" href="wp-content/themes/wp-help-rpg/css/bootstrap-theme.min.css " type="text/css" media="all"');
		$wp_tag->link('rel="stylesheet" href="wp-content/themes/wp-help-rpg/css/bootstrap.css " type="text/css" media="all"');
		$wp_tag->link('rel="stylesheet" href="wp-content/themes/wp-help-rpg/css/bootstrap.min.css " type="text/css" media="all"');
		$wp_tag->link('rel="stylesheet" href="wp-content/themes/wp-maickon/css/bootstrap-theme.min.css " type="text/css" media="all"');
		$wp_tag->link('rel="stylesheet" href="wp-content/themes/wp-maickon/css/bootstrap.css " type="text/css" media="all"');
		$wp_tag->link('rel="stylesheet" href="wp-content/themes/wp-maickon/css/bootstrap.min.css " type="text/css" media="all"');
		 
		wp_head(); //permite que o arquivo header possa ser carregado.
	$wp_tag->head;
$wp_tag->body();

$wp_tag->div('class="row logo"');
	$wp_tag->div('class="container"');
		$wp_tag->a('href="'.get_option('home').'"');

			$wp_tag->img('src="wp-content/themes/wp-help-rpg/img/helpRpg.png" id="img_logo"');

		$wp_tag->a;
	$wp_tag->div;
$wp_tag->div;

$page_1 = get_page(45);//Armaduras
$page_2 = get_page(43);//Artefatos
$page_3 = get_page(40);//Aventuras
$page_4 = get_page(47);//Escudos
$page_5 = get_page(2);//Fichas
$page_6 = get_page(38);//Historias
$page_7 = get_page(4);//Home
$page_8 = get_page(49);//Sobre

$menus = array(
				$page_1->post_title, 
				$page_2->post_title,
				$page_3->post_title,
				$page_4->post_title,
				$page_5->post_title,
				$page_6->post_title,
				//$page_7->post_title,,
				$page_8->post_title
			);

$links = array(
				$page_1->ID,
				$page_2->ID,
				$page_3->ID,
				$page_4->ID,
				$page_5->ID,
				$page_6->ID,
				//$page_7->ID,
				$page_8->ID,
			);

$menu = new WpTwitterBootstrapMenu();
$menu->WpMenu('Help Rpg', $menus, $links, 1);

new WpTwitterBootstrapMenu('Site Name', $menus, $links, 1);


?>