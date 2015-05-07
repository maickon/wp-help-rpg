<?php
get_header();
$wp_tag->div('class="container"'); 
	$wp_tag->div('class="row"');
		$wp_tag->div('class="span9"');
			if(have_posts()) : while(have_posts()) : the_post(); 
					$wp_tag->div('class="span8 public"');
						
						$wp_tag->p('class="post_title"');
							
							the_title();
							$wp_tag->span('class="post_date"'); 
								
								$wp_tag->wp_print('Publicado por <b>').the_author().$wp_tag->wp_print('</b> em ');
								the_time("d/m/Y");
								$wp_tag->wp_print("às: ");
								the_time("g:i a");
							
							$wp_tag->span;
						
						$wp_tag->p;
						
						$wp_tag->div('class="post_content"');
				 			the_content();  	
				 			$wp_tag->hr();
				 			comments_template();	
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