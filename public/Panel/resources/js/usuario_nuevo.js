$(function () {
    $('#form-usuario').validate({
        rules: {
            nombre: {
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
            correo: {
                required: true,
                correo: true
            },
            password: {
                required: true,
                minlength: 5
            },
            repassword: {
                required: true,
                minlength: 5,
                equalTo: "#password"
              
            },
            foto_perfil: {
                required: false,
            }
        },
        messages: {
            nombre: {
                required: 'Se requiere el nombre del usuario',
            },
            apellidoPaterno: {
                required: 'Se requiere el apellido paterno del usuario',
            },
            apellidoMaterno: {
                required: 'Se requiere el apellido paterno del usuario',
            },
            rol: {
                required: 'Se requiere el rol del usuario',
            },
            correo: {
                required: 'Se requiere el correo electrónico del usuario',
                correo: 'Se requiere un email valido'
            },
            password: {
                required: 'Se requiere la contraseña del usuario',
                minlength: 'El tamaño minimo para la contraseña es de 5 caracters'
            },
            repassword: {
                required: 'Se requiere repetir la contraseña del usuario',
                minlength: 'El tamaño minimo para la contraseña es de 5 caracteres',
                equalTo: 'La contraseña no coincide'
            },
            foto_perfil: {
                required: '',
            }
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
        }
    });
});//end validation

function previsualizar_imagen(img = '', btnImg = '') {
    //Cargamos la información de los elementos
    const  loadImage = document.getElementById("#"+btnImg);
    const  previewImage = document.getElementById("#"+img);

    // Se va a seleccionar el archivo a mostrar
    const archivos = loadImage.files;

    // Si no hay archivos salimos de la función y quitamos la imagen
    if (!archivos || !archivos.length) {
        previewImage.src = "";
        return;
    }
    // Ahora tomamos el primer archivo, el cual vamos a previsualizar
    const primerArchivo = archivos[0];

    // Lo convertimos a un objeto de tipo objectURL
    const objectURL = URL.createObjectURL(primerArchivo);

    // Y a la fuente de la imagen le ponemos el objectURL
    previewImage.src = objectURL;

}//end previsualizar_imagen