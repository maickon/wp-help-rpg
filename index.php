<?php
get_header();

$wp_tag->div('class="container container_color"'); 
	$wp_tag->div('class="row"');
		
		$wp_tag->div('class="span9"');
			if($_GET['cat'] != 0):
			else:
				$wp_tag->div('class="span8 title_noticias_index"');
					$wp_tag->wp_print('Últimas notícias');
				$wp_tag->div;
				
				query_posts('category_name=Noticias&offset=0&showposts=2');
					if(have_posts()) : while(have_posts()) : the_post(); 
						$wp_tag->div('class="span4"');
							$wp_tag->div('class="post_box_index"');
								$wp_tag->div('class="title_index"');
									$wp_tag->a('href="'.get_permalink().'"');
										the_title(); 
									$wp_tag->a;
								$wp_tag->div;
			
								$wp_tag->a('href="'.get_permalink().'"');
									$thumb_url = $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
									$wp_tag->img('src="'.$thumb_url[0].'" class="img-polaroid img_post_index"');
								$wp_tag->a;
								
								$wp_tag->div('class=""');
				
						 			$wp_tag->div('class="date"');
						 				$wp_tag->wp_print('Postado dia ');
						 				the_time("d/m/Y");
						 			$wp_tag->div;
						 		
						 		$wp_tag->div;
							$wp_tag->div;
					 	$wp_tag->div;
				 		
				 	endwhile;
				 else:
					$wp_tag->p(); 
						$wp_tag->wp_print("Nenhum post encontrado!");
					$wp_tag->p; 
				endif;
					
			endif;
			
			wp_reset_query();
			
			$wp_tag->div('class="span8 title_noticias_index"');
				if($_GET['cat'] != 0):
					$wp_tag->div('class="title_noticias"');
						$category = get_the_category();
							echo($category[0]->cat_name);
					$wp_tag->div;
				else:
					$wp_tag->wp_print('Help RPG Info');		
				endif;
			$wp_tag->div;
			
			if($_GET['cat'] != 0):
				query_posts('category_name='.$category[0]->cat_name.'&offset=0&showposts=8&orderby=rand');
			else:
				query_posts('cat=-9');// vai pegar todas as categorias menos a de ID 9
			endif;
			
			
			if(have_posts()) : while(have_posts()) : the_post(); 
					$wp_tag->div('class="span2"');
						$wp_tag->div('class="post_box"');
							$wp_tag->div('class="title"');
								$wp_tag->a('href="'.get_permalink().'"');
									the_title(); 
								$wp_tag->a;
							$wp_tag->div;
		
							$wp_tag->a('href="'.get_permalink().'"');
								$thumb_url = $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
								$wp_tag->img('src="'.$thumb_url[0].'" class="img-polaroid img_post"');
							$wp_tag->a;
							
							$wp_tag->div('class=""');
			
					 			$wp_tag->div('class="date"');
					 				$wp_tag->wp_print('Postado dia ');
					 				the_time("d/m/Y");
					 			$wp_tag->div;
					 		
					 		$wp_tag->div;
						$wp_tag->div;
				 	$wp_tag->div;
			 		
			 	endwhile;
			 else:
				$wp_tag->p(); 
					$wp_tag->wp_print("Nenhum post encontrado!");
				$wp_tag->p; 
			endif;
			
		$wp_tag->div;
		
		$wp_tag->div('class="span3"');
			get_sidebar();
		$wp_tag->div;
	$wp_tag->div;
	
$wp_tag->div;	
	
get_footer();

$wp_tag->wp_print('
			<script src="wp-content/themes/wp-help-rpg/js/jquery.js"></script>
		    <script src="wp-content/themes/wp-help-rpg/js/bootstrap-transition.js"></script>
		    <script src="wp-content/themes/wp-help-rpg/js/bootstrap-alert.js"></script>
		    <script src="wp-content/themes/wp-help-rpg/js/bootstrap-modal.js"></script>
		    <script src="wp-content/themes/wp-help-rpg/js/bootstrap-dropdown.js"></script>
		    <script src="wp-content/themes/wp-help-rpg/js/bootstrap-scrollspy.js"></script>
		    <script src="wp-content/themes/wp-help-rpg/js/bootstrap-tab.js"></script>
		    <script src="wp-content/themes/wp-help-rpg/js/bootstrap-tooltip.js"></script>
		    <script src="wp-content/themes/wp-help-rpg/js/bootstrap-popover.js"></script>
		    <script src="wp-content/themes/wp-help-rpg/js/bootstrap-button.js"></script>
		    <script src="wp-content/themes/wp-help-rpg/js/bootstrap-collapse.js"></script>
		    <script src="wp-content/themes/wp-help-rpg/js/bootstrap-carousel.js"></script>
		    <script src="wp-content/themes/wp-help-rpg/js/bootstrap-typeahead.js"></script>');

$wp_tag->body;
$wp_tag->html;

//Aula: https://www.youtube.com/watch?v=b08KgB-vDCo
?>	