jQuery((function(e){"use strict";e(window).on("load",(function(){e("#ctn-preloader").addClass("loaded"),e("#loading").fadeOut(1e3),e("#ctn-preloader").hasClass("loaded")&&e("#preloader").delay(1400).queue((function(){e(this).remove()}))})),jQuery(".nav.navbar-nav li a").on("click",(function(){jQuery(this).parent("li").find(".utf_dropdown_menu").slideToggle(),jQuery(this).find("li i").toggleClass("fa-angle-down fa-angle-up")})),e('.nav-tabs[data-toggle="tab-hover"] > li > a').hover((function(){e(this).tab("show")})),e(".utf_nav_search").on("click",(function(){e(".utf_search_block").fadeIn(350)})),e(".utf_search_close").on("click",(function(){e(".utf_search_block").fadeOut(350)})),e(".navbar-nav .menu-dropdown").on("click",(function(a){a.preventDefault(),a.stopPropagation(),e(this).siblings().slideToggle()})),e('.nav-tabs[data-toggle="tab-hover"] > li > a').hover((function(){e(this).tab("show")})),e(window).on("scroll",(function(){e(window).scrollTop()>250?e(".utf_sticky").addClass("sticky fade_down_effect"):e(".utf_sticky").removeClass("sticky fade_down_effect")})),e(".trending-slide").owlCarousel({loop:!0,animateIn:"fadeIn",autoplay:!0,autoplayTimeout:3e3,autoplayHoverPause:!0,nav:!0,margin:30,dots:!1,mouseDrag:!1,slideSpeed:500,navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],items:1,responsive:{0:{items:1},600:{items:1}}}),e(".utf_featured_slider").owlCarousel({loop:!0,animateOut:"fadeOut",autoplay:!1,autoplayHoverPause:!0,nav:!0,margin:0,dots:!1,mouseDrag:!0,touchDrag:!0,slideSpeed:500,navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],items:1,responsive:{0:{items:1},600:{items:1}}}),e(".utf_latest_news_slide").owlCarousel({loop:!1,animateIn:"fadeInLeft",autoplay:!1,autoplayHoverPause:!0,nav:!0,margin:30,dots:!1,mouseDrag:!1,slideSpeed:500,navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],items:3,responsive:{0:{items:1},600:{items:2},768:{items:2},992:{items:3},1200:{items:4}}}),e(".utf_latest_news_slide2").owlCarousel({loop:!1,animateIn:"fadeInLeft",autoplay:!1,autoplayHoverPause:!0,nav:!0,margin:30,dots:!1,mouseDrag:!1,slideSpeed:500,navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],items:3,responsive:{0:{items:1},600:{items:2},768:{items:2},992:{items:3},1200:{items:3}}}),e(".utf_more_news_slide").owlCarousel({loop:!1,autoplay:!1,autoplayHoverPause:!0,nav:!1,margin:30,dots:!0,mouseDrag:!1,slideSpeed:500,navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],items:1,responsive:{0:{items:1},600:{items:1}}}),e(".utf_post_slide").owlCarousel({loop:!0,animateOut:"fadeOut",autoplay:!1,autoplayHoverPause:!0,nav:!0,margin:30,dots:!1,mouseDrag:!1,slideSpeed:500,navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],items:1,responsive:{0:{items:1},600:{items:1}}}),e(".webstories-slider").owlCarousel({loop:!0,animateOut:"fadeOut",autoplay:!1,autoplayHoverPause:!0,nav:!1,margin:30,dots:!0,mouseDrag:!0,slideSpeed:500,navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],responsive:{1024:{items:4},375:{items:2},320:{items:1}}}),e(document).ready((function(){e(".gallery-popup").colorbox({rel:"gallery-popup",transition:"fade",innerHeight:"500"}),e(".popup").colorbox({iframe:!0,innerWidth:600,innerHeight:400})})),e(window).scroll((function(){e(this).scrollTop()>50?e("#back-to-top").fadeIn():e("#back-to-top").fadeOut()})),e("#back-to-top").on("click",(function(){return e("#back-to-top").tooltip("hide"),e("body,html").animate({scrollTop:0},800),!1})),e("#back-to-top").tooltip("hide")}));