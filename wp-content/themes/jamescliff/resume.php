<?php
/*
 * Template Name: Resume
 * Template Post Type: post
 */
?>
<?php get_header();?>
<main class="main-content">
  <?php while (have_posts()) : the_post(); ?>
    <div class="page-builder-resume">
      <h1 class="page-builder-resume--title u-heading-1"><?php the_title(); ?></h1>

      <?php if( have_rows('resume_socials') ): ?>
        <?php while( have_rows('resume_socials') ): the_row(); 

          $email = get_sub_field('email', 'option');
          $github = get_sub_field('github', 'option');
          $instagram = get_sub_field('instagram', 'option');
          $twitter = get_sub_field('twitter', 'option');
          $spotify = get_sub_field('spotify', 'option');
          $twitch = get_sub_field('twitch', 'option');
      ?>

      <div class="r-social-icons">
        <?php if($email) : ?>
          <a href="mailto:<?php echo $email ?>" target="_blank noopener noreferrer"><i class="fas fa-envelope"></i></a>
        <?php endif; ?>
        <?php if($github) : ?>
          <a href="<?php echo $github["url"]; ?>" target="<?php echo $github["target"]; ?>"><i class="fab fa-github"></i></a>
        <?php endif; ?>
        <?php if($instagram) : ?>
          <a href="<?php echo $instagram["url"]; ?>" target="<?php echo $instagram["target"]; ?>"><i class="fab fa-instagram"></i></a>
        <?php endif; ?>
        <?php if($twitter) : ?>
          <a href="<?php echo $twitter["url"]; ?>" target="<?php echo $twitter["target"]; ?>"><i class="fab fa-twitter"></i></a>
        <?php endif; ?>
        <?php if($spotify) : ?>
          <a href="<?php echo $spotify["url"]; ?>" target="<?php echo $spotify["target"]; ?>"><i class="fab fa-spotify"></i></a>
        <?php endif; ?>
        <?php if($twitch) : ?>
          <a href="<?php echo $twitch["url"]; ?>" target="<?php echo $twitch["target"]; ?>"><i class="fab fa-twitch"></i></a>
        <?php endif; ?>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>

      <?php $posttags = get_the_tags(); ?>
      <?php if ($posttags) { foreach($posttags as $tag) { ?>
        <h3 class="page-builder-resume--tag u-heading-3"><?php echo $tag->name . ' '; ?></h3>
      <?php } ?>
      <?php } ?>
      <?php the_content(); ?>
    </div>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>