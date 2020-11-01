<?php get_header();?>
<?php if (have_posts()): ?>
<main class="main-content">
  <div class="page-builder-front">
  <?php while (have_posts()) : the_post(); ?>
  <?php the_content(); ?>

  <?php
      $logo = get_field('fp_logo');
      $name = get_field('fp_name');
      $title1 = get_field('fp_title_1');
      $title2 = get_field('fp_title_2');
      $role1 = get_field('fp_role_1');
      $role2 = get_field('fp_role_2');
  ?>
  <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['title']; ?>" class="fp-logo">
  <h1 class="fp-name u-heading-1"><?php echo $name; ?></h1>
  <h2 class="fp-sub-roles u-heading-2"><?php echo $title1; ?>
    <a class="fp-role-1" href="<?php echo $role1['url']; ?>" target="<?php echo $role1['target']; ?>"><?php echo $role1['title']; ?></a>
  </h2>
  <h2 class="fp-sub-roles u-heading-2"><?php echo $title2; ?>
    <a class="fp-role-2" href="<?php echo $role2['url']; ?>" target="<?php echo $role2['target']; ?>"><?php echo $role2['title']; ?></a>
  </h2>

  <?php if( have_rows('fp_socials') ): ?>
    <?php while( have_rows('fp_socials') ): the_row(); 

      $email = get_sub_field('email', 'option');
      $github = get_sub_field('github', 'option');
      $instagram = get_sub_field('instagram', 'option');
      $twitter = get_sub_field('twitter', 'option');
      $spotify = get_sub_field('spotify', 'option');
      $twitch = get_sub_field('twitch', 'option');
  ?>

  <div class="fp-social-icons">
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

  <?php endwhile; ?>
  </div>
</main>
  <?php endif; ?>
<?php get_footer(); ?>