<div class="col-4 blog-main">
<div onclick="onOpenGallery(this)" class="project-item <?php echo get_random_blog_entry_class() ?>">
  <div class="project-item-image">
    <div class="project-item-infos">
      <div class="inner">
        <div class="project-item-title"><h3><?php the_title(); ?></h3></div>
        <div class="project-item-design"><?php the_field('design')?></div>
        <div class="project-item-conception"><?php the_field('conception')?></div>
        <div class="project-item-materials"><?php the_field('materials')?></div>
        <div class="project-item-bottom">
          <div class="project-item-location">
            <div class="project-item-venue"><?php the_field('venue')?></div>
            <div class="project-item-city"><?php the_field('city') ?></div>
          </div>
          <div class="project-item-date"><?php echo date('F Y', strtotime(get_field('date')))?></div>
        </div>
      </div>
    </div>
    <?php echo_first_image( get_the_ID() ); ?>
  </div>
  <?php image_list( get_the_ID() ) ?>
</div><!-- /.project-item -->
</div>
