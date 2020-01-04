(function($) {

  console.log(window.location.href);
  $('#hamburger-btn').on('click', function() {
    $(this).toggleClass('open');
  });

  $('nav a').on('click', function() {
    $('#hamburger-btn').removeClass('open');
  });

  $('#be-a-weaver .weave-button').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: $('#newsletter-signup').offset().top - 100
    }, 750)
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
          },
          scrollContainer: null
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

    let win = window.frames.salesforce;
    console.log('frame:' + win.name );

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
  req.timeout = 20000;
  req.ontimeout = function () {
    $('.background-video-container').hide();
    $('body').removeClass('is-loading');
  };
  req.onerror = function() {
    // Error
  }
  req.send();

  // More Stories
  let shownLinks = 4,
      pageLink = $('.page-links > .page-link');

  $('.box-type-about_box .weave-button').on('click', function(e) {
    e.preventDefault();


    $('.page-links > .page-link:nth-of-type(' + (shownLinks++) + ')').addClass('incoming').css('display','flex');
    $('.page-links > .page-link:nth-of-type(' + (shownLinks++) + ')').addClass('incoming').css('display','flex');
    $('.page-links > .page-link:nth-of-type(' + (shownLinks++) + ')').addClass('incoming').css('display','flex');

    $('.page-links').addClass('loading-new');

    setTimeout(function(){
      pageLink.removeClass('incoming');
      $('.page-links').removeClass('loading-new');
    }, 4000)

    if ( shownLinks > pageLink.length) {
      $(this).hide();
    }
  });


})( jQuery );



function reloadIframe(obj) {
  let win = window.frames.salesforce;
  console.log('frame:' + win.name );
  win.onbeforeunload = function(event) {
    let frame = document.getElementById("signup"),
        frameHeight = frame.offsetHeight,
        success = document.getElementById("successful-signup");
    frame.style.visibility = "hidden";
    frame.style.display = "none";

    success.style.height = frameHeight + 'px';

    setTimeout(function() {
      success.style.opacity = 1;
    }, 1250);
  }
}

window.addEventListener("message", function(event) {
  console.log('logging iframe messages');
});




