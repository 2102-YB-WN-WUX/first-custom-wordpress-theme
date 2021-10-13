<?php

/*

Template Name: Sports Collection Page Template

*/

?>

<?php get_header(); ?>
  <div class="container fluid mt-5 mb-5">
     <div class="row">
       <div class="col-12">
        <h3>Check out these sports</h3>
      </div>
      <?php
      query_posts(array(
        'post_type' => sports
        )
      );
      ?>
        <?php
        if (have_posts() ) :
            while (have_posts() ) : the_post(); ?>

            <!-- here's the area where it loops over each post -->
            <div class="col col-md-6">
                 <div class="card mb-6" style="width: 100%">
                   <?php the_post_thumbnail("medium_large", ['class'=>'card-img-top']); ?>
                   <div class="card-body">
                     <h5 class="card-title">
                       <a href="<?php the_permalink(); ?>">
                       <?php the_title() ?>
                       </a>
                     </h5>
                     <p>Posted: <?php the_date('F j, Y'); ?></p>
                     <p>Posted by: <?php the_author('F j, Y'); ?></p>
                     <p><?php the_time(); ?></p>
                     <p class="card-text"><?php the_excerpt(); ?></p>
                     <a href="<?php the_permalink(); ?>" class="btn btn-primary">
                     Read more
                     </a>
                   </div>
                 </div>
            </div>
        <?php endwhile;
            else : echo '<p>There are no posts!</p>';
        endif;
        ?>
      </div>
    </div>
        <!-- <p>This is the sports template</p> -->
</body>

<?php get_footer(); ?>
