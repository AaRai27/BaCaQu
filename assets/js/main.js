$(window).scroll(function () {
	if ($(window).scrollTop() > 10) {
		$('#navbar-utama').addClass('main-navbar');
	} else {
		$('#navbar-utama').removeClass('main-navbar');
	}
});


$(document).ready(function () {
	$(".konten-ayat").hide();
	$("#show-arti").click(function () {
		$(".konten-ayat").slideToggle();
	});

	$(".row-signin").show();
	$(".row-signup").hide();


	$(".row-signin").show();
	$(".row-signup").hide();
	$(".title-page").text("BacaQu - Sign In");
	$(".to-signin").click(function () {
		$(".row-signup").hide();
		$(".row-signin").show();
		$(".title-page").text("BacaQu - Sign In");
	});
	$(".to-signup").click(function () {
		$(".row-signin").hide();
		$(".row-signup").show();
		$(".title-page").text("BacaQu - Sign Up");
	});

});
