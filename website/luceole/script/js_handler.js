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

$( document ).ready(function() {
  $('.card .card-header h6').click(function() {
    $(this).find('i').toggleClass('fa fa-toggle-down');
    $(this).find('i').toggleClass('fa fa-toggle-right');
  });
});
