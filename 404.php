<?php get_header();?>

        <div class="jumbotron" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/shopping-cart.jpg)">

			<h2>Page Not Found</h2>

        </div> <!-- jumbotron -->
        

    <div class="container page-404">    
         
        <?php dynamic_sidebar('page_sidebar');?>
        
        
            <div class="blog-sidebar-404">
			<h5>Recent Blog</h5>
                <div class="recent-posts-404">
				
				<?php
			// The Loop
			 $the_query = new WP_Query( array( 'category_name' => 'Blog', 'posts_per_page' => 4 ) );
			 if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
						?>
						<div class="recent-blog-404"> 
							<a href="<?php the_permalink(); ?>">
							<?php if(has_post_thumbnail()):?>
								<div class="left">
									<img src="<?php the_post_thumbnail_url('sm-thumb'); ?>" alt="">
								</div> <!-- left -->
								<?php endif;?>	
								
							<div class="right">
								
								<p>
									<?php echo get_the_title()?> 
								</p>
								<p>
									<?php echo get_the_date()?> 
								</p></a>
							</div> <!-- right -->
						</div> <!-- recent-blog -->
						<?php
					}
				} else;
				?>
				</div> <!-- recent-posts -->
		</div> <!-- blog-sidebar -->
		
    </div> <!-- container -->
<?php get_footer();?>