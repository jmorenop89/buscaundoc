var form = $('#frm-doctor-vld');
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
    },);

form.validate({
    focusInvalid: true,
    errorElement: 'div',
    errorClass: 'is-invalid text-danger',
    debug:true,
    rules: {
        nombres: {required: true, noSpace:true, nombres:true},
        apellidos: {required: true, noSpace:true, nombres:true},
        especialidad_id: {required: true},
        ciudad_id: {required: true},
        fecha_nac :{required :true},
        celular:{required:true,number:true, minlength:9},
        cod_colegiatura :{required :true, number:true, minlength:5},
        direccion :{required :true, noSpace:true},
        email: {required: true,correo:true},
        password: {required: true},
        password2: {required:true, equalTo: '#password'},
        agree: {required: true}
    },
    messages: {
        nombres: {
            required:"Este campo es obligatorio.",
            noSpace: "Por favor, evita los espacios.",
            nombres: "Por favor, ingresa ambos nombres",
        },
        apellidos: {
            required:"Este campo es obligatorio.",
            noSpace: "Por favor, evita los espacios.",
            nombres: "Por favor, ingresa ambos apellidos",
        },
        especialidad_id: "Este campo es obligatorio.",
        ciudad_id: "Este campo es obligatorio.",
        fecha_nac: "Este campo es obligatorio.",
        celular:{
            required: "Este campo es obligatorio.",
            number: "Por favor, ingresa solo numeros.",
            minlength: $.validator.format( "Por favor, ingresa como minimo {0} caracteres." ),
        },
        cod_colegiatura:{
            required :"Este campo es obligatorio.",
            number: "Por favor, ingresa solo numeros.",
            minlength: $.validator.format( "Por favor, ingresa como minimo {0} caracteres." ),
            },
        direccion: {
            required: "Este campo es obligatorio.",
            noSpace: "Por favor, evita los espacios.",
        },
        email:{
            required: "Este campo es obligatorio.",
            },
        password: "Este campo es obligatorio.",
        password2: "Las contraseña ingresada no coincide",
        equalTo: "Please enter the same value again.",
        agree: "Necesitas aceptar los terminos y condiciones",
    }
});

$('#fecha').datepicker({format: "dd/mm/yyyy"});
