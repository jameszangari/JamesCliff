<?php
/*
 * Template Name: Photography
 * Template Post Type: post
 */
?>
<?php get_header();?>
<main class="main-content">
  <?php while (have_posts()) : the_post(); ?>
    <div class="photography-hero">
      <?php the_post_thumbnail('full', array('class' => 'photography-hero-image')); ?>
    </div>
    <div class="page-builder-posts page-builder-photography">
        <h1><?php the_title(); ?></h1>
          <?php $posttags = get_the_tags();
              if ($posttags) {
                foreach($posttags as $tag) {
                  echo '<h3>';
                  echo $tag->name . ' '; } 
                  echo '</h3>';
              } ?>

        <?php if( have_rows('slick-slides') ): ?>
        <div class="slick-slider-container">
        <?php while( have_rows('slick-slides') ): the_row(); ?>
          <?php
            $image = get_sub_field('image');
            $caption = get_sub_field('caption');
            $caption_specs = get_sub_field('caption_specs');
          ?>
          <div class="slick-container">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            <?php if($caption): ?>
              <h4 class="slick-caption u-heading-4"><?php echo $caption; ?></h4>
            <?php endif; ?>
            <?php if($caption_specs): ?>
              <p class="slick-caption-specs"><?php echo $caption_specs; ?></p>
            <?php endif; ?>
          </div>
        <?php endwhile; ?>
        <?php endif; ?>
        </div>
        
        <?php the_content(); ?>

    </div>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>