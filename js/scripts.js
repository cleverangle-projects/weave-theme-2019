(function($) {
  console.log(window.location.href);
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

function iframeURLChange(iframe, callback) {
  var unloadHandler = function () {
    // Timeout needed because the URL changes immediately after
    // the `unload` event is dispatched.
    setTimeout(function () {
      callback(iframe.contentWindow.location.href);
    }, 0);
  };

  function attachUnload() {
    // Remove the unloadHandler in case it was already attached.
    // Otherwise, the change will be dispatched twice.
    iframe.contentWindow.removeEventListener("unload", unloadHandler);
    iframe.contentWindow.addEventListener("unload", unloadHandler);
  }

  iframe.addEventListener("load", attachUnload);
  attachUnload();
}

iframeURLChange(document.getElementById("front-signup"), function (newURL) {
  console.log("URL changed:", newURL);
});


window.addEventListener("message", function(event) {
  if (event.origin + '/' !== window.location.href && event.origin !== 'https://player.vimeo.com') {
    console.log(event.origin);
    return;
  }

  // alert( "received: " + event.data );

  // can message back using event.source.postMessage(...)
});