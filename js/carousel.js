document.addEventListener(
    'DOMContentLoaded',
    function f() {
        try {
            var images = {};
            function go() 
            {
                var elements = document.querySelectorAll('.carousel__elem');
                for ( var i = 0; i < elements.length; i++ ) {
                    images[i] = elements[i].innerHTML
                    console.log(elements[i].innerHTML); 
               }
               console.log(images);
               return images;
            };

            function setImg() 
            {
                go();
                var i = 0;
                var changeBackground = setTimeout(function change() {
                        console.log('go!');
                        document.querySelector('.content__article_carousel').style.backgroundImage = "url('" + images[i] + "')";
                        if (i<2) {i++} else i=0; 
                        changeBackground = setTimeout(change, 2000);
                    }, 2000);
            };
            setImg();
            
        } catch(e) {
            console.log('not working');
            console.log(e.name);
            console.log(e);
        }
    }
    )