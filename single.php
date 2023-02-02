<?php get_header( );?>
<h1 class="bg-dark text-danger text-center"><?php  wp_title(''); ?></h1>
<article class="container" id="post-<?php the_ID();?>" <?php post_class();?>>
    <?php if(have_posts()):
             while(have_posts()):
                the_post();
    ?>    
    <div class="jumbotron">
        <h2 class="text-success"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
        <small><?php the_time('F j, Y');?> at <?php the_time('g:i a');?> in <?php the_category();?></small>
        
    </div>
    <div class="row">
        <div class="col">
            <?php the_post_thumbnail('');?>
        </div>
        <div class="col">
            <?php the_excerpt();?>
        </div>
    </div>
    <?php endwhile; else:?> <!--End while loop -->
           <p> <?php _e('No Posts To Display');?> </p>
     <?php endif;?> <!--End if statement -->
     <!-- // If comments are open or we have at least one comment, load up the comment template. -->
    <?php 
        if(comments_open() || get_comments_number()){
            comments_template(); 
        }else{
            echo 'Comments are closed!';
        }
    ?>
</article>
<?php get_footer();?>