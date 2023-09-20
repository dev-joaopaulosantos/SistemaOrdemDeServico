// Call the datatable jQuery pluggin
$(document).ready(function () {
    $('.dataTable').DataTable({
        language: {
            url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/pt-BR.json',
        },
        responsive: true,
        'aoColumnDefs': [{
            'bSortable': false,
            'aTargets': ['no-sort']
        }]
    });
});