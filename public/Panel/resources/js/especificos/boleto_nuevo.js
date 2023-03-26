$(function () {
    $.validator.setDefaults({
    submitHandler: function () {
        alert("Form successful submitted!");
    },
    });
    $("#form_boletoNuevo").validate({
    rules: {
        pelicula: {
        required: true,
        },
        numAsientos: {
        required: true,
        },
        fecha: {
        required: true,
        },
        horario: {
        required: true,
        },
    },
    messages: {
        pelicula: {
        required: "El nombre de la pelicula es requerido",
        },
        numAsientos: {
        required: "El numero de asientos es requerido",
        },
        fecha: {
        required: "La fecha es requerida",
        },
        horario: {
        required: "El horario es requerido",
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