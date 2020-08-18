

    $('.order-dt').DataTable( {
        dom: 'Bflrtip',
        buttons: [
            {
                extend: 'copyHtml5',
                exportOptions: {
                    columns: [ 0, ':visible' ]
                }
            },
            {
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: ':visible'
                }
            },
            // {
            //     text: 'JSON',
            //     action: function ( e, dt, button, config ) {
            //         var data = dt.buttons.exportData();

            //         $.fn.dataTable.fileSave(
            //             new Blob( [ JSON.stringify( data ) ] ),
            //             'Export.json'
            //         );
            //     }
            // },
            {
                extend: 'print',
                exportOptions: {
                    columns: ':visible'
                }
            }
        ]
    });
    

    $('.payment-dt').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'copyHtml5',
                exportOptions: {
                    columns: [ 0, ':visible' ]
                }
            },
            {
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: ':visible'
                }
            },
            // {
            //     text: 'JSON',
            //     action: function ( e, dt, button, config ) {
            //         var data = dt.buttons.exportData();

            //         $.fn.dataTable.fileSave(
            //             new Blob( [ JSON.stringify( data ) ] ),
            //             'Export.json'
            //         );
            //     }
            // },
            {
                extend: 'print',
                exportOptions: {
                    columns: ':visible'
                }
            }
        ]
    });


    $('.report-dt').DataTable( {
        dom: 'lBrtip',
        buttons: [
            {
                extend: 'print',
                exportOptions: {
                    columns: ':visible',
                    stripHtml: false
                }
            },
            {
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: ':visible',
                    stripNewlines: false
                }
            },
            {
                extend: 'excel',
                exportOptions: {
                    columns: ':visible'
                }
            }
        ]
    });

    $('.recent-dt').DataTable( {
        dom: 'rtip',
        buttons: [
            {
                extend: 'print',
                exportOptions: {
                    columns: ':visible',
                    stripHtml: false
                },
                text: 'Export'
            }
        ]
    });
