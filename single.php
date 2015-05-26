<?php get_header()?> 
 
<!-- End Header -->

		 <div id="container">
		 
			<div id="main">
			
			 <!-- Start the Loop. -->
						 <?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
							<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2> 

							 
							<?php endif; ?>
									<?php the_content('More &raquo;'); ?>
									<?php edit_post_link('Edit.', '<p><small>', '</small></p>'); ?>
               
						 <?php endwhile; ?> 
						 
						  
						 
						<?php else : ?> 
							<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p> 
						 <?php endif; ?>
			
			<?php comments_template(); ?> 
			
			
			</div>
			
			<div id="sidebar">
			
			<?php get_sidebar()?>;
			
			</div>
		 
		 
		 
		 </div>
		
<?php get_footer()?>