(function ($) {
    $('#datatable-example1').DataTable({
        language: { url: 'i18n/en-GB.json' },
        ajax: 'ajax/empty.json',
        scrollX: true,
        scrollCollapse: true,
    });

    $('#datatable-example2').DataTable({
        language: { url: 'i18n/en-GB.json' },
        ajax: 'ajax/result1.json',
        scrollX: true,
        scrollCollapse: true,
    });

    $('#datatable-example3').DataTable({
        language: { url: 'i18n/vi.json' },
        ajax: 'ajax/result2.json',
        scrollX: true,
        scrollCollapse: true,
    });
})(window.jQuery);
