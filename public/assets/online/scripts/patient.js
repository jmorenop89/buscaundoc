var form = $('#frm-validate');

form.validate({
    focusInvalid: true,
    errorElement: 'div',
    errorClass: 'is-invalid text-danger',
    rules: {
        nombres: {required: true},
        apellidos: {required: true},
        fecha_nac: {required: true},
        celular: {required: true, minlength:9},
        email: {required: true, email:true},
        password: {required:true},
        password2: {equalTo: "#password"},
        agree: {required: true}
    },
    messages: {
        nombres: "Este campo es obligatorio.",
        apellidos: "Este campo es obligatorio.",
        fecha_nac: "Este campo es obligatorio.",
        celular:{
            required: "Este campo es obligatorio.",
            minlength: $.validator.format( "Porfavor ingresa como minimo {0} caracteres" ),
        },
        email:{
            required: "Este campo es obligatorio.",
            email: "Por favor ingresa una direccion de correo correcta.",
        },
        password: "Este campo es obligatorio.",
        password2: "Las contraseñas no coinciden",
        equalTo: "Please enter the same value again.",
        agree: "Necesitas aceptar los terminos y condiciones",
        maxlength: $.validator.format( "Porfavor ingresa como maximo {0} caracteres" ),
        max: $.validator.format( "Please enter a value less than or equal to {0}." ),
        min: $.validator.format( "Please enter a value greater than or equal to {0}." )
    }

});



$('#birthday').datepicker({format: "dd/mm/yyyy"});
