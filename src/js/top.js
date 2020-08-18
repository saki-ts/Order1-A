import picturefill from "picturefill";
import simpleParallax from 'simple-parallax-js';
import Swiper from 'swiper';

var topEvents = new topEvent();

function topEvent() {
  parallaxEvent();
  slider();
  topFadeIn();
}

// --------------------------------------- parallax
function parallaxEvent(){
  let interval = 50;
  parallax();
  $(window).on('load resize', _.debounce(function() {
    parallax();
  }, interval));
}

function parallax(){
	var image = document.getElementsByClassName('js-parallax');
  new simpleParallax(image, {
    delay: 0.1,
    transition: 'linear',
		// scale: 1.2
  });
}

// --------------------------------------- fade in event
function topFadeIn() {
  const APP = (window.APP = window.APP || {});

  APP.SetFadeEffect = function($elm) {
      const that = this;
      that.$elm = $elm;
      that.offset = 0.8;
      that.ACTIVE = 'active';

      that.fade();
      $(window).on('scroll resize', function() {
          that.fade();
      });
  };

  APP.SetFadeEffect.prototype = {
      fade: function() {
          const that = this;
          const st = $(window).scrollTop();
          const wh = $(window).height();
          const targetPoint = that.$elm.offset().top - parseInt(that.$elm.css('transform').match(/[0-9]+/g)[5]);
          const startPoint = Math.floor(targetPoint - wh * that.offset);
          const endPoint = Math.floor(targetPoint + wh * (1 - that.offset));

          if (
              st >= startPoint &&
              st <= endPoint &&
              !that.$elm.hasClass(that.ACTIVE)
          ) {
              setTimeout(function() {
                  that.$elm.addClass(that.ACTIVE);
              }, 100);
          }
      }
  };

  $(function() {
      $('.js-fadein').each(function() {
          new APP.SetFadeEffect($(this));
      });
  });
}

// --------------------------------------- スライダー
function slider() {
  window.onload = function (){
    // first view
    setTimeout(function() {
      var slider1 = new Swiper('.fv-swiper-container', {
        autoplay: {
          delay: 3500
        },
        loop: true,
        effect: 'fade',
        fadeEffect: { crossFade: true },
        speed:1000,
        slidesPerView: 1,
        pagination: false
      });
    }, 1000);

    // works
    var slider2 = new Swiper('.works-siwper-container', {
      autoplay: {
        delay: 3000
      },
      loop: false,
      navigation: {
        nextEl: '.js-swiper-next',
        prevEl: '.js-swiper-prev',
      },
      speed:850,
      slidesPerView: 1,
      spaceBetween: 30,
      pagination: false
    });
  }
}