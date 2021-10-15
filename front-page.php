<?php get_header(); ?>
  <div class="container fluid mt-5 mb-5">
     <div class="row">
       <div class="col-12">
        <h3>Showing all posts</h3>
      </div>
        <?php
        if (have_posts() ) :
            while (have_posts() ) : the_post(); ?>

            <!-- here's the area where it loops over each post -->
            <div class="col col-md-4">
                 <div class="card mb-3" style="width: 100%">
                   <div class="card-body">
                     <h5 class="card-title">
                       <a href="<?php the_permalink(); ?>">
                       <?php the_title() ?>
                       </a>
                     </h5>
                     <p>Posted: <?php echo get_the_date('F j, Y'); ?></p>
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
    <div class="p-5 mb-4 bg-light rounded-3">
  <div class="container-fluid py-5">
    <h1 class="display-5 fw-bold">Check out my fruit collection</h1>
       <div class="row">
         <div class="col-12">
        </div>
        <?php
        query_posts(array(
          'post_type' => fruit
          )
        );
        ?>
          <?php
          if (have_posts() ) : $postcount = 0;
              while (have_posts() ) : the_post();
                  $postcount++;
                  if($postcount == 1) {
              ?>

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
                       <span><b>Featured!</b></span>
                         <?php
                         $fruit_price = get_post_meta(get_the_ID(), 'price_input', true);
                         if ($fruit_price){
                           echo "<p><b>Price:</b>";
                           echo '$' . $fruit_price . "</p>";
                         };
                       ?>
                       <p>Posted2: <?php echo get_the_date(); ?></p>
                       <p>Posted by: <?php the_author('F j, Y'); ?></p>
                       <p><?php the_time(); ?></p>
                       <p class="card-text"><?php the_excerpt(); ?></p>
                       <a href="<?php the_permalink(); ?>" class="btn btn-primary">
                       Read more
                       </a>
                     </div>
                   </div>
              </div>
            <?php
            // closing the if statement
          }else{
            ?>
            <div class="col col-md-2">
                 <div class="card mb-2" style="width: 100%">
                   <?php the_post_thumbnail("medium_large", ['class'=>'card-img-top']); ?>
                   <div class="card-body">
                     <h5 class="card-title">
                       <a href="<?php the_permalink(); ?>">
                       <?php the_title() ?>
                       </a>
                     </h5>
                     <p><b>Price:</b>
                       <?php
                       $fruit_price = get_post_meta(get_the_ID(), 'price_input', true);
                       echo '$' . $fruit_price;
                     ?>
                    </p>
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
            <?php
          };  ?>
          <?php
        endwhile;
              else : echo '<p>There are no posts!</p>';
          endif;
          ?>
  </div>
</div>
<img src="<?php bloginfo('stylesheet_directory');?>/images/shark.jpg" alt="happy shark" />
        <!-- <p>This is front-page.php</p> -->
</body>

<?php get_footer(); ?>
