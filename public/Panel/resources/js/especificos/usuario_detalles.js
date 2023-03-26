$("#foto_perfil").change(function () {
    // Código a ejecutar cuando se detecta un cambio de archivO
    previsualizar_imagen(this, '#img-preview');
  });

$(function () {
    $.validator.setDefaults({
    submitHandler: function () {
        alert("Form successful submitted!");
    },
    });
    $("#form_usuariDetalles").validate({
    rules: {
        name: {
        required: true,
        },
        apellidoPaterno: {
        required: true,
        },
        apellidoMaterno: {
        required: true,
        },
        rol: {
        required: true,
        },
        email: {
        required: true,
        email: true,
        },
        password: {
        required: true,
        minlength: 5,
        },
        repassword: {
            required: true,
            minlength: 5,
            },
    },
    messages: {
        name: {
        required: "El nombre es requerido",
        },
        apellidoPaterno: {
        required: "El apellido paterno es requerido",
        },
        apellidoMaterno: {
        required: "El apellido materno es requerido",
        },
        rol: {
        required: "El rol es requerido",
        },
        email: {
        required: "El correo electronico es requerido",
        email: "El correo electronico esta mal formado(example ejemplo@gmail.com)",
        },
        password: {
        required: "La contraseña es requerida",
        minlength: "La contraseña debe tener un minimo de 5 caracteres",
        },
        repassword: {
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
