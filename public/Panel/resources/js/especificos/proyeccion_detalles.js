$(function () {
    $("#form_proyeccionDetalles").validate({
    rules: {
        peliculaProyectada: {
        required: true,
        },
        horaProyeccion: {
        required: true,
        },
        sucursal: {
        required: true,
        },
        tipoSala: {
        required: true,
        },
    },
    messages: {
        peliculaProyectada: {
        required: "El nombre de la pelicula es requerido",
        },
        horaProyeccion: {
        required: "El horario es requerido",
        },
        sucursal: {
        required: "La sucursal es requerida",
        },
        tipoSala: {
        required: "El tipo de la sala es requerido",
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
