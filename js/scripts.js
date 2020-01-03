(function($) {

  console.log(window.location.href);
  $('#hamburger-btn').on('click', function() {
    $(this).toggleClass('open');
  });

  $('nav a').on('click', function() {
    $('#hamburger-btn').removeClass('open');
  });

  $(document).ready(function() {
    var wow = new WOW(
        {
          boxClass:     'wow',      // animated element css class (default is wow)
          animateClass: 'animated', // animation css class (default is animated)
          offset:       0,          // distance to the element when triggering the animation (default is 0)
          mobile:       false,       // trigger animations on mobile devices (default is true)
          live:         true,       // act on asynchronously loaded content (default is true)
          callback:     function(box) {
            // the callback is fired every time an animation is started
            // the argument that is passed in is the DOM node being animated
          },
          scrollContainer: null // optional scroll container selector, otherwise use window
        }
    );
    wow.init();
    var mejs_players = new Array();
    var player;

    $('video#video-background').each(function() {
      $(this).controls = false;
      player = $(this)[0].player;
      player.remove();
    });

    // var players = document.querySelectorAll("video[id^='video-background']");
    // if (players.length > 0) {
    //   console.log(players[0]);
    // }

  });



  $('body.home').addClass('is-loading');
  var video = document.getElementById('video-background');
  video.defaultPlaybackRate = 0.66;
  var req = new XMLHttpRequest();
  req.open('GET', 'https://hattww.s3-us-west-2.amazonaws.com/videos/Weavers+Loop.mp4', true);
  req.responseType = 'blob';

  req.onload = function() {
    $('body.home').addClass('has-loaded');
    $('#we-are-weavers').addClass('has-video');

    // Onload is triggered even on 404
    // so we need to check the status code
    if (this.status === 200) {

      var videoBlob = this.response;
      var vid = URL.createObjectURL(videoBlob); // IE10+
      // Video is now downloaded
      // and we can set it as source on the video element
      video.src = vid;
      setTimeout(function() {
        $('body').removeClass('is-loading');

        video.play();
      }, 500);
    }
  }
  req.timeout = 20000; // Set timeout to 4 seconds (4000 milliseconds)
  req.ontimeout = function () {
    // alert("Timed out!!!");
    $('.background-video-container').hide();
    $('body').removeClass('is-loading');
  };
  req.onerror = function() {

    // Error
  }

  req.send();

})( jQuery );

// function iframeURLChange(iframe, callback) {
//   var unloadHandler = function () {
//     // Timeout needed because the URL changes immediately after
//     // the `unload` event is dispatched.
//     setTimeout(function () {
//       callback(iframe.contentWindow.location.href);
//       console.log(iframe.contentWindow.location.href);
//     }, 0);
//   };
//
//   function attachUnload() {
//     // Remove the unloadHandler in case it was already attached.
//     // Otherwise, the change will be dispatched twice.
//     iframe.contentWindow.removeEventListener("unload", unloadHandler);
//     iframe.contentWindow.addEventListener("unload", unloadHandler);
//   }
//
//   iframe.addEventListener("load", attachUnload);
//   attachUnload();
// }
//
// iframeURLChange(document.getElementById("front-signup"), function (newURL) {
//   console.log("URL changed:", newURL);
// });

let win = window.frames.example;

function resizeIframe(obj) {
  // alert(obj.contentWindow.location.pathname);
}

window.addEventListener("message", function(event) {
  console.log('logging iframe messages');

  // if (event.origin + '/' !== window.location.href && event.origin !== 'https://player.vimeo.com') {
  //   console.log(event.origin);
  //   return;
  // }

  // console.log(document.getElementById("front-signup").contentDocument.referrer);


  // alert( "received: " + event.data );

  // can message back using event.source.postMessage(...)
});
// req.open('GET', 'https://hattww.s3-us-west-2.amazonaws.com/videos/Weavers+Loop.mp4', true);




