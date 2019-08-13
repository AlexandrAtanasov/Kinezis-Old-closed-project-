$(document).ready(function() {
    $(".header__callback_box button").on('click', function (event) { 
		event.stopPropagation();
		event.stopImmediatePropagation();
		$(".overlay__content_container").toggleClass("overlay__hide");
		// $(".overlay__blur").toggleClass("blur");
		$(".overlay__blur").toggleClass("overlay__blur_hidden");
	});
	$(".overlay__content_buttonClose").on('click', function (event){
		event.stopPropagation();
		event.stopImmediatePropagation();
		$(".overlay__content_container").toggleClass("overlay__hide");
		// $(".overlay__blur").toggleClass("blur");
		$(".overlay__blur").toggleClass("overlay__blur_hidden");
	})
})