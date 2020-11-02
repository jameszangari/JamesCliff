<?php get_header();?>
<?php if (have_posts()): ?>
<main class="main-content">
<h1 class="archive-title u-heading-1">ALL PROJECTS</h1>

<?php while (have_posts()) : the_post(); ?>
  <div class="archive-grid">
    <div class="archive-item">
      <div class="archive-item--column-top">
        <a href="<?php the_permalink(); ?>">
        <?php if ( has_post_thumbnail() ) {
          the_post_thumbnail( 'large', array( 'class' => 'archive-thumbnail' ) );
        } else { ?>
          <img src="<?php bloginfo('template_directory'); ?>/dist/images/image_not_set.png" alt="<?php the_title(); ?>" class="archive-thumbnail"/>
        <?php } ?>
        </a>
      </div>
      <div class="archive-item--column-bottom">
        <a href="<?php the_permalink(); ?>" class="archive-title-link">
          <h2 class="archive-item--title u-heading-2"><?php the_title(); ?></h2>
        </a>
        <p class="archive-item--tag u-paragraph">
        <?php
          $posttags = get_the_tags();
          if ($posttags) {
            foreach($posttags as $tag) {
              echo $tag->name . ' '; 
            }
          }
        ?>
        </p>
      </div>
    </div>
  </div>
    <?php endwhile; ?>
    </div>
    
    <div class="archive-pagination">
      <?php the_posts_pagination( [
        'mid_size'           => 2,
        'screen_reader_text' => ' ',
        'prev_text' => __( '<i class="fa fa-arrow-left"></i>', 'textdomain' ),
        'next_text' => __( '<i class="fa fa-arrow-right"></i>', 'textdomain' )
       ] ); 
      ?>
    </div>

  <?php else: ?>
    <h1>No Results Found!</h1>
  <?php endif; ?>
</main>
<?php get_footer(); ?>