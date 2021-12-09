require('./bootstrap');


$(document).ready(function () {
    $('#table_pessoas').DataTable();

    tinymce.init({
        selector: '#email_textarea'
    });
});
