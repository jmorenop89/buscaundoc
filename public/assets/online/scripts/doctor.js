var form = $('#frm-doctor-vld');
form.validate({
    focusInvalid: false,
    errorElement: 'span',
    errorClass: 'is-invalid text-danger',
    rules: {
        nombres: {required: true},
        apellidos: {required: true},
        especialidad_id: {required: true},
        ciudad_id: {required: true},
        fecha_nac :{required :true},
        cod_colegiatura :{required :true},
        direccion :{required :true},
        email: {required: true,email:true},
        password: {required: true}
    }
});

$('#fecha').datepicker({format: "dd/mm/yyyy"});