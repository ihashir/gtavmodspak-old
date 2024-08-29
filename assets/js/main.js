<script>
!(function($) {
    "use strict";
  

$(document).ready(function(){

$('#loader , .loaderimg').delay(100).fadeOut(200);
});
  
    /* Smooth scroll for the navigation menu and links with .scrollto classes*/
    var scrolltoOffset = $('#header').outerHeight() - 2;
    $(document).on('click', '.nav-menu a, .mobile-nav a, .scrollto', function(e) {
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        if (target.length) {
          e.preventDefault();
  
          var scrollto = target.offset().top - scrolltoOffset;
          if ($(this).attr("href") == '#header') {
            scrollto = 0;
          }
  
         /* $('html,/body').animate({scrollTop: scrollto}, 1500, 'easeInOutExpo');*/
  
          if ($(this).parents('.nav-menu, .mobile-nav').length) {
            $('.nav-menu .active, .mobile-nav .active').removeClass('active');
            $(this).closest('li').addClass('active');
          }
  
          if ($('body').hasClass('mobile-nav-active')) {
            $('body').removeClass('mobile-nav-active');
            $('.mobile-nav-toggle i').toggleClass('far fa-times-circle');
            $('.mobile-nav-overly').fadeOut();
          }
          return false;
        }
      }
    });
  
  
    /* Mobile Navigation*/
    if ($('.nav-menu').length) {
      var $mobile_nav = $('.nav-menu').clone().prop({
        class: 'mobile-nav d-lg-none'
      });
      $('body').append($mobile_nav);
      $('body').prepend('<button type="button" class="mobile-nav-toggle d-lg-none"></button>');
      $('body').append('<div class="mobile-nav-overly"></div>');
  
      $(document).on('click', '.mobile-nav-toggle', function(e) {
        $('body').toggleClass('mobile-nav-active');
        $('.mobile-nav-toggle i').toggleClass('far fa-times-circle icofont-close');
        $('.mobile-nav-overly').toggle();
      });
  
      $(document).on('click', '.mobile-nav .drop-down > a', function(e) {
        e.preventDefault();
        $(this).next().slideToggle(300);
        $(this).parent().toggleClass('active');
      });
  
      $(document).click(function(e) {
        var container = $(".mobile-nav, .mobile-nav-toggle");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
          if ($('body').hasClass('mobile-nav-active')) {
            $('body').removeClass('mobile-nav-active');
            $('.mobile-nav-toggle i').toggleClass('far fa-times-circle icofont-close');
            $('.mobile-nav-overly').fadeOut();
          }
        }
      });
    } else if ($(".mobile-nav, .mobile-nav-toggle").length) {
      $(".mobile-nav, .mobile-nav-toggle").hide();
    }
  
    /* Navigation active state on scroll*/
    var nav_sections = $('section');
    var main_nav = $('.nav-menu, #mobile-nav');
  
    $(window).on('scroll', function() {
      var cur_pos = $(this).scrollTop() + 200;
  
      nav_sections.each(function() {
        var top = $(this).offset().top,
          bottom = top + $(this).outerHeight();
  
        if (cur_pos >= top && cur_pos <= bottom) {
          if (cur_pos <= bottom) {
            main_nav.find('li').removeClass('active');
          }
          main_nav.find('a[href="#' + $(this).attr('id') + '"]').parent('li').addClass('active');
        }
        if (cur_pos < 300) {
          $(".nav-menu ul:first li:first").addClass('active');
        }
      });
    });
  
    /* Toggle .header-scrolled class to #header when page is scrolled*/
    $(window).scroll(function() {
      if ($(this).scrollTop() > 100) {
        $('#header').css('background','#3caf62');
      } else {
      var win = window.location.pathname;
      if(!(win=='/mods/page/')){
      $('#header').css('background','transparent');
      }
        
      }
    });
  
    if ($(window).scrollTop() > 100) {
      $('#header').css('background','#3caf62');
    }
  
    /* Back to top button*/
    $(window).scroll(function() {
      if ($(this).scrollTop() > 100) {
        $('.back-to-top').fadeIn('slow');
      } else {
        $('.back-to-top').fadeOut('slow');
      }
    });
  
    $('.back-to-top').click(function() {
      $('html, body').animate({
        scrollTop: 0
      }, 1500, 'easeInOutExpo');
      return false;
    });
  
  
  
  })(jQuery);
  
