
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
                var imgElements = imgElemClickParent.getElementsByClassName('content__article_img_elem');
                console.log(imgElements.length);
                getImgElementsSrc(imgElements);
                // switchImages(imgElements, imagesAll);
                // currentSlide = setFirstImg();
                // console.log(imgElements.length);
                // for (let i = 0; i < imgElements.length; i++ ) {
                //     var style = imgElements[i].currentStyle || window.getComputedStyle(imgElements[i], false);
                //     // var imgElemetsSrc = style.backgroundImage.slice(4, -1).replace(/"/g, "");
                //     var imgElemetsSrc = style.backgroundImage.slice(4, -2).replace(/.*\/images\//g, "\/../images/");
                //     imagesAll[i] = imgElemetsSrc;
                // };
            })
        };

        // function setFirstImg () {
        //     var style = this.currentStyle || window.getComputedStyle(this, false);
        //     var firstImgSrc = style.backgroundImage.slice(4, -2).replace(/.*\/images\//g, "\/../images/");
        //     console.log(firstImgSrc);
        //     return firstImgSrc;
        // }

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

        // function switchImages(imgElements, imagesAll) {
        //     var clickF = -1;

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

        // function goBackward() {
        //     currentSlide -= 1;
        // }

        document.getElementsByClassName('slider__button_forward')[0].addEventListener('click', function () {
            currentSlide = goForward(imagesAll);
            img[0].src = imagesAll[currentSlide];
            console.log(currentSlide);
            return currentSlide;
            // counter();
            // clickF += 1;
            // if (clickF > imagesAll.length) {
            //     clickF = 0;
            // };
            // img[0].src = imagesAll[clickF];
            // console.log('pic - ' + imagesAll[clickF]);
            // console.log(clickF);
        });

        document.getElementsByClassName('slider__button_backward')[0].addEventListener('click', function () {
            currentSlide = goBackward(imagesAll);
            img[0].src = imagesAll[currentSlide];
            console.log(currentSlide);
            return currentSlide;
            // clickF -= 1;
            // if (clickF < 1) {
            //     clickF = imagesAll.length;
            // }
            // img[0].src = imagesAll[clickF];
            // console.log('pic - ' + imagesAll[clickF]);
            // console.log(clickF);
        });
    // };


        // }

    //     for ( let i = 0; i < numimgElemetsSrcmgElements; i++ ) {
    //     document.getElementsByClassName('slider__button_forward')[i].addEventListener('click', function () {
    //         // img[i].src = forwardPic;
    //         img[i].src = imagesAll[i+1];
    //     })
    //     document.getElementsByClassName('slider__button_backward')[i].addEventListener('click', function () {
    //         // img[i].src = backwardPic;
    //         img[i].src = imagesAll[i-1];
    //     })
    // };
    




//  }

//  )



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