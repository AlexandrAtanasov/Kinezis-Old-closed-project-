$(document).ready(function() {
    // for desktop screens
    $(".nav_container > .nav__menu_list > li").on({
        mouseenter:
            function() {
                $(this).find(">ul").stop().slideToggle(300)
            },
        mouseleave:
            function() {
                $(this).find(">ul").stop().slideToggle(300)
            },
    });
    // for mobile menu
    $(".overlay__menu_container > .overlay__menu_nav > .nav__menu_list > li").on({
        click:
            function() {
                // find open submenu and close it
                $(this).parent().find("ul").stop().slideUp(300);
                // find this element and open his submenu    
                $(this).find("+ul").stop().slideToggle(300);
            }
    });
})
