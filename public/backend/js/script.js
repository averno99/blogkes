// Datatable
$(document).ready( function () {
  $('#myTable').DataTable({
    language: {
        lengthMenu: 'Display _MENU_ records per page',
        zeroRecords: 'Nothing found - sorry',
        info: 'Showing page _PAGE_ of _PAGES_',
        infoEmpty: 'No records available',
        infoFiltered: '(filtered from _MAX_ total records)',
        "paginate": {
          "first": "First",
          "last": "Last",
          "next": "Next",
          "previous": "Previous"
      },
    },
});
} );
// End Datatable

// Tooltip
// const exampleEl = document.getElementById('example')
// const tooltip = new bootstrap.Tooltip(exampleEl, options)
// End Tooltip