// $(document).ready(function(){

// Contact Button Validation and Submit
  $('#btn_contact').click(function(){
    var name = $('#name').val();
    var email = $('#email').val();
    var mobile = $('#mobile').val();
    var message = $('#message').val();
    var mobile_format = /^[6-9][0-9]{9}$/;
    var email_format = /^[A-Za-z0-9._%+-]+@([a-z0-9-]+\.)+[a-z]{2,4}$/;
    var error_name = '';
    var error_email = '';
    var error_mobile = '';
    var error_message = '';
    var invalide_email = '';
    var invalide_mobile = '';
    var required = '';

    if(name == ''){
      var error_name = 'Name, ';
      var required = 'required. ';
      $('#name').addClass('invalide');
    }
    if(email == ''){
      var error_email = 'Email, ';
      var required = 'required. ';
      $('#email').addClass('invalide');
    }
    if(email != '' && !email_format.test(email)){
      var invalide_email = 'Invalide Email, ';
      $('#email').addClass('invalide');
    }
    if(mobile == ''){
      var error_mobile = 'Mobile Number, ';
      var required = 'required. ';
      $('#mobile').addClass('invalide');
    }
    if(mobile != '' && !mobile_format.test(mobile)){
      var invalide_mobile = 'Invalide Mobile Number ';
      $('#mobile').addClass('invalide');
    }
    if(message == ''){
      var error_message = 'Message ';
      var required = 'required. ';
      $('#message').addClass('invalide');
    }

    if(!mobile_format.test(mobile) || !email_format.test(email) || name == '' || email == '' || mobile == '' || message == ''){
      $('#required_error').removeClass('d-none')
      //$('#required_error').show();
      $('#error_message').text(error_name+''+error_email+''+error_mobile+''+error_message+''+required+''+invalide_email+''+invalide_mobile)
    }
    else{
      $('.valide').removeClass('invalide');
      $('#contact_form').submit();
    }
  });

  $('#btn_enquiry').click(function(){
    // gtag_report_conversion('https://www.pixelbazar.com/');
    var name = $('#name').val();
    var email = $('#email').val();
    var mobile = $('#mobile').val();
    var mobile_format = /^[6-9][0-9]{9}$/;
    var email_format = /^[A-Za-z0-9._%+-]+@([a-z0-9-]+\.)+[a-z]{2,4}$/;
    var error_name = '';
    var error_email = '';
    var error_mobile = '';
    var invalide_email = '';
    var invalide_mobile = '';
    var required = '';

    if(name == ''){
      var error_name = 'Name, ';
      var required = 'required. ';
      $('#name').addClass('invalide');
    }
    if(email == ''){
      var error_email = 'Email, ';
      var required = 'required. ';
      $('#email').addClass('invalide');
    }
    if(email != '' && !email_format.test(email)){
      var invalide_email = 'Invalide Email, ';
      $('#email').addClass('invalide');
    }
    if(mobile == ''){
      var error_mobile = 'Mobile Number, ';
      var required = 'required. ';
      $('#mobile').addClass('invalide');
    }
    if(mobile != '' && !mobile_format.test(mobile)){
      var invalide_mobile = 'Invalide Mobile Number ';
      $('#mobile').addClass('invalide');
    }

    if(!mobile_format.test(mobile) || !email_format.test(email) || name == '' || email == '' || mobile == ''){
      $('#required_error').removeClass('d-none')
      $('#error_message').text(error_name+''+error_email+''+error_mobile+''+required+''+invalide_email+''+invalide_mobile)
    }
    else{
      $('.valide').removeClass('invalide');
      $('#enquiry_form').submit();
    }
  });

  $('#btn_enquiry2').click(function(){
    var name = $('#name2').val();
    var email = $('#email2').val();
    var mobile = $('#mobile2').val();
    var mobile_format = /^[6-9][0-9]{9}$/;
    var email_format = /^[A-Za-z0-9._%+-]+@([a-z0-9-]+\.)+[a-z]{2,4}$/;
    var error_name = '';
    var error_email = '';
    var error_mobile = '';
    var invalide_email = '';
    var invalide_mobile = '';
    var required = '';

    if(name == ''){
      var error_name = 'Name, ';
      var required = 'required. ';
      $('#name2').addClass('invalide');
    }
    if(email == ''){
      var error_email = 'Email, ';
      var required = 'required. ';
      $('#email2').addClass('invalide');
    }
    if(email != '' && !email_format.test(email)){
      var invalide_email = 'Invalide Email, ';
      $('#email2').addClass('invalide');
    }
    if(mobile == ''){
      var error_mobile = 'Mobile Number, ';
      var required = 'required. ';
      $('#mobile2').addClass('invalide');
    }
    if(mobile != '' && !mobile_format.test(mobile)){
      var invalide_mobile = 'Invalide Mobile Number ';
      $('#mobile2').addClass('invalide');
    }

    if(!mobile_format.test(mobile) || !email_format.test(email) || name == '' || email == '' || mobile == ''){
      $('#required_error').removeClass('d-none')
      //$('#required_error').show();
      $('#error_message').text(error_name+''+error_email+''+error_mobile+''+required+''+invalide_email+''+invalide_mobile)
    }
    else{
      $('.valide').removeClass('invalide');
      $('#enquiry_form_mob').submit();
    }
  });

  $('#btn_enquiry3').click(function(){
    var name = $('#name3').val();
    var email = $('#email3').val();
    var mobile = $('#mobile3').val();
    var mobile_format = /^[6-9][0-9]{9}$/;
    var email_format = /^[A-Za-z0-9._%+-]+@([a-z0-9-]+\.)+[a-z]{2,4}$/;
    var error_name = '';
    var error_email = '';
    var error_mobile = '';
    var invalide_email = '';
    var invalide_mobile = '';
    var required = '';

    if(name == ''){
      var error_name = 'Name, ';
      var required = 'required. ';
      $('#name3').addClass('invalide');
    }
    if(email == ''){
      var error_email = 'Email, ';
      var required = 'required. ';
      $('#email3').addClass('invalide');
    }
    if(email != '' && !email_format.test(email)){
      var invalide_email = 'Invalide Email, ';
      $('#email3').addClass('invalide');
    }
    if(mobile == ''){
      var error_mobile = 'Mobile Number, ';
      var required = 'required. ';
      $('#mobile3').addClass('invalide');
    }
    if(mobile != '' && !mobile_format.test(mobile)){
      var invalide_mobile = 'Invalide Mobile Number ';
      $('#mobile3').addClass('invalide');
    }

    if(!mobile_format.test(mobile) || !email_format.test(email) || name == '' || email == '' || mobile == ''){
      $('#required_error').removeClass('d-none')
      //$('#required_error').show();
      $('#error_message').text(error_name+''+error_email+''+error_mobile+''+required+''+invalide_email+''+invalide_mobile)
    }
    else{
      $('.valide').removeClass('invalide');
      $('#enquiry_form3').submit();
    }
  });

