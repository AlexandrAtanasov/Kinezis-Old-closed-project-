function removeHeaderClasses(){$("header").removeClass("scroll__menu_mobile"),$("header > div.scroll__menu_element").removeClass("scroll__menu_element_fix")}function removeNavClasses(){$("nav").removeClass("scroll__menu_box"),$("nav > div.scroll__menu_element").removeClass("scroll__menu_element_fix")}function removeAllClasses(){removeHeaderClasses(),removeNavClasses()}function showContent(){$("html, body").stop().animate({scrollTop:0},1e3),location.href=$elemUrl}$(document).ready(function(){$(".nav_container > .nav__menu_list > li").on({mouseenter:function(){$(this).find(">ul").stop().slideToggle(300)},mouseleave:function(){$(this).find(">ul").stop().slideToggle(300)}}),$(".overlay__menu_container > .overlay__menu_nav > .nav__menu_list > li").on({click:function(){$(this).parent().find("ul").stop().slideUp(300),$(this).find("+ul").stop().slideToggle(300)}})}),$(document).ready(function(){$(window).on("resize",function(){window.matchMedia("screen and (min-width: 1131px)").matches?removeHeaderClasses():window.matchMedia("screen and (max-width: 1130px)").matches?removeNavClasses():removeAllClasses()}),$(window).on("scroll",function(){if(window.matchMedia("screen and (min-width: 1131px)").matches){$("nav").addClass("scroll__menu_box");var e=$(".scroll__menu_box").offset().top;$(this).scrollTop()>e?$("nav.scroll__menu_box > .scroll__menu_element").addClass("scroll__menu_element_fix"):$("nav.scroll__menu_box > .scroll__menu_element").removeClass("scroll__menu_element_fix")}else if(window.matchMedia("screen and (max-width: 1130px)").matches){$("header").addClass("scroll__menu_mobile");e=$(".scroll__menu_mobile").offset().top;$(this).scrollTop()>e?$("header.scroll__menu_mobile > .scroll__menu_element").addClass("scroll__menu_element_fix"):$("header.scroll__menu_mobile > .scroll__menu_element").removeClass("scroll__menu_element_fix")}else removeAllClasses()})}),$(document).ready(function(){$(this).on("click","span",function(e){$(this).hasClass("nav__menu_person")?($elemUrl="/persons",showContent()):$(this).hasClass("nav__menu_method")?($elemUrl="/article",showContent()):$(this).hasClass("nav__menu_centers")?($elemUrl="/centers",showContent()):$(this).hasClass("nav__menu_contacts")?($elemUrl="/contacts",showContent()):$(this).hasClass("nav__menu_priceServices")?($elemUrl="/price",showContent()):$(this).hasClass("nav__menu_priceIndividual")?($elemUrl="/individual",showContent()):$(this).hasClass("nav__menu_priceSale")?($elemUrl="/sales",showContent()):$(this).hasClass("nav__menu_problems")?($id=$(this).attr("id"),$elemUrl="/resolvable/problem/"+$id,showContent()):$(this).hasClass("nav__menu_additional")?($id=$(this).attr("id"),$elemUrl="/additional/service/"+$id,showContent()):$(this).hasClass("nav__menu_rehab")?($elemUrl="/additional/rehab",showContent()):$(this).hasClass("nav__menu_equipment")?($elemUrl="/additional/equipment",showContent()):$(this).hasClass("nav__menu_reviews")?($elemUrl="/reviews",showContent()):$(this).hasClass("nav__menu_rules")?($elemUrl="/rules",showContent()):$(this).hasClass("nav__menu_vacancy")?($elemUrl="/vacancy",showContent()):$(this).hasClass("nav__menu_organizations")&&($elemUrl="/organizations",showContent())})}),$(document).ready(function(){$(".header__callback_box button").on("click",function(e){e.stopPropagation(),e.stopImmediatePropagation(),$(".overlay__content_container").toggleClass("overlay__hide"),$(".overlay__blur").toggleClass("blur")}),$(".overlay__content_buttonClose").on("click",function(e){e.stopPropagation(),e.stopImmediatePropagation(),$(".overlay__content_container").toggleClass("overlay__hide"),$(".overlay__blur").toggleClass("blur")})}),$(document).ready(function(){$(".header__menu_box button").on("click",function(e){e.stopPropagation(),e.stopImmediatePropagation(),$(".overlay__menu_container").toggleClass("overlay__hide"),$(".overlay__blur").toggleClass("blur"),$("html, body").stop().animate({scrollTop:0},500)}),$(".overlay__menu_buttonClose").on("click",function(e){e.stopPropagation(),e.stopImmediatePropagation(),$(".overlay__menu_container").toggleClass("overlay__hide"),$(".overlay__blur").toggleClass("blur")})}),$(document).ready(function(){$(".overlay__content_form_elem").submit(function(){var e=$(".form__input_field_name").val(),n=$(".form__input_field_number").val();if(""==e||""==n)return alert("Пожалуйста, заполните все поля, чтобы мы могли Вам перезвонить"),!1;var o=this,l=$(this).serialize();return $.ajax({type:"POST",url:"/../application/core/mailCall.php",data:l,success:function(){alert("Мы скоро Вам перезвоним!")},error:function(){alert("Ошибка заполнения данных")}}).done(function(){o.reset()}),!1})}),function(){var e=$(".overlay__slider_container .overlay__slider_elem"),n=$("<div>",{class:"overlay__slider_nav",css:{display:"none"}}),o=$("<div>",{class:"slider__box"}),l=$("<div>",{class:"slider__box_button"}),t=$("<div>",{class:"slider__box_button"}),s=$("<div>",{class:"slider__box_img"}),a=$("<i>",{class:"fas fa-arrow-left slider__button_backward"}),r=$("<i>",{class:"fas fa-arrow-right slider__button_forward"}),_=$("<img>",{class:"slider__elem_img",src:""});$(n).append(o),$(l).append(a),$(t).append(r),$(s).append(_),$(o).append(l,s,t),$(e).prepend(n)}(),document.addEventListener("DOMContentLoaded",function(e){for(var s=document.getElementsByClassName("slider__elem_img"),l=[],a=-1,n=document.getElementsByClassName("content__article_img_elem"),o=0;o<n.length;o++)n[o].addEventListener("click",function(){r(this.parentNode.parentNode.getElementsByClassName("content__article_img_elem")),t(l,this)});function t(e,n){for(var o=n,l=(o.currentStyle||getComputedStyle(o,!1)).backgroundImage.slice(4,-2).replace(/.*\/images\//g,"/../images/"),t=0;t<e.length;t++)l==e[t]&&(a=t);return s[0].src=e[a],a}function r(e){for(var n=0;n<e.length;n++){var o=(e[n].currentStyle||window.getComputedStyle(e[n],!1)).backgroundImage.slice(4,-2).replace(/.*\/images\//g,"/../images/");l[n]=o}}document.getElementsByClassName("slider__button_forward")[0].addEventListener("click",function(){return a=function(e){return a+1>e.length-1?a=0:a+=1,a}(l),s[0].src=l[a],a}),document.getElementsByClassName("slider__button_backward")[0].addEventListener("click",function(){return a=function(e){return a-1<0?a=e.length-1:a-=1,a}(l),s[0].src=l[a],a})}),$(document).ready(function(){$(".slider__open").on("click",function(e){$(".overlay__slider_nav").css({display:"block"}),e.stopPropagation(),e.stopImmediatePropagation(),$(".overlay__slider_container").toggleClass("overlay__hide"),$(".overlay__blur").toggleClass("blur")}),$(".overlay__slider_buttonClose").on("click",function(e){e.stopPropagation(),e.stopImmediatePropagation(),$(".overlay__slider_container").toggleClass("overlay__hide"),$(".overlay__blur").toggleClass("blur")})}),document.addEventListener("DOMContentLoaded",function(){try{var o,l={};!function(){if($("div").hasClass("content__elem_carousel")){!function(){o=document.querySelectorAll(".carousel__elem");for(var e=0;e<o.length;e++)l[e]=o[e].innerHTML}();var n=0;setTimeout(function e(){document.querySelector(".content__elem_carousel").style.backgroundImage="url('"+l[n]+"')",n<o.length-1?n++:n=0,document.querySelector(".content__elem_carousel").classList.remove("content__elem_carousel_hide"),document.querySelector(".content__elem_carousel").classList.add("content__elem_carousel_show"),setTimeout(function(){document.querySelector(".content__elem_carousel").classList.remove("content__elem_carousel_show"),document.querySelector(".content__elem_carousel").classList.add("content__elem_carousel_hide")},3450),setTimeout(e,4e3)},4)}}()}catch(e){console.log("not working"),console.log(e.name),console.log(e)}});