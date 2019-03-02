$(document).ready(function(){

		$('input.number').keyup(function(event) {
					// skip for arrow keys
					if(event.which >= 37 && event.which <= 40){
						event.preventDefault();
					}

					$(this).val(function(index, value) {
						return value
							.replace(/\D/g, "")
							.replace(/([0-9])([0-9]{2})$/, '$1,$2')
							.replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ".")
						;
					});
	});
});

function toAngka(rp){
	var replaced = rp.replace(/[.,]/g,
 function(piece) {
	 var replacements = {
		 ".": ' ',
		 ",": "."
	 };
	 return replacements[piece] || piece;
 });
 return replaced.split(' ').join("");
}

function toHarga(angka){
	    var bilangan= parseFloat(angka);
			var bilangan2=bilangan.toFixed(2);
			var	number_string = bilangan2.toString(),
				split	= number_string.split('.'),
				sisa 	= split[0].length % 3,
				rupiah 	= split[0].substr(0, sisa),
				ribuan 	= split[0].substr(sisa).match(/\d{1,3}/gi);

			if (ribuan) {
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}
			return split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
}
