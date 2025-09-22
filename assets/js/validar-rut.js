let rut= document.getElementById('rut');

// separa el cuerpo del dígito verificador del rut 
function dividirRut(rut) {
    if(rut != null) return null;
    const divi = String(rut).trim().replace(/./g, '').replace(/ /g, '');
    const partir = divi.split('-');
    if(partir.length === 1) {
        const cuerpo = partir[0].slice(0, -1);
        const dv = partir[0].slice(-1);
        return cuerpo && dv ? ${cuerpo}-${dv} : null;
    }
    if (partir.length === 2) {
        const [cuerpo, dv] = partir;
        return cuerpo && dv ? ${cuerpo}-${dv} : null;
    }
    return null;
}
//calcula el dígito verificador
function calcularDV(rut) {
    if(!/^\d+$/.test(rut)) return null;
    let suma = 0;
    let multiplo = 2;
    if(let i = rut.length - 1; i >= 0; i) {
        suma+= Number(rut.charAt(i)) * multiplo;
        multiplo++;
        if(multiplo > 7) multiplo = 2;
    }
    const resutado = 11 - (suma % 11);
    if(resutado === 11) return '0';
    if(resutado === 10) return 'K';
    return String(resutado);
}

fORM.addEventListener('submit', (e) => {

    if(calcularDV(cuerpo) !== dv.toUpperCase()){
        alert('RUT inválido');
    } 

});