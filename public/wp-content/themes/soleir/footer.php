    </div><!-- #main -->

    <div id="footer" role="contentinfo">
    		<div id="site-info">
    			
    			<?php query_posts('pagename=footer'); ?>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php the_content() ?>
          <?php endwhile; endif; ?>
    			
    			
    		</div><!-- #site-info -->
    </div><!-- #footer -->
  </div><!-- #container -->
<?php
	wp_footer();
?>
</body>
</html>
