$(document).ready(function () {
	$('#produk').modal();
	$('#brand').modal();
	$('.closePesan').click(function (e) {
		e.target.parentElement.style.display = 'none';
	});
	$('#warna').change(function () {
		$('.warna2').prop('disabled', true);
	});
	$('.warna2').keyup(function () {
		if ($('.warna2').val() != "") {
			$('#warna').prop('disabled', true);
		}
	});
	$('#formProduk2').submit(function () {
		var fd = new FormData(this);
		$.ajax({
			url: 'insertProduk',
			method: 'POST',
			data: fd,
			contentType: false,
			processData: false,
			success: function (data) {
				$('.errorImg').html('<span class="text-primary">Mengupload</span>');
				$('.kotakGambar').html(data);
			},
			error: function () {
				alert('Data Gagal Diinput');
			}
		});
	});

	$('.btnsimpan').click(function (e) {
		if (e.target.previousElementSibling.value == "produk") {
			var nama_produk = $('#nama_produk').val();
			if (nama_produk == "") {
				M.toast({
					html: 'Masukan Nama Produk'
				});
			} else {
				$.ajax({
					type: 'ajax',
					method: 'POST',
					url: 'insertNamaProduk',
					dataType: 'json',
					data: {
						nama_produk: nama_produk
					},
					success: function (data) {
						alert('nama produk berhasil disimpan');
						$('#nama_produk').val('');
					},
					error: function () {
						alert('nama produk sudah ada');

					}
				});
			}
		} else if (e.target.previousElementSibling.value == "brand") {
			var nama_brand = $('#nama_brand').val();
			var item_data = $('#item_data select').val();
			if (nama_brand == "") {
				M.toast({
					html: 'Masukan Nama Brand'
				});
			} else {
				$.ajax({
					type: 'ajax',
					method: 'POST',
					url: 'insertNamaBrand',
					dataType: 'json',
					data: {
						nama_brand: nama_brand,
						id_item: item_data
					},
					success: function (data) {
						alert('nama brand berhasil disimpan');
						$('#nama_brand').val('');
					},
					error: function () {
						alert('nama brand sudah ada');

					}
				});
			}
		}


	});
});
