<?php
get_header();
<<<<<<< HEAD

$wp_tag->div('class="row"'); 

	$wp_tag->div('class="container"');
		
		$wp_tag->div('class="row"');
			if($_GET['cat'] != 0):
			else:
				$wp_tag->div('class="title_noticias_index"');
				
					$wp_tag->wp_print('Últimas notícias');
				
				$wp_tag->div;
			
				$wp_tag->div('class="span9"');
					$wp_tag->div('class="post_box_index"');
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
					$wp_tag->div;
				$wp_tag->div;
				
				$wp_tag->div('class="span3"');
					get_sidebar();
				$wp_tag->div;
			endif;
			
			
			
			wp_reset_query();
			
			$wp_tag->div('class="title_noticias_index"');
			
			if($_GET['cat'] != 0):
				$wp_tag->div('class="title_noticias"');
					$category = get_the_category();
					echo $category[0]->cat_name;
				$wp_tag->div;
			else:
				$wp_tag->wp_print('Help RPG Info');		
			endif;
		
			$wp_tag->div;
			
			$wp_tag->div('class="span9"');
				$sidebar = 0;
				if($_GET['cat'] != 0):
					$sidebar = 1;
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
			
			if($sidebar == 1):
				$wp_tag->div('class="span3"');
					get_sidebar();
				$wp_tag->div;
			endif;
		
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
=======
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
>>>>>>> fdce4656b21df90b1098329a629800075a341b51
$wp_tag->body;
$wp_tag->html;

//Aula: https://www.youtube.com/watch?v=b08KgB-vDCo
?>	