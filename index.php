<?php
get_header();
$wp_tag->div('class="container"'); 

	$wp_tag->div('class="row"');
	
		$wp_tag->div('class="span9"');
			if(have_posts()) : while(have_posts()) : the_post(); 
					$wp_tag->div('class="span4 public"');
						$wp_tag->a('href="'.get_permalink().'"');
							$wp_tag->h4('class="title"'); 
								the_title(); 
							$wp_tag->h4;
						$wp_tag->a;
	
						$wp_tag->a('href="'.get_permalink().'"');
							$thumb_url = $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
							$wp_tag->img('src="'.$thumb_url[0].'" class="img-polaroid img_post"');
						$wp_tag->a;
						
						$wp_tag->div('class=""');
				 			//the_excerpt(); 
				 			$wp_tag->div('class="date"');
				 				$wp_tag->wp_print('Publicado por <b>').the_author().$wp_tag->wp_print('</b> em ');
				 				the_time("d/m/Y");
				 				$wp_tag->wp_print("às: ");
				 				the_time("g:i a");
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