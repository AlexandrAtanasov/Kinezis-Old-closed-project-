
var img = document.getElementsByClassName('slider__elem_img');

var forwardPic = '/../images/centers/center1.jpg';
var backwardPic = '/../images/centers/center2.jpg';

for (let i = 0; i < img.length; i++) {
    document.getElementsByClassName('slider__button_forward')[i].addEventListener('click', function () {
        img[i].src = forwardPic;
    })
    document.getElementsByClassName('slider__button_backward')[i].addEventListener('click', function () {
        img[i].src = backwardPic;
    })
};