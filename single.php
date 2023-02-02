<?php get_header( );?>
<article class="container" id="post-<?php the_ID();?>" <?php post_class();?>>
    <?php if(have_posts()):
             while(have_posts()):
                the_post();
    ?>    
    <div class="jumbotron">
        <h2 class="text-center bg-secondary"><a class="text-decoration-none text-warning"href="<?php the_permalink();?>"><?php the_title();?></a></h2>
        <small class=""><?php the_time('F j, Y');?> at <?php the_time('g:i a');?> in <?php the_category();?></small>
        
    </div>
    <div class="row">
        <div class="col">
            <?php if(has_post_thumbnail()){
                the_post_thumbnail('');
            }?>
        </div>
    </div>
    <div class="row">
        <?php the_content();?>
    </div>
    <?php endwhile; ?>
            <!--Pagination Start -->
            <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                <a class="page-link" href="<?php previous_post_link('Previous');?>" tabindex="-1">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                <a class="page-link" href="<?php next_post_link();?>">Next</a>
                </li>
            </ul>
            </nav>
        <!--Pagination Ends -->
            <?php else:?> <!--End while loop -->
           <p> <?php _e('No Posts To Display');?> </p>
     <?php endif;?> <!--End if statement -->
     <!-- // If comments are open or we have at least one comment, load up the comment template. -->
    <div id="comments" class="bg-light">
        <?php 
            if(comments_open() || get_comments_number()){
                comments_template(); 
            }else{
                echo 'Comments are closed!';
            }
        ?>
    </div>
</article>

<?php get_footer();?>