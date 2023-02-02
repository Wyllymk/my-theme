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
        <h2 class="text-success"><a class="text-decoration-none"href="<?php the_permalink();?>"><?php the_title();?></a></h2>
        <small><?php the_time('F j, Y');?> at <?php the_time('g:i a');?> in <?php the_category();?></small>
        
    </div>
    <div class="row">
        <div class="col">
            <?php the_post_thumbnail('medium');?>
        </div>
        <div class="col">
            <?php the_excerpt();?>
        </div>
    </div>
    <?php endwhile; ?><!--End while loop -->
        <!--Pagination Start -->
            <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                <a class="page-link" href="<?php previous_posts_link('Previous');?>" tabindex="-1">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                <a class="page-link" href="<?php next_posts_link('Next');?>">Next</a>
                </li>
            </ul>
            </nav>
        <!--Pagination Ends -->
        <?php else:?> 
        <p> <?php _e('No Posts To Display');?> </p>
        
     <?php endif;?> <!--End if statement -->
    
</article>


<?php get_footer();?>