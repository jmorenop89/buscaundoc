var form = $('#frm-validate');

form.validate({
    focusInvalid: false,
    errorElement: 'span',
    errorClass: 'is-invalid text-danger',
    rules: {
         nombres: {required: true, minlength:'2', maxlength:'21'},
        apellidos: {required: true, minlength:'2', maxlength:'21'},
        fecha_nac: {required: true, date: true},
        celular: {required: true, digits: true},
        email: {required: true, email:true},
        password: {required:true},
        password2: {equalTo: "#password", required: true},         
        agree: {required: true}
    }

});



$('#birthday').datepicker({format: "dd/mm/yyyy"});