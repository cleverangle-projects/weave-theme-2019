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

    $('video#video-background').each(function() {
      $(this).controls = false;
      player = $(this)[0].player;
      console.log($(this));

      player.remove();
    });
  });
})( jQuery );