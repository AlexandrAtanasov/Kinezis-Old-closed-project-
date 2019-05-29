$(document).ready(function() {
    
    $(this).on("click", "span", function (event) {
        if ($(this).hasClass('nav__menu_person'))
        {
            // $elemClass = '.content__person';
            $elemUrl = '/persons';
            showContent();
        } else if ($(this).hasClass('nav__menu_method'))
        {
            // $elemClass = '.content__article';
            $elemUrl = '/article';
            showContent();
        }
         else if ($(this).hasClass('nav__menu_contacts'))
        {
            // $elemClass = '.content__contacts';
            $elemUrl = '/contacts';
            showContent();
        }
         else if($(this).hasClass('nav__menu_priceServices'))
        {
            // $elemClass = '.content__price';
            $elemUrl = '/price';
            showContent();
        } else if($(this).hasClass('nav__menu_priceSale'))
        {
            // $elemClass = '.content__price_sale';
            $elemUrl = '/sales';
            showContent();
        } else if($(this).hasClass('nav__menu_problems'))
        {
            $id = $(this).attr('id');
            $elemUrl = '/resolvable/problem/' + $id;
            showContent();
        } else if($(this).hasClass('nav__menu_additional'))
        {
            $id = $(this).attr('id');
            $elemUrl = '/additional/service/' + $id;
            showContent();
        } else if($(this).hasClass('nav__menu_reviews'))
        {
            $elemUrl = '/reviews';
            showContent();
        } else if($(this).hasClass('nav__menu_rules'))
        {
            $elemUrl = '/rules';
            showContent();
        } else if($(this).hasClass('nav__menu_vacancy'))
        {
            $elemUrl = '/vacancy';
            showContent();
        }
    });
})

function showContent() {
    $("html, body").stop().animate({scrollTop:0}, 1000);
    location.href = $elemUrl;
}
    