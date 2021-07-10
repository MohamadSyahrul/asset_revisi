// $(function() {
//   'use strict';

//   $(function() {
//     $('#dataTableExample').DataTable({
//       "aLengthMenu": [
//         [10, 30, 50, -1],
//         [10, 30, 50, "All"]
//       ],
//       "iDisplayLength": 10,
//       "language": {
//         search: ""
//       }
//     });
//     $('#dataTableExample').each(function() {
//       var datatable = $(this);
//       // SEARCH - Add the placeholder for Search and Turn this into in-line form control
//       var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
//       search_input.attr('placeholder', 'Search Nama');
//       search_input.removeClass('form-control-sm');
//       // LENGTH - Inline-Form control
//       var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');
//       length_sel.removeClass('form-control-sm');
//     });
//   });

// });
$(document).ready(function() {
    // Setup - add a text input to each footer cell
    $("#dataTableExample thead tr")
        .clone(true)
        .appendTo("#dataTableExample thead");
    $("#dataTableExample thead tr:eq(1) th").each(function(i) {
        var title = $(this).text();
        $(this).html(
            '<input type="text" class="form-control" style="width:100%;" placeholder="Cari ' +
                title +
                '" />'
        );

        $("input", this).on("keyup change", function() {
            if (table.column(i).search() !== this.value) {
                table
                    .column(i)
                    .search(this.value)
                    .draw();
            }
        });
    });

    var table = $("#dataTableExample").DataTable({
        orderCellsTop: true,
        fixedHeader: true
    });
});
