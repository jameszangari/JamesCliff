<?php get_header();?>
<?php if (have_posts()): ?>
<main class="main-content">
<?php while (have_posts()) : the_post(); ?>
      <div class="archive-grid">
      <a href="<?php the_permalink(); ?>">
      <?php if ( has_post_thumbnail() ) {
        the_post_thumbnail( 'large', array( 'class' => 'search-result-thumbnail' ) );
      } else { ?>
        <img src="<?php bloginfo('template_directory'); ?>/dist/images/image_not_set.jpg" alt="<?php the_title(); ?>" class="search-result-thumbnail"/>
      <?php } ?>
      </a>
      <a href="<?php the_permalink(); ?>" class="search-result-title-link">
        <h1><?php the_title(); ?></h1>
      </a>

      </div>
    <?php endwhile; ?>
    </div>

    <div>
      <?php the_posts_pagination( [
        'mid_size'           => 2,
        'screen_reader_text' => ' ',
       ] ); 
      ?>
    </div>

  <?php else: ?>
    <h1>No Results Found!</h1>
  <?php endif; ?>
</main>
<?php get_footer(); ?>