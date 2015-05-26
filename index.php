<?php get_header()?> 
 
<!-- End Header -->

		 <div id="container">
		 
			<div id="main">
			
			 <!-- Start the Loop. -->
						 <?php if ( have_posts() ) 
								<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

									<small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small><p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>

						 <?php while ( have_posts() ) : the_post(); ?>
							
									<div class="entry">
											<?php the_content(); ?>
									</div>

							 
							<?php endif; ?>
 
						 <?php endwhile; else : ?> 
							<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p> 
						 <?php endif; ?>
			
			
			
			
			</div>
			
			<div id="sidebar">
			
			<?php get_sidebar()?>;
			
			</div>
		 
		 
		 
		 </div>
		
<?php get_footer()?>