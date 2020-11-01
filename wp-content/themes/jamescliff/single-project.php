<?php get_header();?>
<main class="main-content">
  <?php while (have_posts()) : the_post(); ?>
    <?php the_post_thumbnail('full', array('class' => 'project-hero-image')); ?>
      <div class="page-builder-project">
        <h1 class="page-builder-project--title u-heading-1"><?php the_title(); ?></h1>

        <?php $posttags = get_the_tags(); ?>
          <?php if ($posttags) { foreach($posttags as $tag) { ?>
            <h3 class="page-builder-project--tag u-heading-3"><?php echo $tag->name . ' '; ?></h3>
          <?php } ?>
        <?php } ?>

        <?php $p_desc = get_field('p_project_description'); ?>
        <?php if ($p_desc) : ?>
          <p class="page-builder-project--desc"><?php echo $p_desc; ?></p>
        <?php endif; ?>

        <?php the_content(); ?>
      </div>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>