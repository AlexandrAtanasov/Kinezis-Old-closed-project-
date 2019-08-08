$(document).ready(function() {

    $(".slider__open").on('click', function (event) { 
      $(".overlay__slider_nav").css({'display' : 'block',});
      event.stopPropagation();
      event.stopImmediatePropagation();
      $(".overlay__slider_container").toggleClass("overlay__hide");
      $(".overlay__blur").toggleClass("blur");
      $("body").toggleClass("body_overflow");
    });
    
    $(".overlay__slider_buttonClose").on('click', function (event){
      event.stopPropagation();
      event.stopImmediatePropagation();
      $(".overlay__slider_container").toggleClass("overlay__hide");
      $(".overlay__blur").toggleClass("blur");
      $("body").toggleClass("body_overflow");
    });

  })