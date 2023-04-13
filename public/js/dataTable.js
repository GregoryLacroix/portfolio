$(document).ready(function() {
    $('#gallery-admin').DataTable({
        language: {
            // url: http://localhost/PHP/10-boutique + js/dataTables.french.json
            url: '/JS/dataTables.french.json'
        },
        "aoColumnDefs": [
            { 'bSortable': false, 'aTargets': [ 2,3,4 ] }
        ]
    });
});