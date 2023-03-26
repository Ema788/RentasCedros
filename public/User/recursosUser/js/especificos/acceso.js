
$(function () {
    $("#form_login").validate({
    rules: {
        email: {
        required: true,
        email: true,
        },
        password: {
        required: true,
        minlength: 5,
        },
    },
    messages: {
        email: {
        required: "El correo electronico es requerido",
        email: "El correo electronico esta mal formado(example ejemplo@gmail.com)",
        },
        password: {
        required: "La contraseña es requerida",
        minlength: "La contraseña debe tener un minimo de 5 caracteres",
        },
    },
    errorElement: "span",
    errorPlacement: function (error, element) {
        error.addClass("invalid-feedback");
        element.closest(".form-group").append(error);
    },
    highlight: function (element, errorClass, validClass) {
        
    },
    unhighlight: function (element, errorClass, validClass) {
        
    },
    });
});
