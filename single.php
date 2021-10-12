<?php

get_header();

?>

<div class="container fluid mt-5 mb-5">
	<div class="row">

		<?php

if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>
		<div class="col">
			<div class="card mb-3" style="width: 100%">
			  <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
			  <div class="card-body">
			    <h5 class="card-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
			    <p class="card-text"><?php the_content() ?></p>
			    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
			  </div>
			</div>				
		</div>
	<?php endwhile;

else :
	echo '<p>There are no posts!</p>';

endif;
?>

	</div>
</div>

<?php

get_footer();

?>



<!-- <p>This is the index page template.</p> -->