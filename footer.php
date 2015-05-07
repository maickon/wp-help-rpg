<?php
$wp_tag = new WpHtmlClass();

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
		$page_7->post_title,
		$page_8->post_title
);

$links = array(
		$page_1->ID,
		$page_2->ID,
		$page_3->ID,
		$page_4->ID,
		$page_5->ID,
		$page_6->ID,
		$page_7->ID,
		$page_8->ID,
);


$wp_tag->div('class="row black"'); 
	$wp_tag->div('class="footer"');
		$wp_tag->p('class="rodape"');
			$menu = new WpTwitterBootstrapMenu();
			$menu->WpFooter('Help Rpg', $menus, $links);
		$wp_tag->p;	
	$wp_tag->div;
$wp_tag->div;?>