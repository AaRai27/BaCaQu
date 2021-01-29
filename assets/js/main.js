$(window).scroll(function () {
	if ($(window).scrollTop() > 10) {
		$('#navbar-utama').addClass('main-navbar');
	} else {
		$('#navbar-utama').removeClass('main-navbar');
	}
});
