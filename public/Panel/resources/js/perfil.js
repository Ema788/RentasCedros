//Previsualizar imagen
document.getElementById("foto_perfil").onchange = function(e) {
    // Se crea un objeto FileReader
    let reader = new FileReader();
    // Se leé el archivo seleccionado y se pasa como argumento al objeto FileReader
    reader.readAsDataURL(e.target.files[0]);
    // Se visualiza la imagen una vez que fue cargada en el objeto FileReader
    reader.onload = function(){
        let imgPreview = document.getElementById('img-preview');
        imgPreview.src = reader.result;
    };
};//end imagen