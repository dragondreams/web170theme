<?php get_header()?> 
 
<!-- End Header -->

		 <div id="container">
			<div id="sidebar"> 
				<?php dynamic_sidebar( 'primary' ); ?> 
			</div>
			
		 
			<div id="content"><!--open #main --> 
			 <!-- Start the Loop. -->
			 
		 
						 <?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?> 
						 <h4 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h4>
						<small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small><p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>
									 
					<div class="post-box">
						
						<?php the_post_thumbnail(); ?>
						<?php the_content('More &raquo;'); ?>
						<?php edit_post_link('Edit.', '<p><small>', '</small></p>'); ?>
                     </div> 
					 <?php endwhile; ?> 
			</div><!-- END CONTENT --> 
						<?php else : ?> 
							<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p> 
						<?php endif; ?>	 
							 
               
						 
						 
						 <nav class="post-nav">
                            <p class="alignleft"><?php next_posts_link('&laquo; Older Posts') ?></p>
                            <p class="alignright"><?php previous_posts_link('Newer Posts &raquo;') ?></p>
                        </nav>
						 
						 
						 <div id="widget">
							<?php dynamic_sidebar( 'secondary' ); ?> 
						 
						 </div>
			 
			</div>
			 
		
<?php get_footer()?>