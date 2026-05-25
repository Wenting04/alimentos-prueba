$(window).on("load", inicio);

let p, a, d, t;
let pHVal, acVal, dVal, tVal;
let resultado;

function inicio() {
    // Inicializar pestañas del pescado
    $(".pestannas").tabs({
        event: "click"
    });

    /* - -- CURIOSIDADES -- - */
    // Activar tarjetas (función alojada en comun.js)
    activarTarjetas();
    /* ---------------------- */

    /* - -- SIMULADOR -- - */
    // Inicializar variables
    p = $("#pHBarra");
    a = $("#acicezBarra");
    d = $("#densidadBarra");
    t = $("#temperaturaBarra");

    pHVal = $("#pHVal");
    acVal = $("#acVal");
    dVal = $("#dVal");
    tVal = $("#tVal");

    resultado = $("#resultado");

    [p, a, d, t].forEach(el => el.on("input", diagnosticarLeche));

    diagnosticarLeche(); // inicial
    /* ---------------------- */

    /* - -- MEDIDOR PH -- - */
    $('.ph').on('click', function() {
        ocultarTodo();
        $('.ph').css('background-color', '#2875a8');
        $('#infoPH').show();
    });

    $("#phRango").on('input', actualizarValorPh);
    $("#phRango").trigger('input');
    $('#cambiarPh').on('click', cambioPh);
    /* ---------------------- */

    /* - -- MEDIDOR ACIDEZ -- - */
    $('.acidez').on('click', function() {
        ocultarTodo();
        $('.acidez').css('background-color', '#2875a8');
        $('#infoAcidez').show();
    });

    $("#acidezRango").on('input', actualizarValorAcidez);
    $("#acidezRango").trigger('input');
    $('#cambiarAcidez').on('click', cambioAcidez);
    /* ---------------------- */
}

/* ================== */
/* = Medidor Acidez = */
/* ================== */
function actualizarValorAcidez(event){
    let barra = $(event.target);

    let valor = parseFloat(barra.val());
    let min = parseFloat(barra.attr('min'));
    let max = parseFloat(barra.attr('max'));

    let porcentaje = ((valor - min) / (max - min)) * 100;

    if (barra.attr('id') === "acidezRango") {
        $("#acidezValorMov").text(valor.toFixed(1) + "ºD");
    }

    // Determinar los colores según el valor
    let colorIzquierda; 
    
    if (valor > 18) {
        // vieja (peligro, rojo)
        colorIzquierda = "#e74c3c"; // rojo
    } else if (valor >= 14 && valor <= 18) {
        // Normal (ideal, verde)
        colorIzquierda = "#43b66e"; // verde
    } else if (valor < 14) {
        // aguada (advertencia, amarillo)
        colorIzquierda = "#f1c40f"; // amarillo
    } 

    let mensaje = "";
    if (valor < 14) {
        mensaje = "⚠️ <b>Baja:</b> leche aguada o vaca enferma";
    } else if (valor >= 14 && valor <= 18) {
        mensaje = "✔️ <b>Normal:</b> 14ºD a 18ºD";
    } else {
        mensaje = "🚫 <b>Alta:</b> leche vieja o mal refrigerada";
    }

    $("#descripcionAcidez").html(mensaje);
    $("#resultadoAcidez").show();

    barra.css('background', `linear-gradient(to right, ${colorIzquierda} 0%, ${colorIzquierda} ${porcentaje}%, #ddd ${porcentaje}%, #ddd 100%)`);
}

