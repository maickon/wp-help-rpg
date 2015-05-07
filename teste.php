<?php
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
?>