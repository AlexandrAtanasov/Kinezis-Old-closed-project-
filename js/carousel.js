document.addEventListener(
    'DOMContentLoaded',
    (function f() 
    {
        var elements;
        var images = [];

        (function () 
        {
            if ($('div').hasClass('content__elem_carousel'))
            {
                go();
                if (!(images.length == 1)) 
                {
                    var i = 0;
                    var changeBackground = setTimeout(function change() 
                        {
                            document.querySelector('.content__elem_carousel').style.backgroundImage = "url('" + images[i] + "')";
                            if (i<(images.length-1)) {i++} else i=0;
                            document.querySelector(".content__elem_carousel").classList.remove("content__elem_carousel_hide");
                            document.querySelector(".content__elem_carousel").classList.add("content__elem_carousel_show");
                            setTimeout(function hide(){
                                document.querySelector(".content__elem_carousel").classList.remove("content__elem_carousel_show");
                                document.querySelector(".content__elem_carousel").classList.add("content__elem_carousel_hide");
                            }, 3450)
                            changeBackground = setTimeout(change, 4000);
                        }, 4);
                } else
                {
                    document.querySelector('.content__elem_carousel').style.backgroundImage = "url('" + images[0] + "')";
                }
            }
        })();

        function go() 
        {
            elements = document.querySelectorAll('.carousel__elem');
            if ( window.matchMedia( "screen and (max-width: 910px)").matches ) 
            {
                mobileImages(elements);
            }; 
            if ( window.matchMedia( "screen and (min-width: 911px)").matches ) 
            {
                bigImages(elements);
            };
            return images;
        };

        function mobileImages(elements) {
            var regex1 = /.*mobile_.*/gm;
            var j = 0;
            for ( var i = 0; i < elements.length; i++ ) 
            {
                if (regex1.exec(elements[i].innerHTML)) {
                    images[j] = elements[i].innerHTML;
                    j++;
                };
            };
            return images;
        };

        function bigImages(elements) {
            var regex2 = /.*big_.*/gm;
            var j = 0;
            for ( var i = 0; i < elements.length; i++ ) 
            {
                if (regex2.exec(elements[i].innerHTML)) {
                    images[j] = elements[i].innerHTML;
                    j++;
                };
            };
            return images;
        };
    }
    )()
);