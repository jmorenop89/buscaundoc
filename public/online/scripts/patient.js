var form = $('#frm-validate');
form.validate({
    focusInvalid: false,
    errorElement: 'span',
    errorClass: 'is-invalid text-danger',
    rules: {
        nombres: {required: true},
        apellidos: {required: true},
        fecha_nac :{required :true},
        celular : {required:true},
        email: {required: true,email:true},
        password: {required: true}
    }
});

$('#birthday').datepicker({});