<?php
get_header();
$wp_tag->div('class="container"'); 
	$wp_tag->div('class="row"');
	
		$wp_tag->div('class="span9"');
			query_posts($query_string." &order=ASC");
			if(have_posts()) : while(have_posts()) : the_post(); 

					$wp_tag->div('class="title_noticias_index"');
						the_title();
					$wp_tag->div;

					$wp_tag->div('class="page_post"');
			 			the_content();
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

?>