// Hide Banner Logo on Scroll
function hide_logo(){
  var y = $(this).scrollTop();
  if (y < 100) {
    $('.logo1').fadeIn();
  } else {
    $('.logo1').fadeOut();
  }
}

// Page Up Scroll.
  $(".page-up").on('click', function(event) {
   if (this.hash !== "") {
     event.preventDefault();
     var hash = this.hash;
     $('html, body').animate({
       scrollTop: $(hash).offset().top
     }, 1200, function(){
       window.location.hash = '';
     });
   }
  });
  // Hide logo on Scroll.
  $(document).scroll(function() {
    hide_logo();
    counter ();
    go_top();
  });

  use_typed = function () {
    if ( $(".home").hasClass("active") ) {
      //alert();
      var typed3 = new Typed('#typed', {
        strings: ['Website', 'Logo', 'Brand Identity'],
        typeSpeed: 150,
        backSpeed: 50,
        smartBackspace: true,
        loop: true
      });
      var typed2 = new Typed('#typed2', {
        strings: ['Website', 'Logo', 'Brand Identity'],
        typeSpeed: 150,
        backSpeed: 50,
        smartBackspace: true,
        loop: true
      });
     }
  }

$(document).ready(function(){
onpageload_menu();
use_typed();
star_rating();
});


