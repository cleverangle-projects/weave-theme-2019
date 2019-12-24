(function($) {
  $('#hamburger-btn').on('click', function() {
    $(this).toggleClass('open');
  });

  $('nav a').on('click', function() {
    $('#hamburger-btn').removeClass('open');
  })
})( jQuery );