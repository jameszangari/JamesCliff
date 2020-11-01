<?php get_header();?>
<main class="main-content">
  <?php while (have_posts()) : the_post(); ?>
    <div class="page-builder-page">
      <h1 class="page-builder-page__title"><?php the_title(); ?></h1>
      <?php the_post_thumbnail(); ?>
      <span class="page-builder-page__content">

      <?php the_content(); ?>
    </div>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>