<?php get_header();?>
<div class="archives container">
        <?php get_template_part( 'includes/section', 'blogarchive' );?>
</div> <!-- container -->

<div class="container paginations">
    <?php the_posts_pagination();?>
    <?php // echo paginate_links();  // this is only for onder versions of WP?>
</div> <!-- container -->

<?php get_footer();?>