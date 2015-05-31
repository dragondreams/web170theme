<?php get_header()?> 
 
<!-- End Header -->

		 <div id="container">
			<div id="sidebar"> 
				<?php dynamic_sidebar( 'primary' ); ?> 
			</div>
			
		 
			<div id="content"><!--open #main --> 
			 <!-- Start the Loop. -->
			 
		 
						 <?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?> 
						 <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
						 
									 
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
							 
               
						 
						 
						 <?php comments_template(); ?>
						 
						 
						 <div id="widget">
							<?php dynamic_sidebar( 'secondary' ); ?> 
						 
						 </div>
			 
			</div>
			 
		
<?php get_footer()?>