import {debounce} from "./lodash";

var events = new commonEvent();

function commonEvent(){
  stickyHeader();
  drawerControl();
  anchorLink();
}

function drawerControl(){
  let interval = 50;
  $(window).on('load resize', _.debounce(function() {
  let
  win_w = $(window).width(),
  bp = 900;

    if (win_w < bp) {
      drawer();
    }
    else {
      $('.header__nav').removeAttr('style').removeClass('js-nav-open');
      $('.header__nav_hamburger').removeClass('js-nav-trigger');
    }
  }, interval));
}

// --------------------------------------- drawer
function drawer(){
    let
    $trigger = $('.h_nav__hamburger'),
    $headerNav = $('.h_nav'),
    $navlinks = $('.h_nav__link');

    $trigger.off('click');
    $trigger.on('click', function() {
      let checkClass = $trigger.hasClass('js-nav-trigger');

      if (!checkClass) {
        $(this).addClass('js-nav-trigger');
        $headerNav.addClass('js-nav-open').fadeIn(200);
      }

      else if (checkClass){
        $(this).removeClass('js-nav-trigger')
        $.when(
          $headerNav.fadeOut(200)
        ).done(function() {
          $headerNav.removeClass('js-nav-open')
        });
      }
    });

    $navlinks.on('click', function() {
      let checkClass = $trigger.hasClass('js-nav-trigger');

      if (checkClass) {
        $.when(
          $headerNav.fadeOut(200),
          $trigger.removeClass('js-nav-trigger')
        ).done(function() {
          $headerNav.removeClass('js-nav-open')
        });
      }
    });
}

function anchorLink() {
  $("a[href*='#']").on('click', function () {
    const speed = 700;
    const href= $(this).attr("href").split('#')[1];
    const headerY = $('.header').outerHeight();
    const $target = $('#'+href);
    if(!$target.length){return;}
    const position = $target.offset().top - headerY;
    $("html, body").animate({
      scrollTop:position
    }, speed, "swing");
    return false;
  });
}

// ------------------------------------------------- sticky header
function stickyHeader(){
  let
  target = $(".js-sticky");

  if(target.hasClass('is-sticky')) {
    target.removeClass('is-sticky');
  }

  $(window).on('load', function() {
    let
    bp = 960,
    interval = 10;

    $(window).on('resize scroll', _.debounce(function() {
      let
      scroll = $(window).scrollTop(),
      w = window.innerWidth;// スクロールバーを含めた横幅

      // PCサイズ時
      if (w > bp) {
        const
        // h_top = target.offset().top,
        h = $('main').offset().top;

        $(".js-h-box").height(0);

        // mainより大きかったら
        if(scroll > h) {
					target.addClass('is-sticky');
        }
        else {
          target.removeClass('is-sticky');
        }
      }

      // スマホサイズ時
      else if(w < bp) {
        const
        // h_top_sp  = target.offset().top,
        h_sp = target.outerHeight();

        if(scroll > h_sp) {
          target.addClass('is-sticky');
        }
        else {
          target.removeClass('is-sticky');
        }
      }
    },interval));
  });
}