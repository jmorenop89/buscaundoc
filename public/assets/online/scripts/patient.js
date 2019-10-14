var form = $('#frm-validate');

$.validator.addMethod( "Solotexto", function( value, element ) {
    return this.optional( element ) || /^[a-z," "]+$/i.test( value );
    }, "Solo se permite el ingreso de letras." );

form.validate({
    focusInvalid: false,
    errorElement: 'span',
    errorClass: 'is-invalid text-danger',
    rules: {
         nombres: {Solotexto: true, required: true, minlength:'2', maxlength:'21'}, 
        apellidos: {Solotexto: true, required: true, minlength:'2', maxlength:'21'},
        fecha_nac: {required: true},
        celular: {required: true, digits: true, minlength:'9'},
        email: {required: true, email:true},
        password: {required:true},
        password2: {equalTo: "#password", required: true},         
        agree: {required: true}
    } ,

    messages: {
       agree: { required: "Necesitas aceptar los terminos y condiciones",   
        }, }, 
     
     });



$('#birthday').datepicker({format: "dd/mm/yyyy"});