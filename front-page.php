<?php get_header();?>

    <div class="hero">
        <h1>100% Fresh & Organic Foods</h1>
        <p>We deliver organic vegetables & fruits</p>
        <a href="#" class="btn">View Details</a>
    </div> <!-- hero -->

    
<?php 

include get_theme_file_path('labels.php');?>

    <div class="container">
        <?php dynamic_sidebar('page_sidebar');?>
    </div> <!-- container -->
<?php get_footer();?>