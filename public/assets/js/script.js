//event pada saat link di klik
$('.page-scroll').on('click', function(e){
	// console.log('ok');

	//ambil isi href 
	var tujuan=$(this).attr('href');
	// console.log(href);

	//tangkap elemen ybs
	var elemenTujuan = $(tujuan);
	//console.log(elemenTujuan.offset().top);

	//console.log($('body').scrollTop());

	//pindahkan scroll
	$('html,body').animate({
		scrollTop:elemenTujuan.offset().top-50
	},1000,'swing'); //efek scroll hanya ada 2 swing dan linear

	event.preventDefault(); 
	//bisa e bisa event


});					

//logikanya jquery tlg carikan saya elemen bernama kls page scroll, pd saat click on mouse
//jalankan fungsi dgn pesan ok.