$(document).ready(function() {
    $('#select-choose').select2();
    $("#select-choose").select2({
        tags: true,
        tokenSeparators: [',', ' ']
    });
});