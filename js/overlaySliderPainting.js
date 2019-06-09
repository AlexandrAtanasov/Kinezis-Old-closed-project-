// $(document).ready(function() {

;(function addElem() {
    var
      bodyBox = $('.overlay__slider_container .overlay__slider_elem'), 
      overlaySlider = $('<div>', {
        class: 'overlay__slider_nav',
        css: {
            display: 'none',
        },
      }),
      sliderBox = $('<div>', {
        class: 'slider__box',
      }),
      sliderButton1 = $('<div>', {
        class: 'slider__box_button',
      }),
      sliderButton2 = $('<div>', {
        class: 'slider__box_button',
      }),
      sliderImg = $('<div>', {
        class: 'slider__box_img',
      }),
      // sliderButtonInputForward = $('<input>', {
      //   type: 'button',
      //   class: 'slider__button_forward',
      //   value: 'Forward',
      // }),
      // sliderButtonInputBackward = $('<input>', {
      //   type: 'button',
      //   class: 'slider__button_backward',
      //   value: 'Backward',
      // }),
      sliderButtonInputBackwardArrow = $('<i>', {
        class: 'fas fa-arrow-left slider__button_backward',
      }),
      sliderButtonInputForwardArrow = $('<i>', {
        class: 'fas fa-arrow-right slider__button_forward',
      }),
      sliderImgElem = $('<img>', {
        class: 'slider__elem_img',
        src: '',
      });
  
    $(overlaySlider).append(sliderBox);
    $(sliderButton1).append(sliderButtonInputBackwardArrow);
    $(sliderButton2).append(sliderButtonInputForwardArrow);
    // $(sliderButton1).append(sliderButtonInputForward);
    // $(sliderButton2).append(sliderButtonInputBackward);
    $(sliderImg).append(sliderImgElem);
    $(sliderBox).append(sliderButton1, sliderImg, sliderButton2);
    // $(bodyBox).prepend(openButton, closeButton, overlaySlider);
    $(bodyBox).prepend(overlaySlider);
    
  })();

// })