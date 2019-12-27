(function($) {
  $('#hamburger-btn').on('click', function() {
    $(this).toggleClass('open');
  });

  $('nav a').on('click', function() {
    $('#hamburger-btn').removeClass('open');
  });

  $(document).ready(function() {
    var mejs_players = new Array();
    var player;
    $('video').each(function() {
      player = $(this)[0].player;
      player.remove();
    });
  });
})( jQuery );