const imagenesAcidezLeche = [
    {
        src: '/img/leche/leche_acidez_baja.png',
        informacion: 'Leche con acidez baja (<14 ºD): tiene un aspecto más claro o diluido, esto puede indicar que la leche este aguada, procedente de animales enfermos (como mastitis) o adulterada con sustancias alcalinas. Esto conlleva un menor valor nutricional, riesgo de adulteración o enfermedad.'
    },
    {
        src: '/img/leche/leche_acidez_normal.png',
        informacion: 'Leche con acidez normal (14-18 ºD): tiene un aspecto homogéneo y blanco uniforme, esto se debe a una composición equilibrada por lo que es una leche apta para consumo y procesamiento.'
    },
    {
        src: '/img/leche/leche_acidez_alta.png',
        informacion: 'Leche con acidez alta (>18 ºD): tiene un aspecto grumoso y separación de fases, lo que indica una proliferación  bacteriana, mala higiene, almacenamiento prolongado sin refrigeración y fermentación de lactosa. Todo esto hace que la leche tenga un sabor agrio, textura grumosa y riesgo para la salud.'
    }
];

let indiceAcidezLeche = 0;

function cambioAcidez() {
    document.getElementById('cambioAcidez').style.display = 'block';
    const imagen = document.getElementById('imagenLecheAcidez');
    const informacion = document.getElementById('informacionAcidezLeche');
    imagen.src = imagenesAcidezLeche[indiceAcidezLeche].src;
    informacion.textContent = imagenesAcidezLeche[indiceAcidezLeche].informacion;
    indiceAcidezLeche = (indiceAcidezLeche + 1) % imagenesAcidezLeche.length;
}

/* ============== */
/* = Medidor pH = */
/* ============== */
function actualizarValorPh(event){
    let barra = $(event.target);

    let valor = parseFloat(barra.val());
    let min = parseFloat(barra.attr('min'));
    let max = parseFloat(barra.attr('max'));

    let porcentaje = ((valor - min) / (max - min)) * 100;

    // Determinar los colores según el valor
    let colorIzquierda;

    if (valor < 6.6) {
        // Fermentada (peligro, rojo)
        colorIzquierda = "#e74c3c"; // rojo
    } else if (valor >= 6.6 && valor <= 6.8) {
        // Fresca (ideal, verde)
        colorIzquierda = "#43b66e"; // verde
    } else if (valor > 6.8 && valor <= 7.0) {
        // Límite superior, transición a peligro
        colorIzquierda = "#f1c40f"; // amarillo
    } else {
        // Contaminada (peligro, rojo)
        colorIzquierda = "#e74c3c"; // rojo
    }

    // Actualiza el valor mostrado
    if (barra.attr('id') === "phRango") {
        $("#phValorMov").text(valor.toFixed(1));
    }

    // Determina el mensaje
    let mensaje = '';
    if (valor < 6.6) {
        mensaje = '❌ <b>Fermentada:</b> pH < 6.6';
    } else if (valor >= 6.6 && valor <= 6.8) {
        mensaje = '✔️ <b>Fresca:</b> pH 6.6–6.8';
    } else if (valor > 7.0) {
        mensaje = '❌ <b>Contaminada:</b> pH > 7.0';
    } else {
        mensaje = '⚠️ <b>Advertencia:</b> pH fuera del rango ideal';
    }

    $("#mensajePh").html(mensaje);
    $("#resultadopH").show();

    // Aplica el degradado de color
    barra.css('background', `linear-gradient(to right, ${colorIzquierda} 0%, ${colorIzquierda} ${porcentaje}%, #ddd ${porcentaje}%, #ddd 100%)`);
}

const imagenesPhLeche = [
    {
        src: '/img/leche/leche_ph_6.5.png',
        informacion: 'Leche fermentada (pH <6.5).'
    },
    {
        src: '/img/leche/leche_ph_6.6.png',
        informacion: 'Leche fresca (pH 6.6-6.8).'
    },
    {
        src: '/img/leche/leche_ph_7.png',
        informacion: 'Leche contaminada (pH >7.0).'
    }
];

let indicePhLeche = 0;

function cambioPh() {
    document.getElementById('cambioPh').style.display = 'block';
    const imagen = document.getElementById('imagenLechePh');
    const informacion = document.getElementById('informacionPhLeche');
    imagen.src = imagenesPhLeche[indicePhLeche].src;
    informacion.textContent = imagenesPhLeche[indicePhLeche].informacion;
    indicePhLeche = (indicePhLeche + 1) % imagenesAcidezLeche.length;
}

