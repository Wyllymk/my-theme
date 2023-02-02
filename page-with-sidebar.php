<?php 
/**
 * Template Name: Page-With-Sidebar.php
 */
get_header();?>



<h1 class="bg-dark text-danger text-center">
    <?php  wp_title(''); ?>
</h1>
<article class="container" id="post-<?php the_ID();?>" <?php post_class();?>>
    <?php if(have_posts()):
             while(have_posts()):
                the_post();
    ?>    
    <div class="jumbotron">
        <h2 class="text-success"><a class="text-decoration-none"href="<?php the_permalink();?>"><?php the_title();?></a></h2>
        <small><?php the_time('F j, Y');?> at <?php the_time('g:i a');?></small>
        
    </div>
    <div class="row">
        <div class="col">
            <?php the_post_thumbnail('medium');?>
        </div>
        <div class="col">
            <?php the_excerpt();?>
        </div>
    </div>
    <?php endwhile; else:?> <!--End while loop -->
           <p> <?php _e('No Posts To Display');?> </p>
     <?php endif;?> <!--End if statement -->
    <?wp_reset_query();?>
</article>


<?php get_sidebar('sidebar-1');?>

<?php get_footer();?>