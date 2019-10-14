
var form = $('#frm-buscador');

form.validate({
    focusInvalid: false,
    errorElement: 'span',
    errorClass: 'is-invalid text-danger',
    rules: { specialty: {required: true},  city: {required: true}},
    messages: {  specialty: { required: " *"}, 
                      city: {required: " *" }},      
     }); 

