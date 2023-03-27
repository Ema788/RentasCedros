$(function () {
    $("#form_sucursalNueva").validate({
    rules: {
        name: {
        required: true,
        },
    },
    messages: {
        name: {
        required: "El nombre es requerido",
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
