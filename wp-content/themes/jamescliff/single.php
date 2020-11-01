<?php get_header();?>
<main class="main-content">
  <?php while (have_posts()) : the_post(); ?>
    <div class="page-builder-posts">
      <h1 class="page-builder-posts--title u-heading-1"><?php the_title(); ?></h1>
      <?php $posttags = get_the_tags(); ?>
      <?php if ($posttags) { foreach($posttags as $tag) { ?>
        <h3 class="page-builder-posts--tag u-heading-3"><?php echo $tag->name . ' '; ?></h3>
      <?php } ?>
      <?php } ?>
      <?php the_content(); ?>
    </div>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>