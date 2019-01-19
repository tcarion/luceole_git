
//Cette fonction étend le texte d'un article.
function toggleSeeMore(article_id, see_more_id) {
  if(document.getElementById(article_id).style.display == 'none') {
    document.getElementById(article_id).style.display = 'block';
    document.getElementById('seeMore'.concat(see_more_id)).innerHTML = 'See Less';
  }
  else {
    document.getElementById(article_id).style.display = 'none';
    document.getElementById('seeMore'.concat(see_more_id)).innerHTML = 'See Less';
  }
}

// 2. This code loads the IFrame Player API code asynchronously.
var tag = document.createElement('script');
tag.src = "http://www.youtube.com/player_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// 3. This function creates an <iframe> (and YouTube player)
//    after the API code downloads.
var player;
function onYouTubePlayerAPIReady() {
  player = new YT.Player('player', {
    height: '400',
    width: '100%',
    videoId: 'PXuuN-zgEWA',
    events: {
      //'onReady': onPlayerReady,
      'onStateChange': onPlayerStateChange
    }
  });
}

var myPlayerState;
function onPlayerStateChange(event) {
  switch(event.data) {
    case 1:
    $('#homeCarousel').carousel('pause');
    break;
    case 2:
    $('#homeCarousel').carousel({pause: "hover"});
  }
  myPlayerState = event.data;
}

// $('.video_mask').click(function(){
//    iframe = $(this).closest('.carousel-item').find('iframe');
//    iframe_source = iframe.attr('src');
//    iframe_source = iframe_source + "?autoplay=1"
//    iframe.attr('src', iframe_source);
//    // hide the mask
//    $(this).toggle();
//    // stop the slideshow
//    $('#homeCarousel').carousel('pause');
//  });
//
//  $('#homeCarousel').on('slide', function(){
//    var iframeID = getID($(this).find('iframe').attr("id"));
//    // stop iframe from playing
//    if(iframeID != undefined){
//      callPlayer(iframeID, 'stopVideo');
//    }
//    // turn on all masks
//    $('.video_mask').show();
//    // reset src of all videos
//    $('#homeCarousel').find('iframe').each(function(key, value){
//      url = $(this).attr('src');
//      if(url.indexOf("autoplay")>0){
//        new_url = url.substring(0, url.indexOf("?"));
//        $(this).attr('src', new_url);
//      }
//    });
// });
