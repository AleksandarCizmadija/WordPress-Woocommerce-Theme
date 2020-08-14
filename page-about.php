<?php get_header();?>



<?php if(has_post_thumbnail()):?>

    <div class="jumbotron" style="background-image: url(<?php the_post_thumbnail_url()?>);">
        <h2><?php the_title();?></h2>
    </div> <!-- jumbotron -->

<?php endif;?>

<div class="container about">

    <div class="about-text">
        <?php get_template_part( '/includes/section', 'content' )?>
        <a href="<?php echo site_url( '/shop/' );?>" class="btn">Shop Now</a>
    </div> <!-- about-text -->

    <div class="about-video">
        <a class="popup-youtube" href="https://www.youtube.com/watch?v=XG5Tk4CsTw8"><i
                        class="fas fa-play"></i></a><br>
    </div> <!-- about-video -->

</div> <!-- container -->

<div class="scroll">
    <div class="scrolled container">
        
        <?php
        $custumers = get_field("happy_customers");
        $branches = get_field("branches");
        $partners = get_field("partners");
        $awards = get_field("awards");
        
        if( $custumers ) {
            ?> <div class="box">
                <h3 class='counter' data-target = <?php echo $custumers; ?>> 0 </h3>
                <p>Happy Costumers</p> 
                </div> <!-- box -->
            <?php
        } 
        if( $branches ) {
            ?> <div class="box">
                <h3 class='counter' data-target = <?php echo $branches; ?>> 0 </h3>
                <p>Branches</p> 
                </div> <!-- box -->
            <?php
        } 
        if( $partners ) {
            ?> <div class="box">
                <h3 class='counter' data-target = <?php echo $partners; ?>> 0 </h3>
                <p>Partners</p> 
            </div> <!-- box -->
            <?php
        } 
        if( $awards ) {
            ?> <div class="box">
                <h3 class='counter' data-target = <?php echo $awards; ?>> 0 </h3>
                <p>Awards</p> 
            </div> <!-- box -->
            <?php
        } 
    ?>    
    </div> <!-- scrolled -->
</div> <!-- scroll -->

<div class="about-labels">
    <?php include get_theme_file_path('labels.php');?>
</div> <!-- about-labels -->



<?php get_footer();?>