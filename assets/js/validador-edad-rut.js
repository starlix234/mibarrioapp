 //Validación de edad (18+)
document.querySelector(".formulario").addEventListener("submit", function(event) {
    const fechaNac = new Date(document.getElementById("fecha_nac").value);
    const hoy = new Date();
    let edad = hoy.getFullYear() - fechaNac.getFullYear();
    const mes = hoy.getMonth() - fechaNac.getMonth();

    if (mes < 0 || (mes === 0 && hoy.getDate() < fechaNac.getDate())) {
        edad--;
    }

    if (edad < 18) {
        event.preventDefault();
        alert("Debes ser mayor de 18 años para registrarte.");
    }
});

// Validación de RUT chileno con dígito verificador
function validarRut(rut) {
    rut = rut.replace(/\./g, "").replace(/-/g, "");
    const cuerpo = rut.slice(0, -1);
    let dv = rut.slice(-1).toUpperCase();

    let suma = 0;
    let multiplo = 2;

    // Recorremos el RUT de derecha a izquierda
    for (let i = cuerpo.length - 1; i >= 0; i--) {
        suma += multiplo * cuerpo.charAt(i);
        multiplo = multiplo < 7 ? multiplo + 1 : 2;
    }

    const dvEsperado = 11 - (suma % 11);
    const dvFinal = dvEsperado === 11 ? "0" : dvEsperado === 10 ? "K" : dvEsperado.toString();

    return dv === dvFinal;
}

document.querySelector(".formulario").addEventListener("submit", function(event) {
    const rut = document.getElementById("rut").value;
    if (!validarRut(rut)) {
        event.preventDefault();
        alert("El RUT ingresado no es válido.");
    }
});