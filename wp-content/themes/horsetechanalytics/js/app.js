(function ($) {
  "use strict";

  $(function () {
    //Data Background Set
    $('[data-background]').each(function () {
      $(this).css('background-image', 'url(' + $(this).attr('data-background') + ')');
    }); //ScrollTop 

    $(".scrolltop-btn").on("click", function () {
      $("body,html").animate({
        scrollTop: 0
      });
    }); //Mobile Menu 

    $(".mobile-menu-toggle").on("click", function () {
      $(".body-overlay").addClass('overlay-on');
      $(".mobile-menu").addClass("active");
    });
    $(".close-menu").on("click", function () {
      $(".mobile-menu").removeClass("active");
      $(".body-overlay").removeClass("overlay-on");
    });
    $(".body-overlay").on("click", function () {
      $(".mobile-menu").removeClass("active");
      $(this).removeClass("overlay-on");
    });
    $(".mobile-menu ul li.has-submenu a").each(function () {
      $(this).on("click", function () {
        $(this).siblings('ul').slideToggle();
        $(this).toggleClass("icon-rotate");
      });
    }); //Canvus Menu 

    $(".ofcanvus-btn").on("click", function () {
      $(".ofcanvus-menu").addClass("active");
      return false;
    });
    $(".close-canvus").on("click", function () {
      $(".ofcanvus-menu").removeClass("active");
      return false;
    }); // Hide ofcanvus when click outside it.

    $(document).on("mouseup", function (e) {
      const ofcanvusMenu = $(".ofcanvus-menu");

      if (!ofcanvusMenu.is(e.target) && ofcanvusMenu.has(e.target).length === 0) {
        ofcanvusMenu.removeClass("active");
      }
    }); //ThemeSwitcher

    var getLocalValue = localStorage.getItem("theme-mood");
    var themeSwitchBtn = document.getElementById("theme-switch");

    if (getLocalValue) {
      document.body.classList.add(getLocalValue);
    }

    themeSwitchBtn.addEventListener("click", function () {
      var bodyElement = document.body;
      bodyElement.classList.toggle("theme-dark");

      if (bodyElement.classList.contains("theme-dark")) {
        localStorage.setItem("theme-mood", "theme-dark");
      } else {
        localStorage.setItem("theme-mood", null);
      }
    });
    console.log(getLocalValue); //Pricing Table

    $(".switch-input").on("change", function () {
      if (this.checked) {
        $(".yearly-price").css({
          display: 'block'
        });
        $(".monthly-price").css({
          display: 'none'
        });
      } else {
        $(".yearly-price").css({
          display: 'none'
        });
        $(".monthly-price").css({
          display: 'block'
        });
      }
    });
    $(".expand-btn").each(function () {
      $(this).on("click", function () {
        $(this).siblings(".feature-list").toggleClass("expand-list");
        $(this).toggleClass("active");
      });
    }); //Feedback Slider 

    const swiper = new Swiper('.feedback-slider', {
      slidesPerView: 3,
      speed: 700,
      spaceBetween: 30,
      slidesPerGroup: 2,
      loop: true,
      breakpoints: {
        320: {
          slidesPerView: 1
        },
        768: {
          slidesPerView: 2
        },
        1200: {
          slidesPerView: 3
        }
      }
    });
    const blogSlider = new Swiper('.hm2-blog-slider', {
      slidesPerView: 3,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
      },
      breakpoints: {
        320: {
          slidesPerView: 1
        },
        768: {
          slidesPerView: 2
        },
        1200: {
          slidesPerView: 3
        }
      }
    });
    const brandSlider = new Swiper(".brand-slider", {
      slidesPerView: 5,
      spaceBetween: 30,
      loop: true,
      autoplay: {
        delay: 3000
      },
      breakpoints: {
        320: {
          slidesPerView: 1
        },
        400: {
          slidesPerView: 2,
          spaceBetween: 20
        },
        768: {
          slidesPerView: 3
        },
        992: {
          slidesPerView: 4,
          spaceBetween: 25
        },
        1200: {
          slidesPerView: 5,
          spaceBetween: 25
        }
      }
    });
    const productSlider = new Swiper(".gm-product-slider", {
      slidesPerView: 4,
      spaceBetween: 30,
      loop: true,
      autoplay: {
        delay: 3000
      },
      pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
      },
      breakpoints: {
        320: {
          slidesPerView: 1
        },
        768: {
          slidesPerView: 2
        },
        992: {
          slidesPerView: 3
        },
        1400: {
          slidesPerView: 4,
          spaceBetween: 25
        }
      }
    });
    const dmFeedbackSlider = new Swiper(".dm-feedback-slider", {
      slidesPerView: 3,
      spaceBetween: 24,
      loop: true,
      speed: 1500,
      autoplay: {
        delay: 5000
      },
      breakpoints: {
        320: {
          slidesPerView: 1
        },
        768: {
          slidesPerView: 2
        },
        992: {
          slidesPerView: 3
        }
      }
    });
    const vps_scripts_slider = new Swiper(".vps-scripts-slider", {
      slidesPerView: 6,
      spaceBetween: 24,
      loop: true,
      speed: 1500,
      navigation: {
        nextEl: '.swiper-next',
        prevEl: '.swiper-prev'
      },
      autoplay: {
        delay: 5000
      },
      breakpoints: {
        320: {
          slidesPerView: 1
        },
        400: {
          slidesPerView: 2
        },
        768: {
          slidesPerView: 3
        },
        992: {
          slidesPerView: 4
        },
        1200: {
          slidesPerView: 5
        },
        1400: {
          slidesPerView: 6
        }
      }
    }); //HM2 Feedback Slider 

    const hm2_feedback_slider = new Swiper(".hm2-feedback-slider", {
      slidesPerView: 1,
      spaceBetween: 24,
      loop: true,
      speed: 1500,
      autoplay: {
        delay: 5000
      }
    });
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl);
    }); //Accordion 

    $(".hm2-accordion .accordion-header a").each(function () {
      $(this).on("click", function () {
        $(this).parents(".accordion").find(".show").parents(".acoridion-item").addClass("active");
      });
    }); //Price range slider

    $(".range-slider").slider({
      min: 0,
      max: 6,
      value: 2
    });
    var rangeInput = $("#vps_range_slider input");
    var checkValue = rangeInput.val(); //vps 1 value

    if (checkValue <= 1) {
      $(".vps_value").hide();
      $(".vps_1_value").show();
      $(".vps_label").removeClass("active");
      $(".vps_label_1").addClass("active");
    } else if (checkValue <= 2) {
      $(".vps_value").hide();
      $(".vps_2_value").show();
      $(".vps_label").removeClass("active");
      $(".vps_label_2").addClass("active");
    } else if (checkValue <= 3) {
      $(".vps_value").hide();
      $(".vps_3_value").show();
      $(".vps_label").removeClass("active");
      $(".vps_label_3").addClass("active");
    } else if (checkValue <= 4) {
      $(".vps_value").hide();
      $(".vps_4_value").show();
      $(".vps_label").removeClass("active");
      $(".vps_label_4").addClass("active");
    } else if (checkValue <= 5) {
      $(".vps_value").hide();
      $(".vps_5_value").show();
      $(".vps_label").removeClass("active");
      $(".vps_label_5").addClass("active");
    } else if (checkValue <= 6) {
      $(".vps_value").hide();
      $(".vps_6_value").show();
      $(".vps_label").removeClass("active");
      $(".vps_label_6").addClass("active");
    }

    rangeInput.on("change", function () {
      checkValue = $(this).val();

      if (checkValue <= 1) {
        $(".vps_value").hide();
        $(".vps_1_value").show();
        $(".vps_label").removeClass("active");
        $(".vps_label_1").addClass("active");
      } else if (checkValue <= 2) {
        $(".vps_value").hide();
        $(".vps_2_value").show();
        $(".vps_label").removeClass("active");
        $(".vps_label_2").addClass("active");
      } else if (checkValue <= 3) {
        $(".vps_value").hide();
        $(".vps_3_value").show();
        $(".vps_label").removeClass("active");
        $(".vps_label_3").addClass("active");
      } else if (checkValue <= 4) {
        $(".vps_value").hide();
        $(".vps_4_value").show();
        $(".vps_label").removeClass("active");
        $(".vps_label_4").addClass("active");
      } else if (checkValue <= 5) {
        $(".vps_value").hide();
        $(".vps_5_value").show();
        $(".vps_label").removeClass("active");
        $(".vps_label_5").addClass("active");
      } else if (checkValue <= 6) {
        $(".vps_value").hide();
        $(".vps_6_value").show();
        $(".vps_label").removeClass("active");
        $(".vps_label_6").addClass("active");
      }
    });
  });
  $('.vps-video-popup').magnificPopup({
    type: 'iframe'
  });
  $('.counter').counterUp({
    delay: 10,
    time: 1000
  });
  $(window).on("scroll", function () {
    var offsetTop = $(window).scrollTop();

    if (offsetTop > 150) {
      $(".scrolltop-btn").fadeIn();
    } else {
      $(".scrolltop-btn").fadeOut();
    } //Sticky Header 


    $(window).on("scroll", function () {
      var scrollBarPosition = $(window).scrollTop();

      if (scrollBarPosition > 200) {
        $("header").addClass("sticky-header");
      } else {
        $("header").removeClass("sticky-header");
      }
    });
  });
  jQuery(window).on('load', function () {
    var feedBack = document.querySelectorAll(".feedback-wrapper");

    if (feedBack.length > 0) {
      var elem = document.querySelector('.feedback-massonry');
      var msnry = new Masonry(elem, {
        itemSelector: '.col-lg-4',
        columnWidth: 1
      });
    }

    $(".loader-wrap").fadeOut();
  });
})(jQuery);