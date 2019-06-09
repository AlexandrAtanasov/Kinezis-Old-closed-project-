function removeHeaderClasses(){$("header").removeClass("scroll__menu_mobile"),$("header > div.scroll__menu_element").removeClass("scroll__menu_element_fix")}function removeNavClasses(){$("nav").removeClass("scroll__menu_box"),$("nav > div.scroll__menu_element").removeClass("scroll__menu_element_fix")}function removeAllClasses(){removeHeaderClasses(),removeNavClasses()}function showContent(){$("html, body").stop().animate({scrollTop:0},1e3),location.href=$elemUrl}$(document).ready(function(){$(".nav_container > .nav__menu_list > li").on({mouseenter:function(){$(this).find(">ul").stop().slideToggle(300)},mouseleave:function(){$(this).find(">ul").stop().slideToggle(300)}}),$(".overlay__menu_container > .overlay__menu_nav > .nav__menu_list > li").on({click:function(){$(this).parent().find("ul").stop().slideUp(300),$(this).find("+ul").stop().slideToggle(300)}})}),$(document).ready(function(){$(window).on("resize",function(){window.matchMedia("screen and (min-width: 1131px)").matches?removeHeaderClasses():window.matchMedia("screen and (max-width: 1130px)").matches?removeNavClasses():removeAllClasses()}),$(window).on("scroll",function(){if(window.matchMedia("screen and (min-width: 1131px)").matches){$("nav").addClass("scroll__menu_box");var e=$(".scroll__menu_box").offset().top;$(this).scrollTop()>e?$("nav.scroll__menu_box > .scroll__menu_element").addClass("scroll__menu_element_fix"):$("nav.scroll__menu_box > .scroll__menu_element").removeClass("scroll__menu_element_fix")}else if(window.matchMedia("screen and (max-width: 1130px)").matches){$("header").addClass("scroll__menu_mobile");e=$(".scroll__menu_mobile").offset().top;$(this).scrollTop()>e?$("header.scroll__menu_mobile > .scroll__menu_element").addClass("scroll__menu_element_fix"):$("header.scroll__menu_mobile > .scroll__menu_element").removeClass("scroll__menu_element_fix")}else removeAllClasses()})}),$(document).ready(function(){$(this).on("click","span",function(e){$(this).hasClass("nav__menu_person")?($elemUrl="/persons",showContent()):$(this).hasClass("nav__menu_method")?($elemUrl="/article",showContent()):$(this).hasClass("nav__menu_contacts")?($elemUrl="/contacts",showContent()):$(this).hasClass("nav__menu_priceServices")?($elemUrl="/price",showContent()):$(this).hasClass("nav__menu_priceSale")?($elemUrl="/sales",showContent()):$(this).hasClass("nav__menu_problems")?($id=$(this).attr("id"),$elemUrl="/resolvable/problem/"+$id,showContent()):$(this).hasClass("nav__menu_additional")?($id=$(this).attr("id"),$elemUrl="/additional/service/"+$id,showContent()):$(this).hasClass("nav__menu_reviews")?($elemUrl="/reviews",showContent()):$(this).hasClass("nav__menu_rules")?($elemUrl="/rules",showContent()):$(this).hasClass("nav__menu_vacancy")&&($elemUrl="/vacancy",showContent())})}),$(document).ready(function(){$(".header__callback_box button").on("click",function(e){e.stopPropagation(),e.stopImmediatePropagation(),$(".overlay__content_container").toggleClass("overlay__hide"),$(".overlay__blur").toggleClass("blur")}),$(".overlay__content_buttonClose").on("click",function(e){e.stopPropagation(),e.stopImmediatePropagation(),$(".overlay__content_container").toggleClass("overlay__hide"),$(".overlay__blur").toggleClass("blur")})}),$(document).ready(function(){$(".header__menu_box button").on("click",function(e){e.stopPropagation(),e.stopImmediatePropagation(),$(".overlay__menu_container").toggleClass("overlay__hide"),$(".overlay__blur").toggleClass("blur"),$("html, body").stop().animate({scrollTop:0},500)}),$(".overlay__menu_buttonClose").on("click",function(e){e.stopPropagation(),e.stopImmediatePropagation(),$(".overlay__menu_container").toggleClass("overlay__hide"),$(".overlay__blur").toggleClass("blur")})}),$(document).ready(function(){$(".overlay__content_form_elem").submit(function(){var e=$(".form__input_field_name").val(),n=$(".form__input_field_number").val();if(""==e||""==n)return alert("Пожалуйста, заполните все поля, чтобы мы могли Вам перезвонить"),!1;var l=this,o=$(this).serialize();return $.ajax({type:"POST",url:"/../application/core/mailCall.php",data:o,success:function(){alert("Мы скоро Вам перезвоним!")},error:function(){alert("Ошибка заполнения данных")}}).done(function(){l.reset()}),!1})}),function(){var e=$(".overlay__slider_container .overlay__slider_elem"),n=$("<div>",{class:"overlay__slider_nav",css:{display:"none"}}),l=$("<div>",{class:"slider__box"}),o=$("<div>",{class:"slider__box_button"}),s=$("<div>",{class:"slider__box_button"}),t=$("<div>",{class:"slider__box_img"}),a=$("<i>",{class:"fas fa-arrow-left slider__button_backward"}),r=$("<i>",{class:"fas fa-arrow-right slider__button_forward"}),_=$("<img>",{class:"slider__elem_img",src:""});$(n).append(l),$(o).append(a),$(s).append(r),$(t).append(_),$(l).append(o,t,s),$(e).prepend(n)}(),document.addEventListener("DOMContentLoaded",function(e){for(var t=document.getElementsByClassName("slider__elem_img"),o=[],a=-1,n=document.getElementsByClassName("content__article_img_elem"),l=0;l<n.length;l++)n[l].addEventListener("click",function(){r(this.parentNode.parentNode.getElementsByClassName("content__article_img_elem")),s(o,this)});function s(e,n){for(var l=n,o=(l.currentStyle||getComputedStyle(l,!1)).backgroundImage.slice(4,-2).replace(/.*\/images\//g,"/../images/"),s=0;s<e.length;s++)o==e[s]&&(a=s);return t[0].src=e[a],a}function r(e){for(var n=0;n<e.length;n++){var l=(e[n].currentStyle||window.getComputedStyle(e[n],!1)).backgroundImage.slice(4,-2).replace(/.*\/images\//g,"/../images/");o[n]=l}}document.getElementsByClassName("slider__button_forward")[0].addEventListener("click",function(){return a=function(e){return a+1>e.length-1?a=0:a+=1,a}(o),t[0].src=o[a],a}),document.getElementsByClassName("slider__button_backward")[0].addEventListener("click",function(){return a=function(e){return a-1<0?a=e.length-1:a-=1,a}(o),t[0].src=o[a],a})}),$(document).ready(function(){$(".slider__open").on("click",function(e){$(".overlay__slider_nav").css({display:"block"}),e.stopPropagation(),e.stopImmediatePropagation(),$(".overlay__slider_container").toggleClass("overlay__hide"),$(".overlay__blur").toggleClass("blur")}),$(".overlay__slider_buttonClose").on("click",function(e){e.stopPropagation(),e.stopImmediatePropagation(),$(".overlay__slider_container").toggleClass("overlay__hide"),$(".overlay__blur").toggleClass("blur")})});