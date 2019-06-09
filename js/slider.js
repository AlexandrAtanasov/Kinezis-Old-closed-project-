document.addEventListener(
    'DOMContentLoaded',
    function(e) {
        var img = document.getElementsByClassName('slider__elem_img');
        var imagesAll = [];
        var currentSlide = -1;
        var imgElemClick = document.getElementsByClassName('content__article_img_elem');
        for ( var i = 0; i < imgElemClick.length; i++ ) {
            imgElemClick[i].addEventListener('click', function() {
                var imgElemClickParent = this.parentNode.parentNode;
                var clickImgElement = this;
                var imgElements = imgElemClickParent.getElementsByClassName('content__article_img_elem');
                getImgElementsSrc(imgElements);
                setFirstSlide(imagesAll, clickImgElement);
            })
        };

        function setFirstSlide(imagesAll, clickImgElement) {
            var clickElement = clickImgElement;
            var clickElemStyle = clickElement.currentStyle || getComputedStyle(clickElement, false);
            var clickImgElemSrc = clickElemStyle.backgroundImage.slice(4, -2).replace(/.*\/images\//g, "\/../images/");
                for ( var i = 0; i < imagesAll.length; i++ ) {
                    if (clickImgElemSrc == imagesAll[i]) {
                        currentSlide = i;
                    }; 
                };
                img[0].src = imagesAll[currentSlide];
                return currentSlide;
        }; 

        function getImgElementsSrc(imgElements) {
            for (var i = 0; i < imgElements.length; i++ ) {
                var style = imgElements[i].currentStyle || window.getComputedStyle(imgElements[i], false);
                var imgElemetsSrc = style.backgroundImage.slice(4, -2).replace(/.*\/images\//g, "\/../images/");
                imagesAll[i] = imgElemetsSrc;
            }
        };

        function goForward(imagesAll) {
            if ( currentSlide+1 > imagesAll.length-1) {
                currentSlide = 0;
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
        };

        document.getElementsByClassName('slider__button_forward')[0].addEventListener('click', function() {
            currentSlide = goForward(imagesAll);
            img[0].src = imagesAll[currentSlide];
            return currentSlide;
        });

        document.getElementsByClassName('slider__button_backward')[0].addEventListener('click', function() {
            currentSlide = goBackward(imagesAll);
            img[0].src = imagesAll[currentSlide];
            return currentSlide;
        });
    }
)