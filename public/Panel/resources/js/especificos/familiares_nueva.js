$(function () {
    $("#form_familiaresNuevo").validate({
    rules: {
        name: {
        required: true,
        },
        descripcion: {
        required: true,
        },
        director: {
        required: true,
        },
        año_estreno: {
        required: true,
        },
        duracion: {
        required: true,
        },
        genero: {
        required: true,
        },
        estatus: {
        required: true,
        },
    },
    messages: {
        name: {
        required: "El nombre de la pelicula es requerido",
        },
        descripcion: {
        required: "La descripcion es requerida",
        },
        director: {
        required: "El director es es requerido",
        },
        año_estreno: {
        required: "El año estreno es requerido",
        },
        duracion: {
        required: "La duracion es requerida",
        },
        genero: {
        required: "El genero es requerido",
        },
        estatus: {
        required: "El estatus es es requerido",
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