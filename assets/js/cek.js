$(document).ready(function(){
	$('.date-picker').datepicker().next().on(ace.click_event, function(){
		$(this).prev().focus();
	});


	$("#nik").keyup(function(e){
		var isi = $(e.target).val();
		$(e.target).val(isi.toUpperCase());
		cari_cuti();
	});


	function cari_cuti(){
		var nik = $("#nik").val();

		$.ajax({
			type	: "POST",
			url		: "<?php echo site_url(); ?>/cuti/cek_sisa_cuti",
			data	: "nik="+nik,
			dataType: "json",
			success	: function(data){
				$('#nama_karyawan').val(data.nama_karyawan);
				$('#perusahaan').val(data.perusahaan);
				$('#nama_jabatan').val(data.nama_jabatan);
				$('#nama_brand').val(data.nama_brand);
				$('#sisa_cuti').val(data.sisa_cuti);
			}
		});
	}


});
