$(document).ready(function() {
    $(".header__menu_box button").on('click', function (event) { 
		event.stopPropagation();
		event.stopImmediatePropagation();
		$(".overlay__menu_container").toggleClass("overlay__hide");
		$(".overlay__blur").toggleClass("blur");
	});
	$(".overlay__menu_buttonClose").on('click', function (event){
		event.stopPropagation();
		event.stopImmediatePropagation();
		$(".overlay__menu_container").toggleClass("overlay__hide");
		$(".overlay__blur").toggleClass("blur");
	})
})