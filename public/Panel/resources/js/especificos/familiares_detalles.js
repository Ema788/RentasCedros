$(function () {
    $.validator.setDefaults({
    submitHandler: function () {
        alert("Form successful submitted!");
    },
    });
    $("#form_familiaresDetalles").validate({
    rules: {
        name: {
        required: true,
        },
        descripcion: {
        required: true,
        },
        duracion: {
        required: true,
        },
        director: {
        required: true,
        },
        estatus: {
        required: true,
        },
        año_estreno: {
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
        duracion: {
        required: "La duracion es requerida",
        },
        director: {
        required: "El director es es requerido",
        },
        estatus: {
        required: "El estatus es es requerido",
        },
        año_estreno: {
        required: "El año estreno es requerido",
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