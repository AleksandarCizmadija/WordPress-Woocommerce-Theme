<?php get_header();?>
<?php if (have_posts()): while(have_posts()): the_post();?>

			<?php if(has_post_thumbnail()):?>
        <div class="jumbotron" style="background-image:url(<?php the_post_thumbnail_url()?>)">

			<h2><?php the_title();?></h2>

		</div> <!-- jumbotron -->
			<?php endif;?>

<div class="container single-blog-post">
    <div class="blog-post">
        <div class="blog-post-text">
            <?php the_content(); ?>
        </div> <!-- blog-post-text -->
        
    </div> <!-- blog-post -->
    
<?php endwhile; else: endif; ?>
    <div class="blog-sidebar">
			<h5>Recent Blog</h5>
			<div class="recent-posts">
				
				<?php
			// The Loop
			 $the_query = new WP_Query( array( 'category_name' => 'Blog', 'posts_per_page' => 4 ) );
			 if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
						?>
						<div class="recent-blog"> 
							<a href="<?php the_permalink(); ?>">
							<?php if(has_post_thumbnail()):?>
								<div class="left">
									<img src="<?php the_post_thumbnail_url('xs-thumb'); ?>" alt="">
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