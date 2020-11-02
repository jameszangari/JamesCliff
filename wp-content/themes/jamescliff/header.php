
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title><?php wp_title(' '); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header">
<?php
      $headerlogo = get_field('logo-favicon', 'option');
  ?>
    <div class="header_navigation">
    <a href="<?php echo get_site_url(); ?>" class="header_logo_link">
        <img src="<?php echo $headerlogo["url"]; ?>" alt="<?php echo $headerlogo["alt"]; ?>">
    </a>   
        <div class="header_navigation_menu">
            <?php wp_nav_menu(['theme_location' => 'primary_menu', 'container' => false]); ?>
            <i class="fas fa-moon dark-desktop" id="dark-mode-button" onclick="darkMode()"></i>
        </div>
    <button class="hamburger hamburger--3dy" type="button">
        <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
    </button>

    </div>
    <div class="header_navigation_menu_mobile">
        <?php wp_nav_menu(['theme_location' => 'primary_menu', 'container' => false]); ?>
        <span id="dark-mode-button-mobile--toggle">
        <div class="dark-mode-swtich-mobile" onclick="darkMode()">
            <i class="fas fa-moon dark-mobile" id="dark-mode-button-mobile"></i>
            <p class="u-paragraph">Dark Mode</p>
        </div>
        </span>
    </div>
</header>