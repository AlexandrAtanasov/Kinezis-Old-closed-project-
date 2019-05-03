$(document).ready(function() {
    
    $(this).on("click", "span", function (event) {
        if ($(this).hasClass('nav__menu_activities')) 
        {
            $elemClass = '.content__activities';
            $elemUrl = '../html/main__content_activities.html';
            showContent();
        } else if ($(this).hasClass('nav__menu_person'))
        {
            $elemClass = '.content__person';
            $elemUrl = '/person';
            showContent();
        } else if ($(this).hasClass('nav__menu_method'))
        {
            $elemClass = '.content__article';
            $elemUrl = '/article';
            showContent();
        }
         else if ($(this).hasClass('nav__menu_contacts'))
        {
            $elemClass = '.content__contacts';
            $elemUrl = '/contacts';
            showContent();
        }
         else if($(this).hasClass('nav__menu_priceServices'))
        {
            $elemClass = '.content__price';
            $elemUrl = '/price';
            showContent();
        } else if($(this).hasClass('nav__menu_priceSale'))
        {
            $elemClass = '.content__price_sale';
            $elemUrl = '../php/price/content_price_sale.php';
            showContent();
        }
    });
})

function showContent() {
    $winWidth = $(document).width();
    $heightBox = 0;
    // ($winWidth >= 1131) ? ($heightBox = 50) : 
    ($winWidth < 910) ? ($heightBox = 75) :
    ($winWidth >= 910 && $winWidth < 1131) ? ($heightBox = 170) :
    ($heightBox = 50);
    if ($("div").is($elemClass)) {
            $([document.documentElement, document.body]).animate({
                scrollTop: $($elemClass).offset().top-$heightBox
            }, 1000);
    } else {
        $("html, body").stop().animate({scrollTop:0}, 1000);
            // $("main").html(''); 
            location.href = $elemUrl;
    }
}


///
// $(document).ready(function() {
//     $(this).on("click", "span", function (event) {
//         if ($(this).hasClass('nav__menu_contacts'))
//         {
//             $elemClass = '.content__contacts';
//             $elemUrl = '/contacts';

//             $winWidth = $(document).width();
//             $heightBox = 0;
            
//             ($winWidth < 910) ? ($heightBox = 75) :
//             ($winWidth >= 910 && $winWidth < 1131) ? ($heightBox = 170) :
//             ($heightBox = 50);
//             if ($("div").is($elemClass)) {
//                     $([document.documentElement, document.body]).animate({
//                         scrollTop: $($elemClass).offset().top-$heightBox
//                     }, 1000);
//             } else {
//                 $("html, body").stop().animate({scrollTop:0}, 1000);
               
//                location.href = $elemUrl;
               
//                 // $.ajax({  
//                 //     url: $elemUrl,  
//                 //     cache: false,  
//                 //     success: function(html){  
//                 //         $("main").html(html);  
//                 //     }  
//                 // });
//             }
//         }
//     })
// });
    