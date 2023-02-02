<?php 
/**
 * Template Name: HomePage
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
            <nav aria-label="Page navigation ">
            <ul class="pagination justify-content-around mt-3">
                <li class="page-item">
                    <div class="page-link"><?php previous_posts_link('« Newer Posts');?></div>
                </li>
                
                <li class="page-item">
                    <div class=""><?php next_posts_link('Older Posts »');?></div>               
                </li>
            </ul>
            </nav>
        <!--Pagination Ends -->
        <?php else:?> 
        <p> <?php _e('No Posts To Display');?> </p>
        
     <?php endif;?> <!--End if statement -->
    
</article>


<?php get_footer();?>