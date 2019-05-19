
document.addEventListener(
    'DOMContentLoaded',
    function(e) {
        var img = document.getElementsByClassName('slider__elem_img');
        var imagesAll = [];
        var currentSlide = -1;
        console.log('start - ' + currentSlide);
    
        var imgElemClick = document.getElementsByClassName('content__article_img_elem');
        for ( let i = 0; i < imgElemClick.length; i++ ) {
            imgElemClick[i].addEventListener('click', function() {
                var imgElemClickParent = this.parentNode.parentNode;
                console.log(this);
                var clickImgElement = this;
                console.log(clickImgElement);  
                var imgElements = imgElemClickParent.getElementsByClassName('content__article_img_elem');
                console.log(imgElements.length);
                getImgElementsSrc(imgElements);
                setFirstSlide(imagesAll, clickImgElement);
            })
        };

        function setFirstSlide(imagesAll, clickImgElement) {
            var clickElement = clickImgElement;
            console.log(clickElement);
            var clickElemStyle = clickElement.currentStyle || getComputedStyle(clickElement, false);
            var clickImgElemSrc = clickElemStyle.backgroundImage.slice(4, -2).replace(/.*\/images\//g, "\/../images/");
            console.log('жмакунтое - ' + clickImgElemSrc);
            console.log(currentSlide);
                for ( let i = 0; i < imagesAll.length; i++ ) {
                    if (clickImgElemSrc == imagesAll[i]) {
                        currentSlide = i;
                    }; 
                };
                img[0].src = imagesAll[currentSlide];
                return currentSlide;
        }; 

        function getImgElementsSrc(imgElements) {
            for (let i = 0; i < imgElements.length; i++ ) {
                var style = imgElements[i].currentStyle || window.getComputedStyle(imgElements[i], false);
                var imgElemetsSrc = style.backgroundImage.slice(4, -2).replace(/.*\/images\//g, "\/../images/");
                console.log(imgElemetsSrc);
                imagesAll[i] = imgElemetsSrc;
                
            }
            console.log('массив - ' + imagesAll);
            console.table(imagesAll);
        };

        function goForward(imagesAll) {
            if ( currentSlide+1 > imagesAll.length-1) {
                currentSlide = 0;
                console.log('не больше последнего');
            } else {
                currentSlide += 1;
            };
            return currentSlide;
        };
        function goBackward(imagesAll) {
            if ( currentSlide-1 < 0) {
                currentSlide = imagesAll.length-1;
            } else {
                currentSlide -= 1;
            };
            return currentSlide;

        }

        document.getElementsByClassName('slider__button_forward')[0].addEventListener('click', function () {
            currentSlide = goForward(imagesAll);
            img[0].src = imagesAll[currentSlide];
            console.log(currentSlide);
            return currentSlide;
        });

        document.getElementsByClassName('slider__button_backward')[0].addEventListener('click', function () {
            currentSlide = goBackward(imagesAll);
            img[0].src = imagesAll[currentSlide];
            console.log(currentSlide);
            return currentSlide;
        });



// this > search background-img > search by siblings ???

// $(document).ready(function () {
//     $.ajax({
//         // url: '/../application/models/sliderData.php',
//         url: '/../application/views/main_view_centers.php',
//         success: 
//             function(incoming){
//                 var Img = JSON.parse(incoming, function(key, value) {
//                     if (~key.indexOf("Img")) {
//                         alert( 'совпадение есть! - ' + value );
//                     }
//                     return Img;
//                 });
//           }
          
  
//         // }
//       });
// });
})