/* ============= */
/* = Simulador = */
/* ============= */
function diagnosticarLeche() {
    const pH = parseFloat(p.val());
    const acidez = parseFloat(a.val());
    const densidad = parseFloat(d.val());
    const temperatura = parseFloat(t.val());

    pHVal.text(pH.toFixed(1));
    acVal.text(acidez);
    dVal.text(densidad.toFixed(3));
    tVal.text(temperatura);

    // Cambiar color de fondo de cada barra
    [p, a, d, t].forEach(barra => {
        let valor = parseFloat(barra.val());
        let min = parseFloat(barra.attr('min'));
        let max = parseFloat(barra.attr('max'));
        let porcentaje = ((valor - min) / (max - min)) * 100;
        let colorIzquierda = "#77b4d8";
        let colorDerecha = "#ddd";
        barra.css('background', `linear-gradient(to right, ${colorIzquierda} 0%, ${colorIzquierda} ${porcentaje}%, ${colorDerecha} ${porcentaje}%, ${colorDerecha} 100%)`);
    });

    // Diagnóstico individual y estado global
    let estadoGlobal = "bueno"; // bueno > advertencia > malo

    // pH
    let pHDiag;
    if (pH < 6.6) {
        pHDiag = "❌ Fermentada";
        estadoGlobal = "malo";
    } else if (pH >= 6.6 && pH <= 6.8) {
        pHDiag = "✔️ Fresca";
    } else if (pH > 7.0) {
        pHDiag = "❌ Contaminada";
        estadoGlobal = "malo";
    } else {
        pHDiag = "⚠️ Advertencia";
        if (estadoGlobal !== "malo") 
        estadoGlobal = "advertencia";
    }

    // Acidez
    let acidezDiag;
    if (acidez < 14) {
        acidezDiag = "⚠️ Baja";
        if (estadoGlobal === "bueno") 
        estadoGlobal = "advertencia";
    } else if (acidez >= 14 && acidez <= 18) {
        acidezDiag = "✔️ Normal";
    } else {
        acidezDiag = "🚫 Alta";
        estadoGlobal = "malo";
    }

    // Densidad
    let densidadDiag;
    if (densidad == 1.028) {
        densidadDiag = "⚠️ Aguada o adulterada";
        if (estadoGlobal === "bueno") 
        estadoGlobal = "advertencia";
    } else if (densidad > 1.035) {
        densidadDiag = "🚫 Concentrada o descremada";
        estadoGlobal = "malo";
    } else {
        densidadDiag = "✔️ Ideal";
    }

    // Temperatura
    let temperaturaDiag;
    if (temperatura == 2) {
        temperaturaDiag = "⚠️ Muy baja, riesgo de congelación";
        if (estadoGlobal === "bueno") estadoGlobal = "advertencia";
    } else if (temperatura > 8) {
        temperaturaDiag = "🚫 Inadecuada, riesgo de deterioro";
        estadoGlobal = "malo";
    } else {
        temperaturaDiag = "✔️ Ideal";
    }

    // Diagnóstico global
    let diagnostico;
    if (estadoGlobal === "bueno") {
        diagnostico = "✅ Leche óptima para consumo.";
    } else if (estadoGlobal === "advertencia") {
        diagnostico = "⚠️ Precaución: revise los parámetros en amarillo.";
    } else {
        diagnostico = "❌ No apta para consumo: revise los parámetros en rojo.";
    }

    resultado.html(`
        <p><strong>pH:</strong> ${pHDiag}</p>
        <p><strong>Acidez:</strong> ${acidezDiag}</p>
        <p><strong>Densidad:</strong> ${densidadDiag}</p>
        <p><strong>Temperatura:</strong> ${temperaturaDiag}</p>
        <p><strong>Diagnóstico global:</strong> ${diagnostico}</p>
    `);
}

/* =========== */
/* = OCULTAR = */
/* =========== */
function ocultarTodo() {
    $('.infoParte').hide();
    $('.circulo').css('background-color', '#7ab7d9');
}