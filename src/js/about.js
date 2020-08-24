var aboutEvents = new aboutEvent();

function aboutEvent() {
  parallax();
}

function parallax() {
  const
  target = $('.js-parallax'),
  interval = 10;

  $(window).on('load scroll', _.debounce(function() {

    var
    pScroll = $(window).scrollTop(),
    elemTop = target.offset().top,
    windowHeight = $(window).height();

    if (pScroll > elemTop - windowHeight){
      if (!target.hasClass('is-active')) {
        target.addClass('is-active');
      }
    }
    else if(pScroll > elemTop - windowHeight / 2) {
      target.removeClass('is-active');
    }
  },interval));
}