// active menu..
onpageload_menu = function () {
for (var lnk = document.links, j = 0; j < lnk.length; j++)
  if (lnk [j].href === document.URL) {

    $(lnk [j]).addClass('active');
    $(lnk [j]).parent().parent().parent('li').children('a').addClass('active');
  }
  // else{
  //   $(lnk [j]).removeClass('active');
  //   $(lnk [j]).parent().parent().parent('li').children('a').removeClass('active');
  // }
}

//Counter...
var is_count = true
function counter(){
  if($(".counter-num").length) {
      var winScr = $(window).scrollTop()
      var winHeight = $(window).height()
      var ofs = $('.counter-num').offset().top

      if ( (winScr+winHeight)>ofs && is_count) {
        $(".counter-num").each(function () {
          var atr = $(this).attr('data-count');
          var atr2 = $(this).attr('cnt');
          var item = $(this);
          var n = atr;
          var d = 0;
          var c;

          $(item).text(d);
          var interval = setInterval(function() {
            c = atr/30;
            d+=c;
            if ( (atr-d)<c) {
              d=atr;
            }
            if ( atr2 == 100 ) {   $(item).text(Math.floor(d)+'%' );  }
            else{ $(item).text(Math.floor(d)+'+' ); }

          if (d==atr) {
            clearInterval(interval);
          }
        },30);
      });
      is_count = false;
    }
  }
}

// Show go top on scroll
function go_top(){
  if( $(this).scrollTop() > 200 ) {
    $('#go-top').fadeIn();
  } else {
    $('#go-top').fadeOut();
  }
}

// Go to top..
$('#go-top').on( "click", function() {
    $('html, body').animate({scrollTop: 0});
    return false;
});


$(document).ready(function(){
    $(".port-btn").click(function(){
        var value = $(this).attr('data-filter');
        if(value == "item")
        {            //$('.filter').removeClass('hidden');
            $('.item').show('1000');
        }
        else
        {
          //alert(value);
             $(".item").not('.'+value).hide('3000');
             $('.item').filter('.'+value).show('3000');
        }
        if ($(".port-btn").removeClass("active")) {
        $(this).removeClass("active");
        }
        $(this).addClass("active");
    });
});

// Add Portfolio
$('#form_add_portfolio').submit(function(e){
  e.preventDefault();
  $.ajax({
    data:new FormData(this),
    type:'POST',
    url:"<?php echo base_url() ?>Welcome/save_portfolio",
    processData:false,
    contentType:false,
    success:function(){
      $('.input').val('');
    }
  });
});

// Home page Portfolio Lightbox...
// Show on Hover..
$( ".img-wrapper" ).hover(
  function() {
    $(this).find(".img-overlay").animate({opacity: 1}, 600);
  }, function() {
    $(this).find(".img-overlay").animate({opacity: 0}, 600);
  }
);
//
// // Lightbox
// var $overlay = $('<div id="overlay"></div>');
// var $image = $("<img>");
// var $prevButton = $('<div id="prevButton"><i class=""><svg style="width:15px; padding-bottom:10px;" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z" class=""></path></svg></i></div>');
// var $nextButton = $('<div id="nextButton"><i class=""><svg style="width:15px; padding-bottom:10px;" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" class=""></path></svg></i></div>');
// var $exitButton = $('<div id="exitButton"><i class=""><svg style="width:15px; padding-bottom:10px;" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z" class=""></path></svg></i></div>');
//
// // Add overlay
// $overlay.append($image).prepend($prevButton).append($nextButton).append($exitButton);
// $("#gallery").append($overlay);
//
// // Hide overlay on default
// $overlay.hide();
//
// // When an image is clicked
// $(".img-overlay").click(function(event) {
//   // Prevents default behavior
//   event.preventDefault();
//   // Adds href attribute to variable
//   var imageLocation = $(this).prev().attr("href");
//   // Add the image src to $image
//   $image.attr("src", imageLocation);
//   // Fade in the overlay
//   $overlay.fadeIn("slow");
// });
//
// // When the overlay is clicked
// $overlay.click(function() {
//   // Fade out the overlay
//   $(this).fadeOut("slow");
// });
//
// // When next button is clicked
// $nextButton.click(function(event) {
//   // Hide the current image
//   $("#overlay img").hide();
//   // Overlay image location
//   var $currentImgSrc = $("#overlay img").attr("src");
//   // Image with matching location of the overlay image
//   var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
//   // Finds the next image
//   var $nextImg = $($currentImg.closest(".image").next().find("img"));
//   // All of the images in the gallery
//   var $images = $("#image-gallery img");
//   // If there is a next image
//   if ($nextImg.length > 0) {
//     // Fade in the next image
//     $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
//   } else {
//     // Otherwise fade in the first image
//     $("#overlay img").attr("src", $($images[0]).attr("src")).fadeIn(800);
//   }
//   // Prevents overlay from being hidden
//   event.stopPropagation();
// });
//
// // When previous button is clicked
// $prevButton.click(function(event) {
//   // Hide the current image
//   $("#overlay img").hide();
//   // Overlay image location
//   var $currentImgSrc = $("#overlay img").attr("src");
//   // Image with matching location of the overlay image
//   var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
//   // Finds the next image
//   var $nextImg = $($currentImg.closest(".image").prev().find("img"));
//   // Fade in the next image
//   $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
//   // Prevents overlay from being hidden
//   event.stopPropagation();
// });
//
// // When the exit button is clicked
// $exitButton.click(function() {
//   // Fade out the overlay
//   $("#overlay").fadeOut("slow");
// });

