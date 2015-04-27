<?php
get_header();
$wp_tag->div('class="container"'); 
	if(have_posts()) :
		while(have_posts()) : 
			the_post(); 
			$wp_tag->a('href="'.get_permalink().'"');
				$wp_tag->span('class="title"'); 
					the_title(); 
				$wp_tag->span;
			$wp_tag->a;
			
			$wp_tag->div('class="content"');
				$wp_tag->div('class="thumbnail"');
					$wp_tag->img('src=""');
				$wp_tag->div;
				
				$wp_tag->div('class="excerpt"');
		 			the_excerpt(); 
	 			$wp_tag->div;
	 			
	 		
 				$wp_tag->div('class="public"');
	 				$wp_tag->wp_print("Publicado em: ");
	 				the_time("d/m/Y");
	 				$wp_tag->wp_print("às: ");
	 				the_time("g:i a");
 				$wp_tag->div;
	 		
	 			
	 		$wp_tag->div;
	 		
	 		$wp_tag->div('class="info"');
	 			//the_content();
	 		$wp_tag->div;
	 		
	 	endwhile;
	 else:
		$wp_tag->p(); 
			$wp_tag->wp_print("Nenhum post encontrado!");
		$wp_tag->p; 
	endif;
$wp_tag->div;

//<!-- Bootstrap core JavaScript
//================================================== -->
//<!-- Placed at the end of the document so the pages load faster -->
$wp_tag->wp_print('<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>');
$wp_tag->wp_print('<script src="wp-content/themes/wp-maickon/js/bootstrap.min.js"></script>');
//<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
$wp_tag->wp_print('
			<script src="js/jquery.js"></script>
			<script src="js/jquery-1.10.2.js"></script>
			<script src="js/jquery_validate.js"></script>
			<script src="js/jquery_validate_messages.js"></script>
			<script src="js/jquery-ui.js"></script>
			<script src="js/jquery_datatables.js"></script>
			<script src="ckeditor/ckeditor.js"></script>
			<script src="js/autocomplete.js"></script>
			<script src="js/autocomplete.pack.js"></script>
			<script src="js/autocomplete.min.js"></script>
			<script src="js/bootstrap-transition.js"></script>
			<script src="js/bootstrap-alert.js"></script>
			<script src="js/bootstrap-modal.js"></script>
			<script src="js/bootstrap-dropdown.js"></script>
			<script src="js/bootstrap-scrollspy.js"></script>
			<script src="js/bootstrap-tab.js"></script>
			<script src="js/bootstrap-tooltip.js"></script>
			<script src="js/bootstrap-popover.js"></script>
			<script src="js/bootstrap-button.js"></script>
			<script src="js/bootstrap-collapse.js"></script>
			<script src="js/bootstrap-carousel.js"></script>
			<script src="js/bootstrap-typeahead.js"></script>');
$wp_tag->body;
$wp_tag->html;

//Aula: https://www.youtube.com/watch?v=b08KgB-vDCo
?>	