$(document).ready(function(){
	// dataTable
        if($(".dtable").length > 0)
            $(".dtable").dataTable({bFilter: false, bInfo: false, bPaginate: false, bLengthChange: false,
                                   bSort: true,
                                   bAutoWidth: true,
                                   "aoColumnDefs": [{"bSortable": false,
                                                     "aTargets": [ -1 , 0]}]});
        if($(".fTable").length > 0)
            $(".fTable").dataTable({bSort: true,
																		bAutoWidth: false,
                                    "iDisplayLength": 20, "aLengthMenu": [20,40,80,120], // can be removed for basic 10 items per page
                                    "aoColumnDefs": [{"bSortable": false,
                                                     "aTargets": [ -1 , 0]}]});

        if($(".fpTable").length > 0)
            $(".fpTable").dataTable({"bSort": true,
                                     "bAutoWidth": true,
                                    "iDisplayLength": 20, "aLengthMenu": [20,40,80,120], // can be removed for basic 10 items per page
                                    "sPaginationType": "full_numbers",
                                    "aoColumnDefs": [{"bSortable": false,
                                                     "aTargets": [ -1 , 0]}]});

        if($(".aTable").length > 0)
            $(".aTable").dataTable({bSort: true,
                                    "sPaginationType": "full_numbers",
                                    "bProcessing": true,
                                    "sAjaxSource": 'php/ajax_datatable.php'});

    // eif dataTable
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

jQuery(window).load(function() { // makes sure the whole site is loaded
    $('#loading').fadeOut(); // will first fade out the loading animation
    $('#preloader').delay(50).fadeOut('slow'); // will fade out the white DIV that covers the website.
    $('body').delay(50).css({
        'overflow': 'visible'
    });
})
