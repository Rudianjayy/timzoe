(function($) {

  "use strict";

  /*
  |--------------------------------------------------------------------------
  | Template Name: Lala
  | Author: Laralink
  | Version: 1.0.0
  |--------------------------------------------------------------------------
  |--------------------------------------------------------------------------
  | TABLE OF CONTENTS:
  |--------------------------------------------------------------------------
  |
  | 1. Preloader
  | 2. Mobile Menu
  | 3. Sticky Header
  | 4. Dynamic Background
  | 5. Select2
  | 6. Datepicker
  | 7. Overlay
  | 8. Slick Slider
  | 9. Isotop Initialize
  | 10. Review
  | 11. Light Gallery
  | 12. Modal Video
  | 13. Hobble Effect
  | 14. Parallax
  | 15. Countdown
  | 16. Tabs
  | 17. Accordian
  | 18. Progress Bar
  | 19. CountDown
  | 20. Ripple
  | 21. Smooth Move
  | 22. Scroll Up
  |
  */

  /*--------------------------------------------------------------
    Scripts initialization
  --------------------------------------------------------------*/
  $.exists = function(selector) {
    return $(selector).length > 0;
  };

  $(window).on("load", function() {
    $(window).trigger("scroll");
    $(window).trigger("resize");
    isotopInit();
    preloader();
  });

  $(document).on("ready", function() {
    $(window).trigger("resize");
    mainNav();
    stickyHeader();
    dynamicBackground();
    smoothMove();
    select2();
    uiDatepicker();
    overlay();
    slickInit();
    isotopInit();
    review();
    lightGalleryInit();
    modalVideo();
    hobbleEffect();
    parallaxEffect();
    counterInit();
    tabs();
    accordian();
    progressBar();
    countDown();
    rippleInit();
    scrollUp();
    new WOW().init();
  });

  $(window).on("resize", function() {
    isotopInit();
  });

  $(window).on("scroll", function() {
    stickyHeader();
    parallaxEffect();
    counterInit();
  });

  /*--------------------------------------------------------------
    1. Preloader
  --------------------------------------------------------------*/
  function preloader() {
    $(".cs-preloader__in").fadeOut();
    $(".cs-preloader").delay(150).fadeOut("slow");
  }

  /*--------------------------------------------------------------
    2. Mobile Menu
  --------------------------------------------------------------*/
  function mainNav() {
    $('.cs-nav').append('<span class="cs-munu__toggle"><span></span></span>');
    $('.menu-item-has-children').append('<span class="cs-munu__dropdown__toggle"></span>');
    $('.cs-munu__toggle').on('click', function() {
      $(this).toggleClass("cs-toggle__active").siblings('.cs-nav__list').slideToggle();;
    });
    $('.cs-munu__dropdown__toggle').on('click', function() {
      $(this).toggleClass('active').siblings('ul').slideToggle();
    });
    $('.cs-burger__btn, .cs-close').on('click', function() {
      $('.cs-nav').toggleClass('active');
    })
    // Mega Menu
    $('.cs-mega-wrapper>li>a').removeAttr("href");
  }

  /*--------------------------------------------------------------
    3. Sticky Header
  --------------------------------------------------------------*/
  function stickyHeader() {
    var scroll = $(window).scrollTop();
    if (scroll >= 10) {
      $('.cs-sticky-header').addClass('cs-sticky-active');
    } else {
      $('.cs-sticky-header').removeClass('cs-sticky-active');
    }
    // Scroll Up
    if (scroll >= 350) {
      $("#cs-scrollup").addClass("scrollup-show");
    } else {
      $("#cs-scrollup").removeClass("scrollup-show");
    }
  }

  /*--------------------------------------------------------------
    4. Dynamic Background
  --------------------------------------------------------------*/
  function dynamicBackground() {
    $('[data-src]').each(function() {
      var src = $(this).attr('data-src');
      $(this).css({
        'background-image': 'url(' + src + ')'
      });
    });
  }

  /*--------------------------------------------------------------
    5. Select2
  --------------------------------------------------------------*/
  function select2() {
    if ($.exists('.cs-select')) {
      $(".cs-select").select2({
        placeholder: function () {
          $(this).data('placeholder');
        },
      });
    }
  }
  /*--------------------------------------------------------------
    6. Datepicker
  --------------------------------------------------------------*/
  function uiDatepicker() {
    if ($.exists('#udate')) {
      $('#udate').datepicker();
    }
  }

  /*--------------------------------------------------------------
    7. Overlay
  --------------------------------------------------------------*/
  function overlay() {
    $('[data-overlay]').each(function() {
      $(this).append('<div class="cs-overlay"></div>')
      var overlay = $(this).attr('data-overlay');
      $(this).children('.cs-overlay').css({
        'opacity': overlay
      });
    });
  }

  /*--------------------------------------------------------------
    8. Slick Slider
  --------------------------------------------------------------*/
  function slickInit() {
    if ($.exists('.cs-slider')) {
      $('.cs-slider').each(function() {
        // Slick Variable
        var $ts = $(this).find('.cs-slider__container');
        var $slickActive = $(this).find('.cs-slider__wrapper');
        var $sliderNumber = $(this).siblings('.slider-number');

        // Auto Play
        var autoPlayVar = parseInt($ts.attr('data-autoplay'), 10);
        // Auto Play Time Out
        var autoplaySpdVar = 3000;
        if (autoPlayVar > 1) {
          autoplaySpdVar = autoPlayVar;
          autoPlayVar = 1;
        }
        // Slide Change Speed
        var speedVar = parseInt($ts.attr('data-speed'), 10);
        // Slider Loop
        var loopVar = Boolean(parseInt($ts.attr('data-loop'), 10));
        // Slider Center
        var centerVar = Boolean(parseInt($ts.attr('data-center'), 10));
        // Pagination
        var paginaiton = $(this).children().hasClass('cs-pagination');
        // Slide Per View
        var slidesPerView = $ts.attr('data-slides-per-view');
        if (slidesPerView == 1) {
          slidesPerView = 1;
        }
        if (slidesPerView == 'responsive') {
          var slidesPerView = parseInt($ts.attr('data-add-slides'), 10);
          var lgPoint = parseInt($ts.attr('data-lg-slides'), 10);
          var mdPoint = parseInt($ts.attr('data-md-slides'), 10);
          var smPoint = parseInt($ts.attr('data-sm-slides'), 10);
          var xsPoing = parseInt($ts.attr('data-xs-slides'), 10);
        }
        // Fade Slider
        var fadeVar = parseInt($($ts).attr('data-fade-slide'));
        (fadeVar === 1) ? (fadeVar = true) : (fadeVar = false);

        // Slick Active Code
        $slickActive.slick({
          autoplay: autoPlayVar,
          dots: paginaiton,
          centerPadding: '0',
          speed: speedVar,
          infinite: loopVar,
          autoplaySpeed: autoplaySpdVar,
          centerMode: centerVar,
          fade: fadeVar,
          prevArrow: $(this).find('.cs-left__arrow'),
          nextArrow: $(this).find('.cs-right__arrow'),
          appendDots: $(this).find('.cs-pagination'),
          slidesToShow: slidesPerView,
          // slidesToScroll: slidesPerView,
          responsive: [{
              breakpoint: 1600,
              settings: {
                slidesToShow: lgPoint,
                // slidesToScroll: lgPoint,
              }
            },
            {
              breakpoint: 1200,
              settings: {
                slidesToShow: mdPoint,
                // slidesToScroll: mdPoint,
              }
            },
            {
              breakpoint: 992,
              settings: {
                slidesToShow: smPoint,
                // slidesToScroll: smPoint,
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: xsPoing,
                // slidesToScroll: xsPoing,
              }
            }
          ]
        });
      })
    }

    // Testimonial Slider
    $('.slider-for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      asNavFor: '.slider-nav'
    });

    $('.slider-nav').slick({
      slidesToShow: 2,
      slidesToScroll: 1,
      asNavFor: '.slider-for',
      dots: true,
      centerMode: true,
      focusOnSelect: true,
      variableWidth: true
    });

  }

  /*--------------------------------------------------------------
    9. Isotop Initialize
  --------------------------------------------------------------*/
  function isotopInit() {
    if ($.exists('.cs-isotop')) {
      $('.cs-isotop').isotope({
        itemSelector: '.cs-isotop__item',
        transitionDuration: '0.60s',
        percentPosition: true,
        masonry: {
          columnWidth: '.cs-grid__sizer'
        }
      });
      /* Active Class of Portfolio*/
      $('.cs-isotop__filter ul li').on('click', function(event) {
        $(this).siblings('.active').removeClass('active');
        $(this).addClass('active');
        event.preventDefault();
      });
      /*=== Portfolio filtering ===*/
      $('.cs-isotop__filter ul').on('click', 'a', function() {
        var filterElement = $(this).attr('data-filter');
        $(this).parents('.cs-isotop__filter').next().isotope({
          filter: filterElement
        });
      });
    }
  }

  /*--------------------------------------------------------------
    10. Review
  --------------------------------------------------------------*/
  function review() {
    $('.cs-review').each(function() {
      var review = $(this).data('review');
      var reviewVal = (review * 20) + "%";
      $(this).find('.cs-review-in').css('width', reviewVal);
    });
  }

  /*--------------------------------------------------------------
    11. Light Gallery
  --------------------------------------------------------------*/
  function lightGalleryInit() {
    $('.cs-lightgallery').each(function() {
      $(this).lightGallery({
        selector: '.cs-lightbox-item',
        subHtmlSelectorRelative: false,
        thumbnail: false,
        mousewheel: true
      });
    });
  }

  /*--------------------------------------------------------------
    12. Modal Video
  --------------------------------------------------------------*/
  function modalVideo() {
    $(document).on('click', '.cs-video__open', function(e) {
      e.preventDefault();
      var video = $(this).attr('href');
      $('.cs-video__popup__container iframe').attr('src', video);
      $('.cs-video__popup').addClass('active');

    });
    $('.cs-video__popup__close, .cs-video__popup__layer').on('click', function(e) {
      $('.cs-video__popup').removeClass('active');
      $('html').removeClass('overflow-hidden');
      $('.cs-video__popup__container iframe').attr('src', 'about:blank')
      e.preventDefault();
    });
  }


  /*--------------------------------------------------------------
    13. Hobble Effect
  --------------------------------------------------------------*/
  function hobbleEffect() {
    $(document).on('mousemove', '.cs-hobble', function(event) {
      var halfW = (this.clientWidth / 2);
      var halfH = (this.clientHeight / 2);
      var coorX = (halfW - (event.pageX - $(this).offset().left));
      var coorY = (halfH - (event.pageY - $(this).offset().top));
      var degX1 = ((coorY / halfH) * 8) + 'deg';
      var degY1 = ((coorX / halfW) * -8) + 'deg';
      var degX2 = ((coorY / halfH) * -50) + 'px';
      var degY2 = ((coorX / halfW) * 70) + 'px';
      var degX3 = ((coorY / halfH) * -7) + 'px';
      var degY3 = ((coorX / halfW) * 7) + 'px';
      var degX4 = ((coorY / halfH) * 15) + 'deg';
      var degY4 = ((coorX / halfW) * -15) + 'deg';
      var degX5 = (((coorY / halfH) * -30)) + 'px';
      var degY5 = ((coorX / halfW) * 60) + 'px';

      $(this).find('.cs-hover__layer1').css('transform', function() {
        return 'perspective( 800px ) translate3d( 0, 0, 0 ) rotateX(' + degX1 + ') rotateY(' + degY1 + ')';
      });
      $(this).find('.cs-hover__layer2').css('transform', function() {
        return 'perspective( 800px ) translateY(' + degX2 + ') translateX(' + degY2 + ')';
      });
      $(this).find('.cs-hover__layer3').css('transform', function() {
        return 'perspective( 800px ) translateX(' + degX3 + ') translateY(' + degY3 + ') scale(1.02)';
      });
      $(this).find('.cs-hover__layer4').css('transform', function() {
        return 'perspective( 800px ) translate3d( 0, 0, 0 ) rotateX(' + degX4 + ') rotateY(' + degY4 + ')';
      });
      $(this).find('.cs-hover__layer5').css('transform', function() {
        return 'perspective( 800px ) translateY(' + degX5 + ') translateX(' + degY5 + ')';
      });
    }).on('mouseout', '.cs-hobble', function() {
      $(this).find('.cs-hover__layer').removeAttr('style');
      $(this).find('.cs-hover__layer1').removeAttr('style');
      $(this).find('.cs-hover__layer2').removeAttr('style');
      $(this).find('.cs-hover__layer3').removeAttr('style');
      $(this).find('.cs-hover__layer4').removeAttr('style');
    });
  };

  /*--------------------------------------------------------------
    14. Parallax
  --------------------------------------------------------------*/
  function parallaxEffect() {
    $('.cs-bg__parallax, .cs-parallax').each(function() {
      var windowScroll = $(document).scrollTop(),
        windowHeight = $(window).height(),
        barOffset = $(this).offset().top,
        barHeight = $(this).height(),
        barScrollAtZero = windowScroll - barOffset + windowHeight,
        barHeightWindowHeight = windowScroll + windowHeight,
        barScrollUp = barOffset <= (windowScroll + windowHeight),
        barSctollDown = barOffset + barHeight >= windowScroll;

      if (barSctollDown && barScrollUp) {
        var calculadedHeight = barHeightWindowHeight - barOffset;
        var largeEffectPixel = ((calculadedHeight / 5));
        var mediumEffectPixel = ((calculadedHeight / 20));
        var miniEffectPixel = ((calculadedHeight / 10));

        $(this).find('.cs-to__left').css('transform', `translateX(-${miniEffectPixel}px)`);
        $(this).find('.cs-to__right').css('transform', `translateX(${miniEffectPixel}px)`);
        $(this).find('.cs-to__up').css('transform', `translateY(-${miniEffectPixel}px)`);
        $(this).find('.cs-to__down').css('transform', `translateY(${miniEffectPixel}px)`);
        $(this).find('.cs-to__right__up').css('transform', `translate(${miniEffectPixel}px, -${miniEffectPixel}px)`);
        $(this).find('.cs-to__left__up').css('transform', `translate(-${miniEffectPixel}px, -${miniEffectPixel}px)`);
        $(this).find('.cs-to__rotate').css('transform', `rotate(${miniEffectPixel}deg)`);
        $(this).find('.cs-to__rotate__up').css({'transform': `rotate(-${mediumEffectPixel}deg)`, "margin-top": `-${largeEffectPixel}px`});
        $(this).css('background-position', `center -${largeEffectPixel}px`);
      }
    });
  }

  /*--------------------------------------------------------------
    15. Countdown
  --------------------------------------------------------------*/
  function counterInit() {
    if ($.exists('.odometer')) {
      $(window).on('scroll', function() {
        function winScrollPosition() {
          var scrollPos = $(window).scrollTop(),
            winHeight = $(window).height();
          var scrollPosition = Math.round(scrollPos + (winHeight / 1.2));
          return scrollPosition;
        }
        var scrollPos = $(this).scrollTop();
        var elemOffset = $('.odometer').offset().top;
        var winHeight = $(window).height();

        if (elemOffset < winScrollPosition()) {

          $('.odometer').each(function() {
            $(this).html($(this).data('count-to'));
          });
        }
      });
    }
  }

  /*--------------------------------------------------------------
    16. Tabs
  --------------------------------------------------------------*/
  function tabs() {
    $('.cs-tabs.cs-fade__tabs .cs-tab__links a').on('click', function(e) {
      var currentAttrValue = $(this).attr('href');
      $('.cs-tabs ' + currentAttrValue).fadeIn(400).siblings().hide();
      $(this).parents('li').addClass('active').siblings().removeClass('active');
      e.preventDefault();
    });
  }

  /*--------------------------------------------------------------
    17. Accordian
  --------------------------------------------------------------*/
  function accordian() {
    var $this = $(this);
    $('.cs-accordian').children('.cs-accordian-body').hide();
    $('.cs-accordian.active').children('.cs-accordian-body').show();
    $('.cs-accordian__head').on('click', function() {
      $(this).parent('.cs-accordian').siblings().children('.cs-accordian-body').slideUp(250);
      $(this).siblings().slideDown(250);
      /* Accordian Active Class */
      $(this).parents('.cs-accordian').addClass('active');
      $(this).parent('.cs-accordian').siblings().removeClass('active');
    });
  }

  /*--------------------------------------------------------------
    18. Progress Bar
  --------------------------------------------------------------*/
  function progressBar() {
    $('.cs-progress').each(function() {
      var progressPercentage = $(this).data('progress') + "%";
      $(this).find('.cs-progress__in').css('width', progressPercentage);
    });
  }

  /*--------------------------------------------------------------
    19. CountDown
  --------------------------------------------------------------*/
  function countDown() {
    if ($.exists('.cs-countdown')) {
      $('.cs-countdown').each(function() {
        var _this = this;
        var el = $(_this).data('countdate');
        var countDownDate = new Date(el).getTime();
        var x = setInterval(function() {
          var now = new Date().getTime();
          var distance = countDownDate - now;
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor(distance % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
          var minutes = Math.floor(distance % (1000 * 60 * 60) / (1000 * 60));
          var seconds = Math.floor(distance % (1000 * 60) / 1000);
          $(_this).find('#cs-count-days').html(days);
          $(_this).find('#cs-count-hours').html(hours);
          $(_this).find('#cs-count-minutes').html(minutes);
          $(_this).find('#cs-count-seconds').html(seconds);

          if (distance < 0) {
            clearInterval(x);
            $(_this).html("<div class='cs-token__expired'>TOKEN EXPIRED<div>");
          }
        }, 1000);
      });
    }
  }

  /*--------------------------------------------------------------
    20. Ripple
  --------------------------------------------------------------*/
  function rippleInit() {
    if ($.exists('.cs-ripple__version')) {
      $('.cs-ripple__version').each(function () {
        $('.cs-ripple__version').ripples({
          resolution: 512,
          dropRadius: 20,
          perturbance: 0.04,
        });
      });
    }
  }

  /*--------------------------------------------------------------
    21. Smooth Move
  --------------------------------------------------------------*/
  function smoothMove() {
    if ($.exists('.cs-smooth__move')) {
      $('.cs-smooth__move').on('click', function() {
        var thisAttr = $(this).attr('href');
        if ($(thisAttr).length) {
          var scrollPoint = $(thisAttr).offset().top;
          $('body,html').animate({
            scrollTop: scrollPoint
          }, 800);
        }
        return false;
      });
    }
  }

  /*--------------------------------------------------------------
    22. Scroll Up
  --------------------------------------------------------------*/
  function scrollUp() {
    $('#cs-scrollup').on('click', function(e) {
      e.preventDefault();
      $('html,body').animate({
        scrollTop: 0
      }, 1000);
    });

  }

})(jQuery); // End of use strict
