(function ($) {
    'use strict';

    let prefixUrl = 'assets/';
    let enGBUrl = prefixUrl + 'i18n/en-GB.json';
    let viUrl = prefixUrl + 'i18n/vi.json';
    let emptyDataUrl = prefixUrl + 'ajax/empty.json';
    let result1Url = prefixUrl + 'ajax/result1.json';
    let result2Url = prefixUrl + 'ajax/result2.json';
    $('#datatable-example1').DataTable({
        language: { url: enGBUrl },
        ajax: emptyDataUrl,
        scrollX: true,
        scrollCollapse: true,
    });

    $('#datatable-example2').DataTable({
        language: { url: enGBUrl },
        ajax: result1Url,
        scrollX: true,
        scrollCollapse: true,
    });

    $('#datatable-example3').DataTable({
        language: { url: viUrl },
        ajax: result2Url,
        scrollX: true,
        scrollCollapse: true,
    });
})(window.jQuery);
