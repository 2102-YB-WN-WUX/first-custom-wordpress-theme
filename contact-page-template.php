<?php

/*

Template Name: Tim's Contact Page Template

*/

?>

<?php get_header(); ?>
  <div class="container fluid mt-5 mb-5">
     <div class="row">
        <?php
        if (have_posts() ) :
            while (have_posts() ) : the_post(); ?>
            <div class="col-12">
             <h3><?php the_title() ?></h3>
           </div>
            <!-- here's the area where it loops over each post -->
            <div class="col col-md-4">
                <?php the_content(); ?>
            </div>
        <?php endwhile;
            else : echo '<p>There are no posts!</p>';
        endif;
        ?>
      </div>
      <div class="row">
        <div class="col-12">
          <ul class="list-group">
            <li class="list-group-item">Email</li>
            <li class="list-group-item">Phone</li>
          </ul>
        </div>
      </div>
    </div>
</body>

<?php get_footer(); ?>
