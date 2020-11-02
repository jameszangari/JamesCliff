var $ = jQuery.noConflict();

// DARK MODE WITH LOCAL STORAGE
$('body').toggleClass(localStorage.toggled);

function darkMode() {
  if (localStorage.toggled != 'dark') {
    $('body, p').toggleClass('dark', true);
    localStorage.toggled = "dark";
     
  } else {
    $('body, p').toggleClass('dark', false);
    localStorage.toggled = "";
  }
}
// END DARK MODE

// CHANGE ICON ON DARK MODE
$('#dark-mode-button').on('click', function(e) {
  $('.dark-desktop').toggleClass('fa-moon fa-sun');
});

$('#dark-mode-button-mobile--toggle').on('click', function(e) {
  $(this).parent().find('i').toggleClass('fa-moon fa-sun');
});
// END ICON CHANGE

// MOBILE NAVIGATION
var hamburger = $('.hamburger');
$('.hamburger-box').on("click", function(e) {
  hamburger.toggleClass('is-active');
  $('.header_navigation_menu_mobile').toggle();
  $('html').toggleClass('hidden');   
});
// END MOBILE NAVIGATION