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

	// $('#tampil-arti').on('click', function () {
	// $.ajax({
	// 	url: 'https://api.npoint.io/99c279bb173a6e28359c/surat/90',
	// 	type: 'get',
	// 	dataType: 'json',
	// 	success: function (result) {
	// 		// console.log(result);
	// 		// if (result.Response == "True") {
	// 		console.log(result);
	// 		let ayats = result;
	// 		$.each(ayats, function (i, data) {
	// 			$('#list-ayat').append(`
	// 					<div class="col-12 pt-3 border-bottom">
	// 						<div class="d-flex bd-highlight">
	// 							<div class="p-2 flex-shrink-1 bd-highlight">
	// 								<p class="badge badge-light" style="border: 1px solid black;font-size: 20px;">` + ayats[i].nomor + `</p>
	// 							</div>
	// 							<div class="p-2 w-100 text-right">
	// 								<p class="d-flex justify-content-end" style="font-size: 25px;">` + ayats[i].ar + `</p>
	// 							</div>
	// 						</div>
	// 						<div class="p-2 w-100 konten-ayat">
	// 							<p class="d-flex justify-content-start text-left terjemahan-ayat" style="font-size: 15px;font-weight: lighter;">` + ayats[i].id + `</p>
	// 						</div>
	// 					</div>
	// 					`)
	// 		})
	// 	}
	// })

	// $.ajax({
	// 	url: 'http://api.alquran.cloud/v1/surah/114',
	// 	type: 'get',
	// 	dataType: 'json',
	// 	success: function (result) {
	// 		// console.log(result);
	// 		// if (result.Response == "True") {
	// 		console.log(result.data.ayahs);
	// 		let ayats = result.data.ayahs;
	// 		$.each(ayats, function (i, data) {
	// 			$('#list-ayat').append(`
	// 				<div class="col-12 border-bottom">
	// 					<div class="d-flex bd-highlight">
	// 						<div class="p-2 flex-shrink-1 bd-highlight">
	// 							<p class="badge badge-light" style="border: 1px solid black;font-size: 20px;">` + ayats[i].numberInSurah + `</p>
	// 						</div>
	// 						<div class="p-2 w-100 text-right">
	// 							<p class="d-flex justify-content-end" style="font-size: 25px;">` + ayats[i].text + `</p>
	// 						</div>
	// 					</div>
	// 					<div class="p-2 w-100 konten-ayat">
	// 						<p class="d-flex justify-content-start text-left terjemahan-ayat" id="terjemahan-ayat" style="font-size: 15px;font-weight: lighter;">` + ayats[i].juz + `</p>
	// 					</div>
	// 				</div>
	// 				`)
	// 		})
	// 	}
	// })

	// })


});
