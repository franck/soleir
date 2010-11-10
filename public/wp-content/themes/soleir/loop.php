<?php while ( have_posts() ) : the_post(); ?>

		<div <?php post_class(); ?>>

  		<div class="entry-content">
  			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'soleir' ) ); ?>
  		</div><!-- .entry-content -->

      <div class="entry-utility">
  			<?php edit_post_link( __( 'modifier', 'soleir' ), '<span class="edit-link">', '</span>' ); ?>
  		</div>
	  </div><!-- .post -->

<?php endwhile; // End the loop. Whew. ?>