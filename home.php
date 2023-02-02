<?php 
/**
 * Template Name: Home.php
 */
get_header();?>

<?php 
$currentpage = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'posts_per_page' => 2,
    'paged' => $currentpage
);
query_posts($args);
?>

<?php if ( is_home() ) { ?>
	<h1 class="page-title bg-dark text-danger text-center">
		<?php echo get_the_title( get_option('page_for_posts', true) ); ?>
	</h1>
<?php } ?>
<article class="container" id="post-<?php the_ID();?>" <?php post_class();?>>
    <?php if(have_posts()):
             while(have_posts()):
                the_post();
    ?>    
    <div class="jumbotron">
        <h2 class=""><a class="text-success text-decoration-none"href="<?php the_permalink();?>"><?php the_title();?></a></h2>
        <small><?php the_time('F j, Y');?> at <?php the_time('g:i a');?> in <?php the_category();?></small>
        
    </div>
    <div class="row">
        <div class="col">
            <?php the_post_thumbnail('medium');?>
        </div>
        <div class="col">
            <p class="lead"><?php the_excerpt();?></p>
        </div>
    </div>
    <?php endwhile; ?><!--End while loop -->
        <!--Pagination Start -->
        <?php
        if ( function_exists('wp_bootstrap_pagination') ){
            wp_bootstrap_pagination();
        }?>
        <!--Pagination Ends -->
        <?php else:?> 
        <p> <?php _e('No Posts To Display');?> </p>
        
     <?php endif;?> <!--End if statement -->
    <?php wp_reset_query();?>
</article>


<?php get_footer();?>