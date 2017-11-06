<div class="blog-post">
<h2 class="blog-post-title"><?php the_title(); ?></h2>
  <p><?php echo_first_image( get_the_ID() ); ?></p>
<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
<?php the_content(); ?>
</div><!-- /.blog-post -->