window.addEventListener('load', function () {

setTimeout('loadImage()', 700);
  
});

function loadImage(){
$("body").append("<img src='assets/img/main.jpg' style='position:absolute;bottom:999px;height:10px;width:10px;'></img>");
$("body").append("<img src='assets/img/modMain.webp' style='position:absolute;top:-1400px;height:10px;width:10px;'></img>");
$("body").append("<img src='assets/img/about.jpg' style='position:absolute;top:-1700px;height:10px;width:10px;'></img>");
$("body").append("<img src='assets/img/darkMain.jpg' style='position:absolute;top:-999px;height:10px;width:10px;'></img>");

};




function darkTheme(){
var days = 30;
var date = new Date();
date.setTime(date.getTime()+(days*24*60*60*1000));
var expires = "; expires="+date.toGMTString();
document.cookie = "theme=dark"+expires+";path=/";

$(document).ready(function(){

	$('body').css({"background": "#121212", "color": "white"});
        var win = window.location.pathname;
        if(win=='/'){
        $('#hero').attr('style', 'width: 100%!important;height: 80vh!important;background: url("/assets/img/darkMain.jpg")!important;background-position: center center!important;background-repeat: no-repeat!important;background-size: cover!important;');
        }
  
	$('.card').css({'color':'white', 'background':'#1f1f1f'});
	$('.mobile-nav').css('background','#121212');
	$('.form-control').css({'background':'#282828','border':'1px solid #848484'});
	$('.fab.fa-discord').css('color', '#91a6ef');
	$('.fa-instagram').css('color','#f13cf1');
	
	$('.aboutText').css('color','#d4d4d4');
	$('.desc').css('color', '#c9d2c8');
	$('#header.header-scrolled, #header.header-inner-pages').css('background', '#359856');
	$('#hero .btn-get-started').css('background', '#359856');
	$('a.showModsA').css('color', '#5bfb56');
	$('.back-to-top i').css('background', '#47aa33');
	/*$('#hero').css({'background':'url(/assets/img/darkMain.jpg)', 'width': '100%!important','height': '80vh','background-position': 'center center','background-repeat': 'no-repeat','background-size': 'cover'});*/
	$('#hero h2').css('color', 'rgb(255 255 255 / 83%)');
        $('#themebtn #moon').attr('class','far fa-lightbulb');
        $('button#themebtn').attr('onclick','lightTheme()');
         
	

});

}
function lightTheme(){
        document.cookie = "theme=;expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/";
        
        $('body').attr('style','background:white!important; color:black!important;');              
        var win = window.location.pathname;
        if(win=='/'){
        $('#hero').attr('style', 'width: 100%!important;height: 80vh!important;background: url(/assets/img/main.jpg)!important;background-position: center center!important;background-repeat: no-repeat!important;background-size: cover!important;');
        }
  
	$('.card').attr('style','color:black!important ;background:white!important;');
	$('.mobile-nav').attr('style','background:white!important;');
	$('.form-control').attr('style','background:white!important;border:1px solid #ced4da!important;');
	$('.fab.fa-discord').attr('style','color:#6173b2!important');
	$('.fa-instagram').attr('style','color:purple!important');
	
	$('.aboutText').attr('style','color:#666666!important;');
	$('.desc').attr('style','color:#3c3c3c!important');
	$('#header.header-scrolled, #header.header-inner-pages').attr('style','background:transparent!important');
	$('#hero .btn-get-started').attr('style','background:#3caf62!important');
	$('a.showModsA').attr('style','color:#378400!important');
	$('.back-to-top i').attr('style','background:#7ce233!important');
	/*$('#hero').css({'background':'url(/assets/img/darkMain.jpg)', 'width': '100%!important','height': '80vh','background-position': 'center center','background-repeat': 'no-repeat','background-size': 'cover'});*/
	$('#hero h2').attr('style','color:rgba(255, 255, 255, 0.6)!important');
        $('#themebtn #moon').attr('class','far fa-moon');
        $('button#themebtn').attr('onclick','darkTheme()');
        
        
   
     
}

</script>
