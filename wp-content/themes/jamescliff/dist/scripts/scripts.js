var $ = jQuery.noConflict();

// DARK MODE WITH LOCAL STORAGE
$('body').toggleClass(localStorage.toggled);

function darkMode() {
  if (localStorage.toggled != 'dark') {
    $('body, p').toggleClass('dark', true);
    localStorage.toggled = "dark";

    // Toggle moon/sun desktop
    $('.dark-desktop').addClass('fa-sun');
    $('.dark-desktop').removeClass('fa-moon');

    // Toggle moon/sun mobile
    $('#dark-mode-button-mobile--toggle').on('click', function(e) {
      $(this).parent().find('i').addClass('fa-sun');
      $(this).parent().find('i').removeClass('fa-moon');
    });

  } else {
    $('body, p').toggleClass('dark', false);
    localStorage.toggled = "";

    // Toggle moon/sun desktop
    $('.dark-desktop').addClass('fa-moon');
    $('.dark-desktop').removeClass('fa-sun');
    
    // Toggle moon/sun mobile
    $('#dark-mode-button-mobile--toggle').on('click', function(e) {
      $(this).parent().find('i').addClass('fa-moon');
      $(this).parent().find('i').removeClass('fa-sun');
    });
  }
}

// MOBILE NAVIGATION
var hamburger = $('.hamburger');
$('.hamburger-box').on("click", function(e) {
  hamburger.toggleClass('is-active');
  $('.header_navigation_menu_mobile').toggle();
  $('html').toggleClass('hidden');   
});
// END MOBILE NAVIGATION