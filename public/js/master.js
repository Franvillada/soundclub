window.onload = function() {

    document.getElementById('botonmensaje').addEventListener('click', function(){
        document.querySelector('.bg-modal').style.display = 'flex';
        document.getElementById('message-title').focus();
    });

    document.getElementById('boton-cerrar').addEventListener('click', function(){
        document.querySelector('.bg-modal').style.display = 'none';
    });


}


