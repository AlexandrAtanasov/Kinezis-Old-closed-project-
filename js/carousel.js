document.addEventListener(
    'DOMContentLoaded',
    function f() {
        try 
        {
            var elements;
            var images = {};
            function go() 
            {
                elements = document.querySelectorAll('.carousel__elem');
                for ( var i = 0; i < elements.length; i++ ) {
                    images[i] = elements[i].innerHTML
                }
                return images;
            };
            
            function setImg() 
            {
                if ($('div').hasClass('content__elem_carousel'))
                {
                    go();
                    var i = 0;
                    var changeBackground = setTimeout(function change() {
                        document.querySelector('.content__elem_carousel').style.backgroundImage = "url('" + images[i] + "')";
                        if (i<(elements.length-1)) {i++} else i=0;
                        document.querySelector(".content__elem_carousel").classList.remove("content__elem_carousel_hide");
                        document.querySelector(".content__elem_carousel").classList.add("content__elem_carousel_show");
                        setTimeout(function hide(){
                            document.querySelector(".content__elem_carousel").classList.remove("content__elem_carousel_show");
                            document.querySelector(".content__elem_carousel").classList.add("content__elem_carousel_hide");
                        }, 3450)
                        changeBackground = setTimeout(change, 4000);
                        }, 4);
                }
            };
            setImg();
        } 
        catch(e) 
        {
            console.log('not working');
            console.log(e.name);
            console.log(e);
        }
    }
)