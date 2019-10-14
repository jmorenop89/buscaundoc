var form = $('#frm-validate');
$.validator.addMethod("noSpace", function(value, element) {
    return value == '' || value.trim().length != 0;
});//campos que no pasen solo espacios
//poner patter personalizados---------------

    $.validator.addMethod( "correo", function( value, element ) {
    return this.optional( element ) || /^[^@]+@[^@]+\.[a-zA-Z]{2,}$/i.test( value );
    }, "Por favor, escriba un correo electrónico válido." );

//fin--------------------------
$.validator.addMethod("nombres", function(value, element ){
    return this.optional(element ) || /^([A-Za-z]{3,})+(\s)([A-Za-z]{3,})+$/i.test( value);
    },)

form.validate({
    focusInvalid: true,
    errorElement: 'div',
    errorClass: 'is-invalid text-danger',
    rules: {
        nombres: {required: true, noSpace:true, nombres:true},
        apellidos: {required: true, noSpace:true, nombres:true},
        fecha_nac: {required: true},
        celular:{required:true,number:true, minlength:9},
        email: {required: true, correo:true},
        password: {required:true},
        password2: {required:true,equalTo: "#password"},
        agree: {required: true}
    },
    messages: {
        nombres: {
            required: "Este campo es obligatorio.",
            noSpace: "Por favor, evita los espacios.",
            nombres: "Por favor, ingresa ambos nombres",
        },
        apellidos: {
            required: "Este campo es obligatorio.",
            noSpace: "Por favor, evita los espacios.",
            nombres: "Por favor, ingresa ambos apellidos",
        },
        fecha_nac: "Este campo es obligatorio.",
        celular:{
            required: "Este campo es obligatorio.",
            number: "Por favor, ingresa solo numeros.",
            minlength: $.validator.format( "Porfavor ingresa como minimo {0} caracteres" ),
        },
        email:{
            required: "Este campo es obligatorio.",
        },
        
        password:{
        required: "Este campo es obligatorio.",
        password2: "Las contraseñas no coinciden",
        equalTo: "Please enter the same value again.",
        agree: "Necesitas aceptar los terminos y condiciones"}
    
    });



$('#birthday').datepicker({format: "dd/mm/yyyy"});
