<?php get_header()?> 
 
<!-- End Header -->

		 <div id="container">
		 
			<div id="sidebar"> 
				<?php dynamic_sidebar( 'primary' ); ?> 
			</div>
		 
		 
			<div id="main"> 
			 <!-- Start the Loop. -->
						 <?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
							<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

						<small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small><p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>
									 

							 
						<?php endif; ?>
							<?php the_excerpt('More &raquo;'); ?>
							<?php edit_post_link('Edit.', '<p><small>', '</small></p>'); ?>
               
						 <?php endwhile; ?> 
						 
						 <nav class="post-nav">
                            <p class="alignleft"><?php next_posts_link('&laquo; Older Posts') ?></p>
                            <p class="alignright"><?php previous_posts_link('Newer Posts &raquo;') ?></p>
                        </nav>
						 
						<?php else : ?> 
							<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p> 
						 <?php endif; ?>
			 
			</div>
			
			 
		 
	</div>
		
<?php get_footer()?>