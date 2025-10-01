import $ from 'jquery';
import 'bootstrap';
import 'datatables.net';

window.$ = window.jQuery = $;

$(document).ready(function() {
  var table = $('.dataTable');

  var columnCount = table.find('thead tr th').length;
  var columnDefs = [];

  if (columnCount === 7) {
    columnDefs = [
      {
        "targets": -1,
        "orderable": false
      }
    ];
  }

  table.DataTable({
    "pageLength": 10,
    "lengthMenu": [10, 15, 25],
    "pagingType": "full",
    "order": [],
    "columnDefs": columnDefs,
    "language": {
      "lengthMenu": "Afiseaza _MENU_ inregistrari",
      "zeroRecords": "Nicio inregistrare gasita",
      "info": "Afisare _START_ - _END_ din _TOTAL_ inregistrari",
      "infoEmpty": "Nu sunt disponibile inregistrari",
      "infoFiltered": "(selectate din _MAX_ total de inregistrari)",
      "paginate": {
        "first": "Inceput",
        "last": "Sfarsit",
        "next": "Inainte",
        "previous": "Inapoi"
      },
      "search": "Cauta"
    }
  });
});