// testimonial Stars
function star_rating(){
  var star_rating = document.getElementsByClassName('star-rating');
  $('.star-rating').append('<svg style="width:12px;" viewBox="0 0 576 512"><path fill="#fdc14d" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" class=""></path></svg>');
  $('.star-rating').append(' <svg style="width:12px;" viewBox="0 0 576 512"><path fill="#fdc14d" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" class=""></path></svg>');
  $('.star-rating').append(' <svg style="width:12px;" viewBox="0 0 576 512"><path fill="#fdc14d" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" class=""></path></svg>');
  $('.star-rating').append(' <svg style="width:12px;" viewBox="0 0 576 512"><path fill="#fdc14d" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" class=""></path></svg>');
  $('.star-rating').append(' <svg style="width:12px;" viewBox="0 0 576 512"><path fill="#fdc14d" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" class=""></path></svg>');
}

// Portfolio Scroll Mouse Hover Effect
// $('.tile1').removeClass("margin-minus-20");
$('.scroller').mousedown(function(event) {
  $(this).data('down', true).data('x', event.clientX).data('scrollLeft', this.scrollLeft);
  return false;
}).mouseup(function(event) {
  $(this).data('down', false);
}).mousemove(function(event) {
  $('.tile1').removeClass("margin-minus-20");
    // alert('this-div');
  if ($(this).data('down') == true) {
      this.scrollLeft = $(this).data('scrollLeft') + $(this).data('x') - event.clientX;
  }
});

var pos = 5;

$.fn.loopingScroll = function(direction, scrollElement) {
  if (direction == "right") {
      pos += 5;
  }
  else if (direction == "left") {
      pos -= 5;
  }
  $(scrollElement).parent().scrollLeft($(scrollElement).parent().data('scrollLeft') + pos);
  return this;
}

$(".scroll-left").hover(function() {
    $(this).parent().animate({scrollLeft: 0}, 2000);
    $(this).fadeIn('fast');
    // $('.row-scroll').find("div").animate({opacity: 1}, 600);
}, function() {
    $(this).parent().stop();
    $(this).fadeOut('fast');
    // $('.scroller').find(".img-overlay:first").animate({opacity: 0}, 600);
});

$(".scroll-right").hover(function() {
    $(this).parent().animate({scrollLeft: $(this).siblings(".row-scroll").width()}, 5000);
    $(this).fadeIn('fast');
}, function() {
    $(this).parent().stop();
    $(this).fadeOut('fast');
});

if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
    document.getElementById("whats_app").href = "https://api.whatsapp.com/send?phone=+919158995505";   //change url
    document.getElementById("whats_app").target = "_blank";     //change target
}
