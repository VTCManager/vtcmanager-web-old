/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
var Nanobar = require('nanobar');
var nanobar = new Nanobar();

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component(
  'passport-clients',
  require('./components/passport/Clients.vue').default
);

Vue.component(
  'passport-authorized-clients',
  require('./components/passport/AuthorizedClients.vue').default
);

Vue.component(
  'passport-personal-access-tokens',
  require('./components/passport/PersonalAccessTokens.vue').default
);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

//Loading completed animation
$(window).on("load", function (e) {
    $("#preloader").fadeOut(1000);
    $("#app").fadeIn(800);
});
jQuery(function ($) {

    $(".sidebar-dropdown > a").click(function() {
  $(".sidebar-submenu").slideUp(200);
  if (
    $(this)
      .parent()
      .hasClass("active")
  ) {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .parent()
      .removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .next(".sidebar-submenu")
      .slideDown(200);
    $(this)
      .parent()
      .addClass("active");
  }
});

$("#close-sidebar").click(function() {
  $(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function() {
  $(".page-wrapper").addClass("toggled");
});


   
   
});
$(document).ready(function() {
  // card js start
  
  
  $(".mobile-options").on('click', function() {
  $(".navbar-container .nav-right").slideToggle('slow');
  });
  $(".search-btn").on('click', function() {
  $(".main-search").addClass('open');
  $('.main-search .form-control').animate({
  'width': '200px',
  });
  });
  $(".search-close").on('click', function() {
  $('.main-search .form-control').animate({
  'width': '0',
  });
  setTimeout(function() {
  $(".main-search").removeClass('open');
  }, 300);
  });
  
  $(".btn-go-back").mouseover(function() {
    console.log("ye");
    $('.go-back-icon').css('color','white');
  });
  $(".btn-go-back").mouseout(function() {
    $('.go-back-icon').css('color','black');
  })
  
  
  });
  
  // toggle full screen
  function toggleFullScreen() {
  var a = $(window).height() - 10;
  
  if (!document.fullscreenElement && // alternative standard method
  !document.mozFullScreenElement && !document.webkitFullscreenElement) { // current working methods
  if (document.documentElement.requestFullscreen) {
  document.documentElement.requestFullscreen();
  } else if (document.documentElement.mozRequestFullScreen) {
  document.documentElement.mozRequestFullScreen();
  } else if (document.documentElement.webkitRequestFullscreen) {
  document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
  }
  } else {
  if (document.cancelFullScreen) {
  document.cancelFullScreen();
  } else if (document.mozCancelFullScreen) {
  document.mozCancelFullScreen();
  } else if (document.webkitCancelFullScreen) {
  document.webkitCancelFullScreen();
  }
  }
  $('.full-screen').toggleClass('icon-maximize');
  $('.full-screen').toggleClass('icon-minimize');
  }