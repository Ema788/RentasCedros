$(function () {
    $("#form_proyeccionNueva").validate({
    rules: {
        pelicula: {
        required: true,
        },
        horario: {
        required: true,
        },
        tipoSala: {
        required: true,
        },
    },
    messages: {
        pelicula: {
        required: "El nombre es requerido",
        },
        horario: {
        required: "El horario es requerido",
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
