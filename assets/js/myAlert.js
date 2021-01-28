var url = "http://localhost/wisata-desa/"; 

const flashData = $('.flash-data').data('flashdata');

if(flashData)
{
	swal({
		title: 'Alert',
		text: '' + flashData,
		icon: 'success'
	});
}

// Logout
$('#btn-logout').on('click', function(){
	swal({
		title: "Peringatan !",
		text: "Apakah Anda yakin akan Logout ?",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			window.location = url + "auth/logout";
		} else {
			swal("Logout dibatalkan.");
		}
	});
})

// Hapus
$('.btn-hapus').on("click", function(e){
	e.preventDefault();

	const href = $(this).attr('href');

	swal({
		title 		: "Konfirmasi Hapus",
		text		: "Apakah anda yakin menghapus data ini?",
		icon		: "warning",
		buttons 	: true,
		dangerMode 	: true
	})
	.then((willDelete) => {
		if(willDelete){
			document.location.href = href;
		}else{
			swal("Data Batal dihapus", {
				button: false,
				timer : 1000
			});
		}
	})
})

