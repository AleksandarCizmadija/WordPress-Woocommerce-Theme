<?php if (have_posts()): while(have_posts()): the_post();?>

    <div class="blog-post">
        <h2><?php the_title();?></h2>
    
        <?php if(has_post_thumbnail()):?>
            <img src="<?php the_post_thumbnail_url('md-thumb')?>">
        <?php endif;?>
    
        <div class="blog-post-text">
            <?php the_content(); ?>
        </div> <!-- blog-post-text -->
        
    </div> <!-- blog-post -->
    
<?php endwhile; else: endif; ?>