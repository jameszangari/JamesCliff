<footer>
    <?php
      $copyright = get_field('footer_copyright', 'option');
      $email = get_field('email_footer', 'option');
      $github = get_field('github_footer', 'option');
      $instagram = get_field('instagram_footer', 'option');
      $twitter = get_field('twitter_footer', 'option');
      $spotify = get_field('spotify_footer', 'option');
      $twitch = get_field('twitch_footer', 'option');
    ?>
    <p class="u-paragraph"><?php echo $copyright ;?></p>
    <div class="fp-social-icons-footer">
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

</footer>
<?php wp_footer(); ?>
</body>
</html>