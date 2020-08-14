<?php if (have_posts()): while(have_posts()): the_post();?>
    <div class="archive">
        <h3><?php the_title();?></h3>
    
        <?php if(has_post_thumbnail()):?>
            <a href="<?php the_permalink();?>" class="img-link"><img src="<?php the_post_thumbnail_url('sm-thumb')?>" ></a>
        <?php endif;?>
    
        <div class="archive-text">
            <?php the_excerpt(); ?>
        </div> <!-- archive-text -->
        
        <a href="<?php the_permalink();?>" class="btn">Read More</a>
    </div> <!-- archive -->
    
<?php endwhile; else: endif; ?>