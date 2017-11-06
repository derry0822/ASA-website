var main = function(){
  var scroll = new SmoothScroll('a[href*="#"]', {
    speed: 1000,
    offset: 0
  });

  $('#header h1').show('fade', 2000);
}

$(document).ready(main);
