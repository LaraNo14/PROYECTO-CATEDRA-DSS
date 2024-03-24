// validaciones.js
function validarRegistro() {
    var nombre = document.getElementById("nombre").value;
    var email = document.getElementById("email").value;
    var nombreUsuario = document.getElementById("nombre_usuario").value;
    var contrasena = document.getElementById("contrasena").value;

    // Validar que ningún campo esté vacío
    if (nombre.trim() === "" || email.trim() === "" || nombreUsuario.trim() === "" || contrasena.trim() === "") {
        mostrarMensaje("Todos los campos son obligatorios", "error");
        return false; // Detener el envío del formulario
    }

    // Validar el formato del correo electrónico
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        mostrarMensaje("Correo electrónico inválido", "error");
        return false; // Detener el envío del formulario
    }

    return true; 
}

function validarInicioSesion() {
    var nombreUsuario = document.getElementById("nombre_usuario").value;
    var contrasena = document.getElementById("contrasena").value;

    // Validar que ningún campo esté vacío
    if (nombreUsuario.trim() === "" || contrasena.trim() === "") {
        mostrarMensaje("Todos los campos son obligatorios", "error");
        return false; // Detener el envío del formulario
    }

    return true; 
}

// Función para mostrar el mensaje de error
function mostrarMensaje(mensaje, tipo) {
    var banner = document.getElementById("mensajeBanner");
    banner.innerHTML = mensaje;
    banner.classList.add(tipo);
    banner.style.display = "block";
    setTimeout(function() {
        banner.style.display = "none";
        banner.classList.remove(tipo);
    }, 3000); 
}
