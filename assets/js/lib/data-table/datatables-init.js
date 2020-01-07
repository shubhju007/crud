(function ($) {
    //    "use strict";


    /*  Data Table
    -------------*/

 	$('#bootstrap-data-table').DataTable({
        dom: 'lBfrtip',
        lengthMenu: [[25, 50, -1], [25, 50, "All"]],
        buttons: [
            
            
        ]
    });


    // $('#bootstrap-data-table-export').DataTable({
    //     lengthMenu: [[ 20, 50, -1], [ 20, 50, "All"]],
    // });



    $('#bootstrap-data-table-export').DataTable({
        dom: 'lBfrtip',
        lengthMenu: [[25, 50, -1], [25, 50, "All"]],
        buttons: [
            
            {
             	extend: 'copy',
             	text: 'Copy',
             	exportOptions: {
			            columns: 'th:not(:last-child)'
			        }
           	},
            {
             	extend: 'csv',
             	text: 'CSV',
             	exportOptions: {
			            columns: 'th:not(:last-child)'
			        }
           	},
            {
             	extend: 'excel',
             	text: 'Excel',
             	exportOptions: {
			            columns: 'th:not(:last-child)'
			        }
           	},
            {
             	extend: 'pdf',
             	text: 'PDF',
             	exportOptions: {
			            columns: 'th:not(:last-child)'
			        }
           	},
            {
             	extend: 'print',
             	text: 'Print',
             	exportOptions: {
			            columns: 'th:not(:last-child)'
			        }
           	}
        ]
    });
    // $('#bootstrap-data-table').DataTable({
    //     dom: 'lBfrtip',
    //     lengthMenu: [[25, 50, -1], [25, 50, "All"]],
    // });
	
	$('#row-select').DataTable( {
			initComplete: function () {
				this.api().columns().every( function () {
					var column = this;
					var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
							);
	 
							column
								.search( val ? '^'+val+'$' : '', true, false )
								.draw();
						} );
	 
					column.data().unique().sort().each( function ( d, j ) {
						select.append( '<option value="'+d+'">'+d+'</option>' )
					} );
				} );
			}
		} );






})(jQuery);