$('#quickForm').validate({
    rules: {
        // email: {
        //     required: true,
        //     email: true,
        // },
        // password: {
        //     required: true,
        //     minlength: 5
        // },
        bitsa: {
            required: true,
            maxlength: 5,
            minlength: 3
        },
        // terms: {
        //     required: true
        // },
    },
    messages: {
        email: {
            required: "Please enter a email address",
            email: "Please enter a vaild email address"
        },
        bitsa: {
            required: "Shyiramo umubare wamafaranga yubitsa",
            minlength: "amaranga arimunsi yi 100 ntiyemewe",
            maxlength: "umubare ntugomba kurenga 99999"
        },
        terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function(error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
    },
    highlight: function(element, errorClass, validClass) {
        $(element).addClass('is-invalid');
    },
    unhighlight: function(element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
    }
});
// 0788753766


// data tabla
$(function() {
    $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
    });
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });
});